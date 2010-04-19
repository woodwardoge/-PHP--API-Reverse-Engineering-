<?php

$logfile = "reverse.log";

$response = array(
	"url" => $_SERVER["REDIRECT_URL"],
	"post" => $_POST,
	"get" => $_GET,
	"auth" => array(
		"user" => $_SERVER['PHP_AUTH_USER'],
		"password" => $_SERVER['PHP_AUTH_PW']
	)
);

$handler = fopen($logfile, "a+");
fwrite($handler, json_encode($response)."\n");
fwrite($handler, "==========\n");
fclose($handler);

?>