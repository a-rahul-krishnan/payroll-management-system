<?php

require('dbconnect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `pay` WHERE id ='$id'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgpayroll.php');