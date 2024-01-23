<?php

require('dbconnect.php');
$employee = $_POST['employee_name'];
$dsg = $_POST['employee_dsg'];
$dpt = $_POST['employee_dpt'];
$sql = "INSERT INTO employee (`employee_name`,`designation`,`department`) VALUES ('$employee','$dsg','$dpt')";

$result = mysqli_query($conn,$sql);

header('Location: ../pgemployee.php');