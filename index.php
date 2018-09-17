<?php
require_once "app/bootstrap.php";
use App\Hello;
use App\Config\Settings;

$myClass = new Hello();
echo $myClass->sayHi();
$settings = new Settings();
var_dump($settings);