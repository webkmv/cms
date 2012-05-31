<?php
    
    require_once DIR_LIBS . 'Logs.php';
    require_once DIR_LIBS.'DataBase.php';
    
    class ModelBooking
    {
        
        private $_mySQL;
        
        public function __construct()
        {
            $this->_mySQL = new DataBase();
            $this->_mySQL->Connect();
            $this->_logs = new Logs();
        }
        
        /**
         *  Добавление данных в базу
         *
         *  @param very_many_params
         *  @return void
         */
        public function save($name, $date_of_birth, $phone, $email, $locality,
                $date_of_arrival, $number_of_days, $category, $number_of_people, $number_of_child, $wishes)
        {
            $sql = "INSERT INTO booking (name, date_of_birth, phone, email, locality, date_of_arrival,
                                        number_of_days, category, number_of_people, number_of_child, wishes) 
                    VALUES ('$name', '$date_of_birth', '$phone', '$email', '$locality', '$date_of_arrival',
                    '$number_of_days', '$category', '$number_of_people', '$number_of_child', '$wishes')";
            
            if (!mysql_query($sql))
            {
                $error = "Не получается добавить запись. Подробнее: ".mysql_error();
                $this->_logs->AddLog($error);
                die ($error);
            }
        }
        
    }

?>