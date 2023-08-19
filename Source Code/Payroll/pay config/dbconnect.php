<?php

$server_name = 'localhost:3307';
$user_name   = 'root';
$password    = '';
$database    = 'payroll';

$conn = mysqli_connect($server_name,$user_name,$password,$database) or die('Mysql connection failed');
