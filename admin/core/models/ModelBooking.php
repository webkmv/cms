<?php
    
    require_once DIR_LIBS.'Logs.php';
    require_once DIR_LIBS.'DataBase.php';
    
    class ModelBooking
    {
        private $_mySQL;
        private $_logs;
        
        public function __construct()
        {
            $this->_mySQL = new DataBase();
            $this->_mySQL->Connect();
            $this->_logs = new Logs();
        }
        
        
        /*
         *  Получение списка
         * 
         *  @return массив с данными
         */
        public function getList()
        {
            $query = "SELECT * FROM booking";
            $queryResult = mysql_query($query) or die(mysql_error());
           
            while($data = mysql_fetch_array($queryResult))
            {
                $booking[] = $data;
            }
            
           return @$booking;
        }
        
        /*
         *  Удаление записи по id
         * 
         *  @param $id
         *  @return void
         */
        public function deleteById($id)
        {
            if (!mysql_query("DELETE FROM booking WHERE id=$id"))
            {
                $error = "Не получается удалить запись. Подробнее: ".mysql_error();
                $this->_logs->AddLog($error);
                die ($error);
            }
        }
        
        
        /**
	 * Вывод настроек модуля
	 * 
	 * @result array Возвращает массив хэшей с данными настроек
	 */
	public function getBookingSettings()
	{
            $sql = "SELECT * FROM booking_settings";
            
            if (!$query = mysql_query($sql))
            {
                    $error = "Ошибка извлечения из базы. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
                    $this->_logs->AddLog($error);
                    throw new Exception($error);
            }
            
            return mysql_fetch_array($query);
	}
        
        public function insertSetBooking($id, $email, $send_report)
        {
            $sql = "UPDATE booking_settings
                    SET email = '".$email."', send_report = '".$send_report."'
                    WHERE id = '".$id."'";
            
            if (!$query = mysql_query($sql))
            {
                $error = "Ошибка записи. Файл '".__FILE__."'. Строка: '".__LINE__."'. Ошибка: ".mysql_error();
                $this->_logs->AddLog($error);
                throw new Exception($error);
            }
        }
        
    }
    
?>