<?php
    
    require_once DIR_LIBS.'DataBase.php';
    
    class ModelModules
    {
        private $mySQL;
        
        public function __construct()
        {
            $this->mySQL = new DataBase();
            $this->mySQL->Connect();
        }
        
        /**
        *  Извлечение из БД всех новостей
        *
        *  @return array - двумерный массив, где первой поле порядковый номер, второе - имя поля
        */
        public function getModules()
        {
           $query = "SELECT * FROM modules";
           $queryResult = mysql_query($query) or die(mysql_error());
           
           while($data = mysql_fetch_array($queryResult))
           {
               $modules[] = $data;
           }
           return @$modules;
        }
        
    }

?>
