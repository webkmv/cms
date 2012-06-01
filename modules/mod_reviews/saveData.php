<?php
    
    require_once '../../config.php';
    require_once DIR_MODULES.'mod_reviews/ModelReviews.php';
    
    
    // Получение данных из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
	$text = $_POST['text'];
	
	$date = date("m.d.y H:i:s");
    // Сохранение данных в базе
    $model = new ModelReviews();
    $model->InsertReviews($name, $email, $title, $text,$date);
    
?>