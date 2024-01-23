<?php

require('dbconnect.php');
$sql = "TRUNCATE TABLE pay";

$result = mysqli_query($conn,$sql);

header('Location: ../pgpayroll.php');