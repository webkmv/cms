<?php

require_once 'config.php';
require_once DIR_LIBS.'Smarty/Smarty.class.php';

/**
 * Представления страниц сайта
 *
 */
class ViewIndex extends Smarty
{
	public function ViewIndex ()
	{
		$this->__construct();
		$this->template_dir = "templates/templates/";
		$this->compile_dir  = "templates/templates_c/";
		$this->config_dir   = "templates/configs/";
		$this->cache_dir    = "templates/cache/";

		$this->caching = CACHING; // выключаем кэширование шаблонов
		$this->debugging = DEBUG; // выключаем отладку
	}

}
?>