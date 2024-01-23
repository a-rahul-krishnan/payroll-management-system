<?php

require('dbconnect.php');
$id1 = $_POST['department_id'];
$dpt1 = $_POST['udepartment_name'];
$sql = "UPDATE `department` SET `department_name`='$dpt1' WHERE `id`='$id1'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgdepartment.php');