<?php

require('dbconnect.php');
$sql = "TRUNCATE TABLE designation";

$result = mysqli_query($conn,$sql);

header('Location: ../pgdesignation.php');