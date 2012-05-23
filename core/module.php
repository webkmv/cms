<?php
/*
*	Ядро управления модулями
*/
include '../config.php';

class modules
{
    /*function __construct($dir)
    {
        $this -> dirs = $dir;
    }*/
 
    function getModules($dir)
    {
        $m = Scan($dir);
        print_r($m);
    }

    function Scan($path)
    {
        if(is_dir($path))
        {
            $i = 0;
            $dh = opendir($path); 
            while (false !== ($dir = readdir($dh)))
            {
                if (is_dir($path . $dir) && $dir !== '.' && $dir !== '..')
                {
                    $subdir = $path . $dir . '/'; 
                    $mod[$i] = $dir; 
                    Scan($subdir); 
                $i++;
                }
                else
                {
                    next; 
                }
                
            }
            return $mod;
            closedir($dh); 
        }
        else
        {
            print "Директорий не найдено"; 
        } 
    }
}
$mod = new modules();
$mod ->getModules(DIR_MODULES);
/*  $mod = Scan(DIR_MODULES);
        print_r($mod);*/
?>