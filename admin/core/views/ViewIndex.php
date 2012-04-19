<?php

require_once "/var/www/html/cms/libs/config.php";
require_once "Smarty/Smarty.class.php";

/**
 * Представления главной страницы админки
 *
 */
class ViewIndex extends Smarty
{
  public function ViewIndex ()
  {
    $this->__construct();
    $this->template_dir = "core/templates/templates/";
    $this->compile_dir  = "core/templates/templates_c/";
    $this->config_dir   = "core/templates/configs/";
    $this->cache_dir    = "core/templates/cache/";

    $this->caching = false; // включаем кэширование шаблонов
    $this->debugging = true; // выключаем отладку
  }
}

?>