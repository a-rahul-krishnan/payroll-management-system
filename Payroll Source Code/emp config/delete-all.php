<?php

require('dbconnect.php');
$sql = "TRUNCATE TABLE employee";

$result = mysqli_query($conn,$sql);

header('Location: ../pgemployee.php');