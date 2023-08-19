<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $("#home").click(function(){
                window.location.href='http://localhost/payroll/home.php';
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
    <title>Insert</title>
</head>
<body>
    <body style="background-color:pearl"></body>  
    <center>
        <h1><b>DKRS - PAYROLL MANAGEMENT  <button type="button" id="home">home</button></b></h1><hr>
        <b>MENU:</b>
        <button type="button" id="Department">Departments</button> 
        <button type="button" id="Desgination">Desginations</button>
        <button type="button" id="Employee">Employees</button>
        <button type="button" id="Payroll">Payrolls</button><hr>
        <h3><b><i>Designation</i></b></h3><hr>
        <?php 
      require('dbconnect.php');
        $sql = "SELECT * FROM Designation";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Designation Name</th>
              </tr>
          </thead>
          <tbody>";
       while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row['id']."</td><td>".$row['designation_name']."</td><tr>";
       }
      }
      else{
        echo "0 Designation";
      }
      ?>
      </tbody>
      </table><hr>
        <form action="add.php" method="post">
        <h3>To Add New Designation:</h3>
        <b>Enter New:  </b><input type="text"  id="Designation_name" name='Designation_name' placeholder="Designation Name"><br><br>
        <button type="submit" id="add">Add New Designation</button> <hr>
      </form> 
      
    </center>    
</body>
</html>