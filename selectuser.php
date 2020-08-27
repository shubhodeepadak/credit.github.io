<?php 
session_start();
$con=mysqli_connect('localhost','root','','creditmanagement');


//echo $_SESSION['name'];
$q="select * from user ";
$result=mysqli_query($con,$q);

?>


  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Credit Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style >
    body{
      background-color: #367FEA ;
    }
  </style>
</head>
    
    <body>
      <form  action="userdetail.php" method="post">
       <div class="view">
        <div class="container">
  <div class="page-header">
    <h1 style="margin-top: 30px"><b><center>User information</center></b></h1>      
  </div>
      <table class="table table-dark table-hover  text-center">
      <thead>
        <tr>
                    <th>S No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Credits</th>
        </tr>
      </thead>

            <!--fetch and display data from MySQL-->
            <?php
                

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"]. "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["credit"] . "</td>";
                    
                    echo "</tr>";
                    
                }
            ?>

        </table>










      <div class="view">

<table cellspacing=50px style="position: relative; left: 40%;">
  <tr>
      <td> <h2>Select User</h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','creditmanagement');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
</div>
</div>
</form>

<br>
 <div class="text-center">
            <a href="index.php" class="btn btn-danger btn-lg" role="button"><i class="fa fa-close"></i>  Back  </a>
          </div>
    	
    </body>
    </html>
