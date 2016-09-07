<?php

function parseContacts($filename)
{
    $contacts = [];

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $fileContent = fread($handle, filesize($filename));
    fclose($handle);
    $fileContent = explode("\n", $fileContent);
    array_pop($fileContent);
    // $thing = $fileContent[0];
    foreach ($fileContent as $key => $value) {
    	$thing = explode("|", $value);
    	$somearray = [];
    	$somearray['name'] = $thing[0];
    	$somearray['phoneNumber'] = substr($thing[1], 0, 3) . '-' .
    								substr($thing[1], 3, 3) . '-' .
    								substr($thing[1], 6);
    	$contacts[] = $somearray;
    }

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
