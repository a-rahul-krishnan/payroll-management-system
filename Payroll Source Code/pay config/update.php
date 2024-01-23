<?php

require('dbconnect.php');
$id2 = $_POST['upayroll_id'];
$dsg1 = $_POST['upayroll_name'];
$name = $_POST['uname'];
$dpt1 = $_POST['udepartment'];
$dsg= $_POST['udesignation'];
$sql = "UPDATE `pay` SET `name`='$name',`department`='$dpt1',`designation`='$dsg',`payment`='$dsg1' WHERE `id`='$id2'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgpayroll.php');