<?php
/*
*********************SERVER INFORMATION*******************
The $_SERVER is an associative array contains a lot information from the web server.

*/

$file=$_SERVER['PHP_SELF']; //returns the filename of the currently executing scripts;
echo"$file</br>";

$ip_address=$_SERVER['SERVER_ADDR'];
echo"$ip_address</br>";

$host_server=$_SERVER['SERVER_NAME'];
echo"$host_server</br>";

$server_software=$_SERVER['SERVER_SOFTWARE'];
echo"$server_software</br>";

$server_protocol=$_SERVER['SERVER_PROTOCOL'];
echo"$server_protocol</br>";


$server_port=$_SERVER['SERVER_PORT'];
echo"$server_port</br>";

$request_method=$_SERVER['SERVER_METHOD'];
echo"$request_method";




?>