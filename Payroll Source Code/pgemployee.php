<!DOCTYPE html>
<html lang="en">
<head>
    <script src="jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $("#logb").click(function(){
                window.location.href='http://localhost/payroll/home.php';
           });
          
           $("#Department").click(function(){
                window.location.href='http://localhost/payroll/pgdepartment.php';
           });
           $("#Designations").click(function(){
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
    <link rel="stylesheet" href="css/style.css">
    <style>
     a{
      font-weight: bolder;
    color: blue;
    padding: 8px;
    text-decoration:underline;
    display: inline-block;
     }
    .nm{
    font-family: Copperplate Gothic;
    background-color: black;
    color:white;
    font-size: 18px;
    font-weight: bold;
    margin-left: 10px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
      
    <center>
    <div class="nav"><h1><b>RK - PAYROLL MANAGEMENT  <button type="button" id="logb" class="n_m">home</button></b></h1></div><br>
        <b>MENU:</b>
        <button type="button" id="Department" class="nm">Departments</button> 
        <button type="button" id="Designations" class="nm">Designations</button>
        <button type="button" id="Employee" class="nm">Employees</button>
        <button type="button" id="Payroll" class="nm">Payrolls</button><hr>
        <h3><b><i>Employee</i></b></h3><b>Data:</b>
      <?php 
      require('emp config/dbconnect.php');
        $sql = "SELECT * FROM employee";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Employee Name</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>";
       while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row['id']."</td><td>".$row['employee_name']."</td>"."<td>".$row['designation']."</td>"."<td>".$row['department']."</td>"."<td><a href='emp config/edit.php?id=".$row['id'] ."'>Edit</a></td><td><a href='emp config/delete.php?id=".$row['id'] ."'>Delete</a></td><tr>";
       }
      }
      else{
        echo "0 Employee";
      }
      ?>
      </tbody>
      </table><hr>
      <form action="emp config/insert.php" method="post">
    <h3>To Add New Employee:</h3>
       
        <button type="submit" id="add" class="nm">Click-Here</button>
      </form> 
      <hr>
        <h3>To  Delete All Employee:</h3>
        <a href="emp config/delete-all.php">Click-Here</a><hr>
        <form action="emp config/edit.php" method="post">
      </form> 
    </center>    
    <footer><p>RK | © 2023 , All Rights Reserved</p></footer>

</body>
</html>