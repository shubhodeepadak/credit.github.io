<?php
    $con=mysqli_connect('localhost','root','','creditmanagement') or die(mysqli_error($con));
?>

<?php
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amt = (int)$_POST['amt'];
    
    if(strcmp($from, $to) == 0){
        header('location: viewuser.php?sameName=Sender and receiver cannot be the same!');
    }else{
        $checkBal_query = "select credit from user where name='$from'";
        $checkBal_query_result = mysqli_query($con, $checkBal_query) or die(mysqli_error($con));
        if (mysqli_num_rows($checkBal_query_result) == 0){
            header('location: viewuser.php?error_incurred=Some error incurred, try again later!');
        }
        else{
            $row = mysqli_fetch_array($checkBal_query_result);
            if( $amt > (int)$row['credit'] ){
                header('location: viewuser.php?invalidAmt=Insufficient credit.Please try again!!');
            }else if( $amt == 0 ){
                header('location: viewuser.php?invalidAmt=Amount cannot be zero!');
	    }else{
                              
                //deducting the amount from sender's current credit in users table
                $sender_query = "select * from user where name='$from'";
                $sender_query_result = mysqli_query($con, $sender_query) or die(mysqli_error($con));
                $row = mysqli_fetch_array($sender_query_result);
                
                $updated_cred = (int)$row['credit'] - $amt;
                $updating_query = "update user set credit='$updated_cred' where name='$from'" ;
                $updating_query_result = mysqli_query($con, $updating_query) or die(mysqli_error($con));                
                
                //adding the amount from receiver's current credit in users table
                $receiver_query = "select * from user where name='$to'";
                $receiver_query_result = mysqli_query($con, $receiver_query) or die(mysqli_error($con));
                $row = mysqli_fetch_array($receiver_query_result);
                
                $updated_cred = (int)$row['credit'] + $amt;
                $updating_query = "update user set credit='$updated_cred' where name='$to'" ;
                $updating_query_submit = mysqli_query($con, $updating_query) or die(mysqli_error($con));
                
                //adding the transaction into transfer table
                $addTransac_query = "INSERT INTO `transfer` (`transac_id`, `from_name`, `to_name`, `amt`) VALUES (NULL, '$from', '$to', '$amt')";
                
                $addTransac_query_submit = mysqli_query($con, $addTransac_query) or die(mysqli_error($con));
                
                //redirecting to transfer.php
                header('location:viewuser.php?credUpdate=successfully transferred');
            }
        }
        
    }
?>