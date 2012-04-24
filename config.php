<?php

// пути к системным папкам
define ('DIR_ROOT', dirname(__FILE__)."/");
define ('DIR_LIBS', DIR_ROOT."libs/");
define ('DIR_ADMIN', DIR_ROOT."admin/");
define ('DIR_ADMIN_CORE', DIR_ADMIN."core/");
define ('DIR_ADMIN_VIEWS', DIR_ADMIN_CORE."views/");
define ('DIR_ADMIN_MODELS', DIR_ADMIN_CORE."models/");
define ('DIR_ADMIN_TEMPLATES', DIR_ADMIN_CORE."templates/templates/");

// параметры загрузки файлов
// пока почему-то не работает...???
define ('UPLOAD_MAX_FILESIZE', (1024 * 1024 * 50)); // максимальный размер загружаемого файла в мегабайтах

// база данных
define ('DB_HOST', "localhost");
define ('DB_NAME', "cms");
define ('DB_USER', "usercms");
define ('DB_PASSWORD', "123456");
define ('DB_CHARSET', "utf8");

// настроки системы шаблонов
define ('DEBUG', false); // режим отладки шаблонов
define ('CACHING', true); // кэширование шаблонов

// настройка логгирования
define('LOG_FILE', "log.txt");
?>