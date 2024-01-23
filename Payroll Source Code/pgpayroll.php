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
    <title>Payrolls</title>
</head>
<body>
      
    <center>
    <div class="nav"> <h1><b>RK - PAYROLL MANAGEMENT  <button type="button" id="logb" class="n_m">home</button></b></h1></div><br>
        <b>MENU:</b>
        <button type="button" id="Department" class="nm">Departments</button> 
        <button type="button" id="Desgination" class="nm">Designations</button>
        <button type="button" id="Employee" class="nm">Employees</button>
        <button type="button" id="Payroll" class="nm">Payrolls</button><hr>
        <h3><b><i>Payroll</i></b></h3><b>Data:</b>
        
      <?php 
      require('pay config/dbconnect.php');
        $sql = "SELECT * FROM pay";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Namel</th>
                  <th>Department</th>
                  <th>Deignation</th>
                  <th>Payroll</th>
                  <td>Edit</td>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>";
       while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td>"."<td>".$row['department']."</td>"."<td>".$row['designation'] ."</td>"."<td>".$row['payment']."</td>"."<td><a href='pay config/edit.php?id=".$row['id'] ."'>Edit</a></td><td><a href='pay config/delete.php?id=".$row['id'] ."'>Delete</a></td><tr>";
       }
      }
      else{
        echo "0 Payroll";
      }
      ?>
      </tbody>
      </table><hr>
      <form action="pay config/insert.php" method="post">
    <h3>To Add New Payroll:</h3>
        <button type="submit" id="add" class="nm">Click-Here</button> 
      </form> 
      <hr>
        <h3>To  Delete All Payroll:</h3>
        <a href="pay config/delete-all.php">Click-Here</a><hr>
        <form action="pay config/edit.php" method="post">
    </center>  
    <footer><p>RK | © 2023 , All Rights Reserved</p></footer>  
</body>
</html>