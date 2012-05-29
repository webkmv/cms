<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_MODELS . 'ModelModules.php';
    require_once DIR_ADMIN_VIEWS . 'ViewModules.php';
    
    $modules = new ModelModules();
    $view = new ViewModules();
    
    $view->assign($media, DIR_ADMIN_MEDIA);
    $view->assign("nameSection", "Модули");
    $view->assign("modules", $modules->getModules());
    $view->display("list_modules.tpl");

/*
*	Ядро управления модулями
*	  админский раздел
*

//Устанавливает опубликован модуль или нет
function published()
{
}

//проверяет включен или нет модуль
function is_published()
{
}

//позиция где выводить модуль
function posistion()
{
}

//установка модуля
function setup()
{
}
*/
?>