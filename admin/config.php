<?php
// HTTP
define('HTTP_SERVER', 'http://shopping.local/admin/');
define('HTTP_CATALOG', 'http://shopping.local/');

// HTTPS
define('HTTPS_SERVER', 'http://shopping.local/admin/');
define('HTTPS_CATALOG', 'http://shopping.local/');

// DIR
define('DIR_APPLICATION', '/Volumes/DATA/workspace/shopping/admin/');
define('DIR_SYSTEM', '/Volumes/DATA/workspace/shopping/system/');
define('DIR_IMAGE', '/Volumes/DATA/workspace/shopping/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM.'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'storage/download/');
define('DIR_LOGS', DIR_SYSTEM.'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM.'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM.'storage/upload/');
define('DIR_CATALOG', '/Volumes/DATA/workspace/shopping/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'shopping');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
