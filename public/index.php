<?php

//error_reporting(0);

session_start();

require_once('../routes.php');
require_once('../src/classes/autoload.php');

$basic_auth = new Core\BasicAuth('../.htpasswd', true);
$access_keys = new Core\AccessKeys('../.htkeys', true);

$url_path = Core\Commons::url_path();
$router = new Core\Router(_ROUTES_);
$router->fetch($url_path);