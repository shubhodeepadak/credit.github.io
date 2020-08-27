<?php
    $con=mysqli_connect('localhost','root','','creditmanagement') or die(mysqli_error($con));
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>choose user</title>
        
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style >
            .row_style{
                margin-top: 60px;
            }
            
    body{
      background-color: #2EECC8  ;
    }
  
        </style>
    </head>
    <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Sparks Foundation</a>
        </div>
      </div>
    </div>
                  
         <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10 col-xs-offset-1 column_style">
              <div class = "panel panel-primary">
              
              <div class="panel-heading">
              <h2>
                  Transfer Details
              </h2>
              </div>
                  <div class="panel-body">
              
                  <form action="transferscript.php" method="POST">
                  <div class="form-group">
                      <label for="from">From :</label>
                        <select class="form-control" id="from" name="from">
                          <?php
                          $users_query = "SELECT * FROM user";
                          $users_query_result = mysqli_query($con, $users_query) or die(mysqli_error($con));
                          while( $row = mysqli_fetch_array($users_query_result) ){
                          echo "<option>".$row['name']."</option>"; }
                          ?>
                        </select>
                  </div>
                     <div class="form-group">
                      <label for="to">To :</label>
                        <select class="form-control" id="to" name="to">
                          <?php
                          $users_query = "SELECT * FROM user";
                          $users_query_result = mysqli_query($con, $users_query) or die(mysqli_error($con));
                          while( $row = mysqli_fetch_array($users_query_result) ){
                          echo "<option>".$row['name']."</option>"; }
                          ?>
                        </select>
                  </div>
                      
                  <?php if( isset($_GET['sameName'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['sameName']?></p>
                        </div>
                  <?php } ?>
                  <div class="form-group">
                      <label for="amt">Enter amount to credit :</label>
                      <input type="text" class="form-control" id="amt" pattern="^[0-9]*$" required="true" name="amt">
                  </div>
                  <?php if( isset($_GET['error_incurred'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['error_incurred']?></p>
                        </div>
                  <?php } ?>   
                      
                   <?php if( isset($_GET['invalidAmt'])) {?> 
                      <div class="alert" style="margin-top: 14px;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <p><?php echo $_GET['invalidAmt']?></p>
                        </div>
                   <?php } ?>
                   <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                      
                    <?php if( isset($_GET['credUpdate'])) {?>   
                      <script>
                        function myFunction() {
                            var txt;
                            if (confirm("Successfully transfered!")) {
                                window.location.replace("index.php");
                            }
                        }
                        
                        myFunction();
                      </script>
                    <?php } ?>
                    
                      
                  </form>
                  </div>
                
                </div>
                </div>
            </div>
        </div> 
        
    


    </body>
</html>
