<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $("#logout").click(function(){
                window.location.href='http://localhost/payroll/index1.html';
           });
           $("#Department").click(function(){
                window.location.href='http://localhost/payroll/pgdepartment.php';
           });
           $("#Desgination").click(function(){
                window.location.href='http://localhost/payroll/pgdesignation.php';
           });
           $("#Employee").click(function(){
                window.location.href='http://localhost/payroll/pgemployee.php';
           });
           $("#Payroll").click(function(){
                window.location.href='http://localhost/payroll/pgpayroll.php';
           });
        })
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <body style="background-color:pearl"></body>  
    <center>
        <h1><b>DKRS - PAYROLL MANAGEMENT  <button type="button" id="logout">Log-out</button></b></h1><hr>
        <h3><b><i>HOME</i></b></h3><hr>
        <b>MENU:</b>
        <button type="button" id="Department">Departments</button> 
        <button type="button" id="Desgination">Designations</button>
        <button type="button" id="Employee">Employees</button>
        <button type="button" id="Payroll">Payrolls</button><hr>
        <img  align="middle" width="580" height="380"src="img/home.png"><br><hr>
         DKRS | © 2022 , All Rights Reserved
    </center>    
</body>
</html>