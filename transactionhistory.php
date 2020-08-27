<?php include 'dbcon.php'?>


<?php
$query = "SELECT * FROM transfer";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transaction History</title>
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

                    <summary style="padding: 0.75%; background-color: #01050A ; color: white;"> <h3><center>Transaction History</center></h3> </summary>
                    <table class="table table-striped" style="background-color: #1F75DA  color:#E0EAF4" >
                        <?php 
                            $trans_query = "SELECT * from transfer ORDER BY transac_id DESC";
                            $trans_query_result = mysqli_query($con, $trans_query) or die(mysqli_error($con));
                            
                        if ( mysqli_num_rows($trans_query_result) == 0){
                            echo '<h6 style="color:white;">No transactions done yet!</h6>';
                        }
                        else{
                        ?>
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          while( $row = mysqli_fetch_array($trans_query_result) ){
                          echo "<tr> <td>".
                            $row['transac_id'].
                            "</td> <td>".
                            $row['from_name'].
                           "</td> <td>".
                            $row['to_name'].
                           "</td> <td>".
                            $row['amt'].     
                        "</td> <td> </tr>"; ?>
                           <?php }} ?>
                        </tbody>   
                    </table>
                    <br>
                    
               <div class="text-center">
            <a href="index.php" class="btn btn-danger btn-lg" role="button"><i class="fa fa-close"></i>  Back  </a>
          </div> 
</body>
</html>

