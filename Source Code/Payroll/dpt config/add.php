<?php

require('dbconnect.php');
$department = $_POST['department_name'];
$sql = "INSERT INTO department (`department_name`) VALUES ('$department')";

$result = mysqli_query($conn,$sql);

header('Location: ../pgdepartment.php');