<?php 

require_once 'Log.php';


$log = new Log('cli');

$log->error("Username or password is incorrect");
$log->info("User logged in successfully");