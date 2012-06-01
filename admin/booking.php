<?php
    
    require_once "core/configcore.php";
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS."ModelBooking.php";
    
    $model = new ModelBooking();
    $view = new ViewIndex();
    
    if((isset($_GET['action']) && $_GET['action']) == 'delete' && isset($_GET['id']))
    {
        $model->deleteById($_GET["id"]);
        header('Location: booking.php');
    }
    else
    {
        try
        {
            $view->assign("booking", $model->getList());
            $view->display("list_booking.tpl");
        }
        catch (Exception $exception)
        {
            die ($exception->getMessage());
        }
    }
      
?>