<?php
#SIMPLE REDIRECT SYSTEM
#VERSION 0.1
#AUTHOR: Simeon Emanuilov 

#### FILES FORMAT ###
# data.csv
# /url-to-redirect, htttps://redirect.com/destination

ob_start();

function Redirect($url, $permanent = true) {
	header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

$current_request = "$_SERVER[REQUEST_URI]";
$csv = array_map('str_getcsv', file('data.csv'));

foreach($csv as &$row) {
	$request = $row[0];
	$destination = $row[1];
	if ($current_request == $request) {
		Redirect($destination);
	}
}	
