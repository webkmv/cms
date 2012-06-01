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
            
            $res = mysql_query("SELECT email,send_report FROM booking_settings");
	    $isSend = mysql_fetch_array($res);
		
	    $msg = "ФИО: $name<br> День рождения: $date_of_birth<br> Телефон: $phone<br>
                    E-mail: $email<br> Населенный пункт: $locality<br> Дата заезда: $date_of_arrival<br>
                    Количество дней: $number_of_days<br> Категория номера: $category<br>
                    Количество проживающих(взрослых): $number_of_people , детей: $number_of_child<br>
                    Пожелания:<br>$wishes";
		
	    if ($isSend['send_report'] == 1)
	    {
                $sub = '=?windows-1251?B?'.base64_encode(iconv("utf-8", "cp1251", "Фома бронирования")).'?=';
                $headers = 'MIME-Version: 1.0'. "\r\n";  
                $headers .= 'Content-type: text/html;'. "\r\n";
                $headers .= 'From: =?windows-1251?B?'.base64_encode(iconv("utf-8", "cp1251", "Бронирование")).'?= <'.$email.'>'."\r\n";
	
                mail($isSend['email'], $sub, iconv("utf-8", "cp1251", $msg), $headers);            
            }
            if (!mysql_query($sql))
            {
                $error = "Не получается добавить запись. Подробнее: ".mysql_error();
                $this->_logs->AddLog($error);
                die ($error);
            }
        }
        
    }
?>