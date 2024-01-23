<?php

require('dbconnect.php');
$id4 = $_POST['uemployee_id'];
$emp1 = $_POST['uemployee_name'];
$dsg = $_POST['uemployee_dsg'];
$dpt = $_POST['uemployee_dpt'];
$sql = "UPDATE `employee` SET `employee_name`='$emp1',`designation`='$dsg',`department`='$dpt' WHERE `id`='$id4'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgemployee.php');