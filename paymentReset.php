<?php include ('session.php'); ?>
<?php include ('connection.php') ?>
<?php include('functions.php') ?>
<?php confirm_login() ?>
<?php 
    $theId = $_GET['id'];
    $reset = 0;
    
    $query = "UPDATE  payment_record SET balance = '$reset' , Total_paid='$reset' , amount = '$reset' WHERE id = '$theId'";
    $execute = mysqli_query($connection , $query);
    if ($execute){
        $_SESSION['SuccessMessage'] = "Reset Successful";
        header('Location:paymentRecord.php');
    }
    
?>