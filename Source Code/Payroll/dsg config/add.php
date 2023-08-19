<?php

require('dbconnect.php');
$Designation = $_POST['Designation_name'];
$sql = "INSERT INTO designation (`designation_name`) VALUES ('$Designation')";

$result = mysqli_query($conn,$sql);

header('Location: ../pgdesignation.php');