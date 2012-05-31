<?php
    
    require_once '../../config.php';
    require_once DIR_MODULES.'mod_booking/modelBooking.php';
    
    
    // Получение данных из формы
    $name = $_POST['booking_name'];
    $date_of_birth = $_POST['day_of_birth'] . ' ' . $_POST['month_of_birth'] . ' ' . $_POST['year_of_birth'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $locality = $_POST['locality'];
    $date_of_arrival = $_POST['day_of_arrival'] . ' ' . $_POST['month_of_arrival'] . ' ' . $_POST['year_of_arrival'];
    $number_of_days = $_POST['number_of_days'];
    $category = $_POST['category'];
    $number_of_people = $_POST['number_of_people'];
    $number_of_child = $_POST['number_of_child'];
    $wishes = $_POST['wishes'];
    print_r($_POST);
    // Сохранение данных в базе
    $model = new modelBooking();
    $model->save($name, $date_of_birth, $phone, $email, $locality,
                $date_of_arrival, $number_of_days, $category, $number_of_people, $number_of_child, $wishes);
    
?>