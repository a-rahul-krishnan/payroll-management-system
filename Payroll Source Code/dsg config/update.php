<?php

require('dbconnect.php');
$id2 = $_POST['uDesignation_id'];
$dsg1 = $_POST['uDesignation_name'];
$sql = "UPDATE `designation` SET `designation_name`='$dsg1' WHERE `id`='$id2'";
$result = mysqli_query($conn,$sql);

header('Location: ../pgdesignation.php');