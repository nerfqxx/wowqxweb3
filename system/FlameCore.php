<?php
/**
|-------------------------------------------------------------------------|
| FLAME SESSION
|-------------------------------------------------------------------------|
| @var $_SESSION
|-------------------------------------------------------------------------|
*/
 if (!isset($_SESSION)) session_start();

/**
|-------------------------------------------------------------------------|
| FLAME Version
|-------------------------------------------------------------------------|
| @var string
|-------------------------------------------------------------------------|
*/
define('FLAME_VERSION', '1.0');

/*
|--------------------------------------------------------------------------|
| Install CMS Required
|--------------------------------------------------------------------------|
*/
if(file_exists("install")){
	header("Location: install");
	die();
}

/*
|--------------------------------------------------------------------------|
| Prevent most browsers can not handle javascript through the "HttpOnly" attribute
|--------------------------------------------------------------------------|
*/
 ini_set('session.cookie_httponly', 1);

/*
|--------------------------------------------------------------------------|
| Only use cookies for session id propagation.
|--------------------------------------------------------------------------|
*/
 ini_set('session.use_only_cookies', 1);

/*
|--------------------------------------------------------------------------|
| Set the default time zone UTC.
|--------------------------------------------------------------------------|
*/
date_default_timezone_set(TIMEZONE);

/*
|--------------------------------------------------------------------------|
| CORE CMS
|--------------------------------------------------------------------------|
*/
define('MAINTENANCE', false);
define('DEVELOPMENT_ENVIRONMENT', false);
define('DS', DIRECTORY_SEPARATOR);
// Directory Root
define('__ROOT__', dirname(dirname(__FILE__)));
// Static files
define('STATIC', BASE_URL.'static/');
// Directory WebKit
define('SYSTEM', __ROOT__.'/system/');
define('WEBKIT', SYSTEM.'webkit/');
define('LANG', SYSTEM.'languages/');
define('CLASS_DIR', SYSTEM.'class/');

include(LANG."lang.php");
include(SYSTEM."class.php");
include(SYSTEM."function.php");
include(SYSTEM."OOP.php");
