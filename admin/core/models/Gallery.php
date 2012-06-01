<?php

    require_once DIR_LIBS.'Logs.php';
    require_once DIR_LIBS.'DataBase.php';
    
    class Gallery
    {
        private $_mySQL;
        private $_logs;
        
        public function __construct()
        {
            $this->_mySQL = new DataBase();
            $this->_mySQL->Connect();
            $this->_logs = new Logs();
        }
        
        /**
        * Добавление данных картинки
        * 
        * @param string $title заголовок
        * @return void
        */
        public function saveImg($imageName, $date)
        {
            $small_image = ;
            $query = "INSERT INTO gallery (path_to_small, path_to_original, date) VALUES ('$small_image', '$imageName', '$date')";
            if (!mysql_query($query))
            {
                    $error = "Не удалось добавить запись. Подробнее: ".mysql_error();
                    $this->_logs->AddLog($error);
                    die ($error);
            }
        }
        
        public function uploadImg()
        {
            
        }
        
    }

?>