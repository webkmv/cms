<?php

require_once DIR_LIBS."Smarty/Smarty.class.php";

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

    $this->caching = CACHING; // выключаем кэширование шаблонов
    $this->debugging = DEBUG; // выключаем отладку
  }
}

?>