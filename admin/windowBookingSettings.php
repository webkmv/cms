<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS."ModelBooking.php";
    
    $template = new ViewIndex();
    $model = new ModelBooking();
    
    $template->assign("booking", $model->getBookingSettings ());
    $template->display("settings_booking.tpl");
    
?>
