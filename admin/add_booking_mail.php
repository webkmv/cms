<?php

    require_once 'core/configcore.php';
    require_once DIR_LIBS.'Logs.php';
    require_once DIR_ADMIN_MODELS.'ModelBooking.php';
    
    try
    {
        //данные формы
        $id = $_POST['id'];
        $email = $_POST['email'];
        $send_report = $_POST['send_report'];
        
        //сохраняем настройки базе
        $model = new ModelBooking();
        $model->insertSetBooking($id, $email, $send_report);
        
        header('Location: booking.php');
    }
    catch (Exception $exception)
    {
            die ($exception->getMessage());
    }

?>