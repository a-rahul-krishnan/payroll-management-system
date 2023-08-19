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
        <h3><b><i>Payroll</i></b></h3><hr>
        <form action="add.php" method="post">
    <h3>To Add New Payroll:</h3>
        <b>Enter New:  </b><input type="text"  id="name" name='name' placeholder="Name"><br><br>
        <b>Enter New:  </b><input type="text"  id="department" name='department' placeholder="Deartment"><br><br>
        <b>Enter New:  </b><input type="text"  id="designation" name='designation' placeholder="Designation"><br><br>
        <b>Enter New:  </b><input type="text"  id="payroll_name" name='Payroll_name' placeholder="Payroll"><br><br>
        <button type="submit" id="add">Add New Payroll</button> <hr><b>Data:</b>
      </form> 
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
    </center>    
</body>
</html>