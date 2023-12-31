<?php

//Start Session
session_start();

//include Configuration
require_once('config/config.php');


//Helper Function Files
require_once('helpers/db_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/system_helper.php');


//Autoload classes
// function __autoload($class_name){
function myAutoload($class_name)
{

    require_once('libraries/' . $class_name . '.php');
}


spl_autoload_register('myAutoload');
