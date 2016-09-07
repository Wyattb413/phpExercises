<?php

function logMessage($logLevel, $message) 
{
	$dateForLogFileName = date("Y-m-d");
	$fileName = "log-{$dateForLogFileName}.log";
	$today = date("Y-m-d H:i:s");
	$logInfo = $today . " " . '[' . $logLevel . ']' . " " . $message . PHP_EOL;
	$handle = fopen($fileName, 'a');
	fwrite($handle, $logInfo);
	fclose($handle);

}


function logInfo($message)
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("ERROR", $message);
}

logError("Username or password is incorrect");
logInfo("User logged in successfully");
