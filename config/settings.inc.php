<?php
define('_DB_SERVER_', 'localhost');
define('_DB_NAME_', 'admin_yazmart');
echo  $_SERVER['HTTP_HOST'];
if( $_SERVER['HTTP_HOST'] === 'yazmart.konim.biz' ){
	define('_DB_USER_', 'yaacov');
	define('_DB_PASSWD_', 'zx262626');
}else
	{
	
		define('_DB_USER_', 'root');
		define('_DB_PASSWD_', '');
	
	}	
define('_DB_PREFIX_', 'ko_');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_COOKIE_KEY_', 'dO4OrU8PZnpvnRykTRTBSOX11hhs8CJTDuEtBRx0bD7xH4kZ1MPTmmsZ');
define('_COOKIE_IV_', 'EPwDDbOF');
define('_PS_CREATION_DATE_', '2016-02-07');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.1.2');
define('_RIJNDAEL_KEY_', 'KXrrWZ4mQD4z3c8sbbohpFACNmI5faXx');
define('_RIJNDAEL_IV_', 'cBEMXxu8CvxF2R1pwbiHDQ==');
