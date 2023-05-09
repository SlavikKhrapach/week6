<?php
/*
 * Slavik Khrapach
 * 4/8/2023
 * 328/application/index.php
 * Controller for application project
 *
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();

    echo $view->render('views/home.html');
});

//Run fat free
$f3->run();
