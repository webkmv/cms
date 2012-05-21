<?php

require_once "libs/config.php";
require_once "Logs.php";

/**
 * Класс для защиты от различных атак
 */
class Security
{
  private $_denyWords = array('UNION','CHAR','INSERT','DELETE','SELECT','UPDATE','GROUP','ORDER','BENCHMARK','union','char','insert','delete','select','update','group','order','benchmark');

  public function __construct()
  {
    $this->_logs = new Logs();
  }


  /**
   * Проверка GET данных
   *
   * @param string $url GET данные  
   * @return boolean
   */
  public function CheckGetData ($url)
  {
    
  }

  /**
   * Проверка email
   *
   * @param string $email email адрес  
   * @return boolean
   */
  function CheckEmail ($emmail)
  {

  }

  /** 
   * Фильтрация XSS. 
   * 
   * @param  string $DataBefore данные до фильтрции 
   * @return string $DataAfter данные после фильтрации 
   */ 
  public function XssClean($DataBefore) 
  { 
    // если пусто ниче не делаем 
    if(empty($DataBefore)) 
        return $DataBefore; 
             
    $DataAfter = doXssClean($dataBefore); 
   
         
    // что можно 
    $DataAfter = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $DataAfter); 
    $DataAfter = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $DataAfter); 
    $DataAfter = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $DataAfter); 
    $DataAfter = html_entity_decode($DataAfter, ENT_COMPAT, 'UTF-8'); 

    // Удляем все что начинается с "on" или xmlns 
    $DataAfter = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $DataAfter); 

    // Удаляем javascript: и vbscript: скрипты 
    $DataAfter = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $DataAfter); 
    $DataAfter = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $DataAfter); 
    $DataAfter = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $DataAfter); 

    // Для IE: <span style="width: expression(alert('Ping!'));"></span> 
    $DataAfter = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $DataAfter); 
    $DataAfter = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $DataAfter); 
    $DataAfter = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $DataAfter); 

    // Удаляем элементы пространства имен (we do not need them) 
    $DataAfter = preg_replace('#</*\w+:\w[^>]*+>#i', '', $DataAfter); 

    do 
    { 
      // Удаляем нежелательные теги
      $DataBeforeOld = $DataAfter; 
      $DataAfter = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $DataAfter); 
    } 
    while ($DataBeforeOld !== $DataAfter); 
      return $DataAfter; 
  } 

  /**
   * Цикл для массивов (XSS) фильтр
   *
   * @param array $array массивов
   * @return array $array
   */
  function doXssClean ($array)
  {
     if(is_array($array)) 
     { 
        foreach($array as $key => $value) 
        { 
           $array[$key] = $this->doXssClean($array); 
        } 
         return $array; 
     }  
  }
  
  /** 
   * Предотвращение вредоносной эксплуатации 
   * 
   * @param  string Данные для очистки
   * @return string 
   */ 
  protected function СleanInputKeys($data) 
  { 
      $chars = PCRE_UNICODE_PROPERTIES ? '\pL' : 'a-zA-Z'; 
         
      if ( ! preg_match('#^[' . $chars . '0-9:_.-]++$#uD', $data)) 
      { 
          die('Запрещенные символы в глобальных переменных'); 
      } 
         
      return $data; 
  } 

  /** 
   * Экранирование данных
   * 
   * @param  array $data  Данные для очистки 
   * @return mixed array
   */ 
  protected function CleanInputData($data) 
  { 
      if(is_array($data)) 
      { 
          $newArray = array(); 
          foreach($data as $key => $value) 
          { 
              $newArray[$this->CleanInputKeys($key)] = $this->CleanInputData($value); 
          } 
             
            return $newArray; 
      } 
         
      if($this->magic_quotes_gpc === TRUE) 
      { 
          // Избавляемся от magic quotes! 
          $data = stripslashes($data); 
      } 
         
      $data = $this->XssClean($data); 
        
      return $data; 
  } 
  
  /**
   * Проверка $_GET и $_POST переменных на наличие опасных данных и SQL инъекций 
   *
   * @return void
   */
  function checkVars() {  
         foreach($_GET as $_ind => $_val) { 
                         $_GET[$_ind] = htmlspecialchars(stripslashes($_val)); 
  
                         $exp = explode(" ",$_GET[$_ind]); 
                         foreach($exp as $ind => $val) { 
                                 if(in_array($val,$this->_denyWords)) $this->hack("Попытка хакерской атаки! Доступ закрыт!<br>"); 
                         } 
         } 
  
         foreach($_POST as $_ind => $_val) { 
                         $_POST[$_ind] = htmlspecialchars(stripslashes($_val)); 
  
                         $exp = explode(" ",$_POST[$_ind]); 
                         foreach($exp as $ind => $val) { 
                                 if(in_array($val,$this->_denyWords)) $this->hack("Попытка хакерской атаки! Доступ закрыт!<br>"); 
                         } 
         } 
  
  }

  function hack($msg)
  {
    echo '<font color="red"><b>Угроза: </b></font>'.$msg.'<br>\n';
    die();
  }
}
?>