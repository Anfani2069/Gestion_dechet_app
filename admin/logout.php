<?php 

$auth=0;
include('../lib/includes.php');
$_SESSION=array();

header('location:'.WEBROOT.'admin/login.php');