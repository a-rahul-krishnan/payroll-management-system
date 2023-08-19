<?php

require('dbconnect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `department` WHERE id ='$id'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgdepartment.php');