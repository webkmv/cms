<?php
    
    require_once 'core/configcore.php';
    require_once DIR_LIBS.'Logs.php';
    require_once DIR_LIBS.'Files.php';
    require_once DIR_LIBS.'DataBase.php';
    
    class ModelArticles
    {
        private $mySQL;
        
        public function __construct()
        {
            $this->mySQL = new DataBase();
            $this->mySQL->Connect();
            $this->_logs = new Logs();
        }
        
        /**
        *  Извлечение из БД всех новостей
        *
        *  @return array - двумерный массив, где первой поле порядковый номер, второе - имя поля
        */
       public function getAllArticles()
       {
           $query = "SELECT id, title, author, published FROM articles;";
           $queryResult = mysql_query($query) or die(mysql_error());
           
           while($data = mysql_fetch_array($queryResult))
           {
               $articles[] = $data;
           }
           return @$articles;
       }
       
        /**
         *  Просмотр конкретной новости
         *
         *  @return array - ассоциативный массив, индексы - поля
         *  @param int $id - id статьи получаемый из GET-запроса
         */
        
        public function getArticle($id)
        {
            $query = "SELECT title, text, author, date FROM articles WHERE id = $id";
            $queryResult = mysql_query($query) or die(mysql_error());
            $article = mysql_fetch_array($queryResult);
            return $article;
        }
        
        /**
        *   Удаление статей
        * 
        *   @param int $id - id шаблона
        */
        public function DeleteArticle($id)
        {
            if (!mysql_query("DELETE FROM articles WHERE id=$id"))
            {
                $error = "Не получается удалить статью. Подробнее: ".mysql_error();
                $this->_logs->AddLog($error);
                die ($error);
            }
        }
        
        /**
	 * Добавление страницы
	 * 
	 * @param string $title
	 * @param string $description
	 * @param string $keywords
	 * @param string $text
	 * @param string $author
	 * @param date  $date
	 */
        public function addArticle($title, $description, $keywords, $text, $author, $date)
        {
            $sql = "INSERT INTO articles (title, description, keywords, text, author, date) 
                    VALUES ('$title', '$description', '$keywords', '$text', '$author', '$date')";
            
            if (!mysql_query($sql))
            {
                $error = "Ошибка добавления новой статьи в базу.Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
                $this->_logs->AddLog($error);
                throw new Exception($error);
            }
        }
        
    }
    
?>