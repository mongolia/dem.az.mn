<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


error_reporting(E_ALL ^ E_NOTICE);

if (ini_get('session.save_handler') != 'user') {
//	ini_set( 'session.save_handler', 'user' );
}
ini_set("url_rewriter.tags", "");
ini_set("gd.jpeg_ignore_warning", 1);
//ini_set('session.cookie_lifetime', 2880);
//ini_set('session.use_cookies',true);
//header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Thu, 1 Oct 2009 04:00:00 GMT"); // Date in the past


define('DS', DIRECTORY_SEPARATOR);

define('ABS_DIR', substr(dirname(__FILE__), 0,-7));
define('LIB_DIR', ABS_DIR . 'library' . DS);
//define('TMP_DIR', ABS_DIR . 'tmp' . DS);
define('CACHE_DIR', ABS_DIR . 'cache' . DS);
define('LOG_DIR', ABS_DIR . 'log' . DS);
define('MODULE_DIR', LIB_DIR . 'modules' . DS);

//session_save_path(TMP_DIR.'sessions'.DS);
//media folders. relative to domain
define('CSS_DIR', DS . 'css' . DS);
define('JS_DIR', DS . 'js' . DS);
define('IMAGE_DIR', DS . 'images' . DS);

//Language
define('LANG_DEFAULT', 'mn');
define('LANG_DIR', ABS_DIR . 'lang' . DS);

require_once(LIB_DIR.'classes'.DS.'Loader.php');
Loader::registerAutoload();

$config = new Config($config);
$log = new Log();

