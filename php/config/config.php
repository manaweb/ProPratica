<?php

@include 'php/classes/header.class.php';
@include 'php/functions/functions.php';

session_start();

define('DB_SERVIDOR','localhost');
define('DB_USUARIO','root');
define('DB_SENHA','');
define('DB_BANCO','propratica');
define('CONF_EMAIL', '');

define ('DOMAIN','http://higvac.net/101fm/');
define ('CSS_DIRECTORY',DOMAIN.'css/');
define ('JS_DIRECTORY',DOMAIN.'js/');
define ('IMG_DIRECTORY',DOMAIN.'img/');
