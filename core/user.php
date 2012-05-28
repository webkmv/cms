<?php

require_once '../config.php';
require_once DIR_LIBS.'database.php';

class User
{
    /*
     * Имя пользователя
     * @val string
     */
    private $name = '';
    
    /*
     * Авторизован или нет пользователь
     * @val bool
     */
    private $logged_in = false;
    
    /*
     * Группа к которй принадлежит пользователь
     * @val string
     */
    private $user_group = '';
    
    
    function __construct()
    {
        $this -> init();
    }
    
    private function init()
    {
        $db = new DataBase();
	$db->Connect();
    }
    /*
     *  Проверяем авторизован пользователь или нет
     *
     */
    function is_user()
    {
        if($logged_in && $this -> user_group == 'autorized')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function is_admin()
    {
        if($logged_in && $this -> user_group == 'admin')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}
?>