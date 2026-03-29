<?php

$db_name = 'schoolstock';
$link = mysqli_connect('localhost','root','',$db_name);
if (!$link) {
		die('Could not connect: ' .mysqli_error());
}
?>