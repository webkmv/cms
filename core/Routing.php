<?php

/**
 * @author YAAP <yaap@yandex.ru>
 * @category   Ngeblog
 * @package    Ngeblog_AuthSub
 * @license    http://www.gnu.org/copyleft/lesser.html  GNU LGPL 2.1
 * @link       http://yaap.newway.com.ua/2009/06/13/chpu-svoimi-rukami-phpchpu-svoimi-rukami-php/
 * 
 * 
 */

class Links
{
	var $rules=array();
	var $site_name="";
	var $active=0;
	
	function __construct($site_name,$use_ufu){
		$site_name=trim($site_name);
		if ($site_name!="" && $site_name[strlen($site_name)-1] != "/") 
			$site_name.="/";
		$this->site_name=trim($site_name);
		$this->active=intval($use_ufu);		
	}
	
	
	/**
	 *  иницилизация обьекта правилами для формирования урлов
	 * 
	 * @return 
	 * @param object $rules - массив с правилами
	 */	
	function init($rules) {
		if (is_array($rules)) {
			foreach ($rules as $rule) 
				$this->addRule($rule);

		}		
	}
	
	
	
	/**
	 * добавление отдельного правила для урла
	 * 
	 * @return 
	 * @param object $rule - вдумерный массив вида array('market',"do=?"); 
	 */
	function addRule ($rule) {
		if (is_array($rule)) {
			if (isset($rule[0]) && isset($rule[1])) {
				$count=count(array_values(array_filter(explode('/', $rule[0]))));
				$this->rules[$count][]=$rule;
			}			
		}		
	}
	/**
	 * Разбор ЧПУ-шного урла для формирования обычного GET  запроса
	 * @return true\false
	 * @param string $url - строка вида /market/2/
	 */
	function parseURL($url) {
		if (strpos($url,"?")!== false) {
			$aditionalUrl=substr($url,strpos($url,"?")+1);
			$this->createRequest($aditionalUrl);
			$url=substr($url,0,strpos($url,"?"));			
		}
		
		$parts=array_values(array_filter(explode('/', $url)));
		if (!isset($this->rules[count($parts)]))
			return false;
		$rules=$this->rules[count($parts)];
		$tmpUrl=$this->tmpUrl($parts);
		$newUrl="";
		foreach($rules as $v) {
			if ($v[0] == $tmpUrl) {
				$newUrl=$v[1];
				break;
			}				
		}
		
		if ($newUrl == "")
			return false;
		$newUrl=$this->replaceMask($newUrl,$parts);
		if ($newUrl === false)
			return false;

		$this->createRequest($newUrl);
		
		return true;
	}
	
	/**
	 * создание GET  переменных из строки запроса
	 * @return 
	 * @param string $url  - преобразованный в обычный формат урл
	 */
	private function createRequest($url){
		$urls=explode("&",$url);
		foreach ($urls as $v){
			$v2=explode("=",$v,2);
			if (!isset($v2[1]))
				$v2[1]="";
			if (isset($v2[0]) && $v2[0]!="")
			$_GET[$v2[0]]=$v2[1];
		}
	}
	
	/**
	 * Замена знаков вопроса в правилах
	 * @return 
	 * @param object $query - исходный урл
	 * @param object $values  - значения в порядке следования знаков вопросов в $query
	 */
	private function replaceMask($query,$values){
			if (empty($query)) {
				return '';
			}
			if ($values === null) {
				return ' '.$query;
			}
			$data = array();
			if (! is_array($values)) {
				$data[] = $values;
			} else {
				$data = $values;
			}
			if (substr_count($query, '?') != count($data)) 
				return false;
			
			$right = $query;
			$query = '';
			foreach ($data as $key=>$value) {
				list($left, $right) = explode('?', $right, 2);
				
					$query .= $left.$value;
			}
			$query = $query.$right;

			return $query;
	}
	
	/**
	 * Формирование временного урла со знаками вопросов вместо значений из кусков
	 * @return 
	 * @param object $parts - значения
	 */
	private function tmpUrl($parts) {
		$res="";
		if (is_array($parts)){
			foreach($parts as $v){
				if (ereg("^[0-9]+$",$v))
					$v="?";
				$res.=$v."/";
			}
			$res=substr($res,0,strlen($res)-1);
			return $res;			
		}
		
		return "";
	}
	
	/**
	 * В зависимости от настроек использования ЧПУ - формирует собственно ЧПУ-шній урл или возвращает переданній запрос
	 * @return string
	 * @param object $link -обычный GET  запрос
	 */
	function createUFU($link) {
		if (!$this->active) { // ufu doesn't need;
			if ($this->site_name != "") {
			if ($link[0] == "/")
				$link=substr($link,1);				
				$link=$this->site_name.$link;			
			}
			
			return $link;
		}
		
		
		
		if (strpos($link,"?")!== false) 
			$link=substr($link,strpos($link,"?")+1);
		$parts=explode("&",$link);
		$parts2=array();
		foreach ($parts as $v) {
			$v2=explode("=",$v);
			if (!isset($v2[1]))
				$v2[1]="";
			if (isset($v2[0]) && $v2[0]!="")
			$parts2[$v2[0]]=$v2[1];
		}
		
		$newUrl="";
		if (isset($parts2['do'])) {
			$newUrl.=$parts2['do']."/";
			unset($parts2['do']);	
		}
		if (isset($parts2['task'])) {
			$newUrl.=$parts2['task']."/";
			unset($parts2['task']);	
		}
		
		foreach ($parts2 as $v) {
			$newUrl.=$v."/";
		}
		
		if ($this->site_name != "") {
			if ($newUrl[0] == "/")
				$newUrl=substr($newUrl,1);				
				$newUrl=$this->site_name.$newUrl;			
						
		}
		
		return $newUrl;	
			
	}
	
	
	function pagger($url,$page,$per_page,$total){
		
	 	$count_pages=ceil($total/$per_page);
		if ($count_pages==1) return '';
		$result='';	
		
				
		for ($i=1;$i<=$count_pages;$i++){
			if ($i==$page) $i2='<span class="active">'.$i.'</span>';else $i2=$i;
			
					
				if ($i==1) $result.='<a href="'.$this->createUFU($url.'&amp;page='.$i).'">'.$i2.' </a>';
				elseif ($i==$count_pages) $result.='<a href="'.$this->createUFU($url.'&amp;page='.$i).'">'.$i2.' </a>';
				elseif (($i>=$page-2)&&($i<=$page+2)) $result.='<a href="'.$this->createUFU($url.'&amp;page='.$i).'">'.$i2.' </a>';
				elseif (($i==$page-3)||($i==$page+3)) $result.='...';						
		}	
	
	return $result;
	 	
	 }
	
	
	
}

?>