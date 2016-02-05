<?php

// TODO: comments
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT.DS.'lib'.DS.'init.php');

require_once(ROOT.DS.'config'.DS.'config.php');

App::run($_SERVER['REQUEST_URI']);