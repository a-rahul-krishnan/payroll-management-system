<?php

require('dbconnect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `designation` WHERE id ='$id'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgdesignation.php');