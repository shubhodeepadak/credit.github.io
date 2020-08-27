<?php 
session_start();
$con=mysqli_connect('localhost','root','','creditmanagement');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   
    <link rel="stylesheet" href="style.css">
      <title>View user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style >
    body{
      background-color: #367FEA ;
    }
  </style>

</head>
    <body>
    <div class="view">
        
    <h1 style="margin-top: 60px"><b><center>User Details</center></b></h1>      
  
       <table class="table table-dark table-hover  text-center">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <th>Mobile no</th>
           <th>College</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
  <td><?php echo  $row["mobno"]; ?></td>
  <td><?php echo  $row["college"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="text-center">
            <a href="viewuser.php" class="btn btn-info btn-lg" role="button">Transfer To</a>
          </div>


               <br> 
               <div class="text-center">
            <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="fa fa-home"></i>  Home  </a>
          </div>
          <br>
               
               <div class="text-center">
            <a href="selectuser.php" class="btn btn-danger btn-lg" role="button"><i class="fa fa-close"></i>  Back  </a>
          </div>

           


    </body>
</html>