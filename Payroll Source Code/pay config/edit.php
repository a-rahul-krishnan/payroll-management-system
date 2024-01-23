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
     <link rel="stylesheet" href="../css/style.css">
    <style>
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
    <title>Edit</title>
</head>
<body>
      
    <center>
    <div class="nav"><h1><b>RK - PAYROLL MANAGEMENT  <button type="button" id="logb" class="n_m">home</button></b></h1></div><br>
        <b>MENU:</b>
        <button type="button" id="Department" class="nm">Departments</button> 
        <button type="button" id="Desgination" class="nm">Desginations</button>
        <button type="button" id="Employee" class="nm">Employees</button>
        <button type="button" id="Payroll" class="nm">Payrolls</button><hr>
        <h3><b><i>Payroll</i></b></h3>
        
      <?php 
      require('dbconnect.php');
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
                  
              </tr>
          </thead>
          <tbody>";
       while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td>"."<td>".$row['department']."</td>"."<td>".$row['designation'] ."</td>"."<td>".$row['payment']."</td>"."<tr>";
       }
      }
      else{
        echo "0 Payroll";
      }
      ?>
      </tbody>
      </table>
      
      <hr>
        
        <form action="update.php" method="post">
    <h3>To Update Payroll:</h3><?php
     $id= $_GET['id'];
    echo '
        <b>Id:  </b><input type="text"  id="upayroll_id" name="upayroll_id" placeholder="Id" value="'.$id.'"><br><br>
        <b>Enter New:  </b><input type="text"  id="name" name="uname" placeholder="Name"><br><br>
        <b>Enter New:  </b><input type="text"  id="department" name="udepartment" placeholder="Deartment"><br><br>
        <b>Enter New:  </b><input type="text"  id="designation" name="udesignation" placeholder="Designation"><br><br>
        <b>Enter New:  </b><input type="text"  id="upayroll_name" name="upayroll_name" placeholder="Payroll"><br><br>';?>
        <button type="submit" id="up" class="nm">update</button>  <hr>
      </form> 
    </center>    
    <footer><p>RK | © 2023 , All Rights Reserved</p></footer>
</body>
</html>