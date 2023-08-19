<?php

require('dbconnect.php');
$payroll = $_POST['Payroll_name'];
$name = $_POST['name'];
$dpt1 = $_POST['department'];
$dsg= $_POST['designation'];
$sql = "INSERT INTO pay (`name`,`department`,`designation`,`payment`) VALUES ('$name','$dpt1','$dsg','$payroll')";

$result = mysqli_query($conn,$sql);

header('Location: ../pgpayroll.php');