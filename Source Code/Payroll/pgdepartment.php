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
    <title>Departments</title>
</head>
<body>
    <body style="background-color:pearl"></body>  
    <center>
        <h1><b>DKRS - PAYROLL MANAGEMENT  <button type="button" id="home">home</button></b></h1><hr>
        <b>MENU:</b>
        <button type="button" id="Department">Departments</button> 
        <button type="button" id="Desgination">Designations</button>
        <button type="button" id="Employee">Employees</button>
        <button type="button" id="Payroll">Payrolls</button><hr>
        <h3><b><i>Departments</i></b></h3><hr><b>Data:</b>
      <?php 
      require('dpt config/dbconnect.php');
        $sql = "SELECT * FROM department";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Department Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>";
       while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row['id']."</td><td>".$row['department_name']."</td><td><a href='dpt config/edit.php?id=".$row['id'] ."'>Edit</a></td><td><a href='dpt config/delete.php?id=".$row['id'] ."'>Delete</a></td><tr>";
       }
      }
      else{
        echo "0 Department";
      }
      ?>
      </tbody>
      </table><hr>
      <form action="dpt config/insert.php" method="post"> 
      <h3>To Add New Department:</h3>
        <button type="submit" id="add">Click-Here</button>  <hr> 
      </form>
    <h3>To  Delete All Department:</h3><a href="dpt config/delete-all.php">Click-Here</a><hr>
    </center>    
</body>
</html>