<?php

$connect = mysqli_connect('localhost', 'root', '', 'students');

if(!$connect){
	die('Not connected to the server');
}

?>