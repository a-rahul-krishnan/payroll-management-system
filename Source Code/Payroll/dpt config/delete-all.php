<?php

require('dbconnect.php');
$sql = "TRUNCATE TABLE department";

$result = mysqli_query($conn,$sql);

header('Location: ../pgdepartment.php');