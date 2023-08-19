<?php

require('dbconnect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `employee` WHERE id ='$id'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgemployee.php');