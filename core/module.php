<?php
/*
*	Ядро управления модулями
*/
include ('../config.php');

class Modules
{ 
    public function getModules($folders)
    {
        foreach ($folders as $fileName)
        {
            $path = '../modules/' . $fileName;
            $dh = opendir($path);
            
            $index = $path . '/index.php';
            $install = $path . '/install.php';
            
            if (file_exists($install))
            {
                echo $fileName . ' ' . "<a href='".$install."?action=install'>Установка</a><br />";
            }
            elseif (file_exists($index))
            {
                echo $fileName . ' module installed<br />';
            }
            closedir($dh);
        }
    }
    

    public function scan($path)
    {
        if(is_dir($path))
        {
            $i = 0;
            $folders = new ArrayObject;
            $dh = opendir($path); 
            while (false !== ($dir = readdir($dh)))
            {
                if (is_dir($path . $dir) && $dir !== '.' && $dir !== '..')
                {
                    $subdir = $path . $dir . '/';
                    $folders[$i] = $dir; 
                    $this->scan($subdir);
                    $i++;
                }
                else
                {
                    continue;
                }
            }
            closedir($dh);
            return $folders;
        }
        else
        {
            print "Директорий не найдено"; 
        }
    }
}

    
$mod = new Modules();
$var = $mod->scan(DIR_MODULES);
$mod->getModules($var);
        
/*  $mod = Scan(DIR_MODULES);
        print_r($mod);*/
?>