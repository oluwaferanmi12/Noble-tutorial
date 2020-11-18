<?php $title = 'InsertPayment' ; ?>
<?php @include ('components/header.php')?>

<?php 
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $amount = $_POST['amount'];
        $expire = $_POST['expire'];
        $currentTime = time();
        $dateTime = strftime("%B-%d-%Y" , $currentTime);

        if (empty($email) || empty($name) || empty($dept) || empty($amount) ||empty($expire)){
            $_SESSION['ErrorMessage']= 'All Fields Are Required';

        }
        else{
            $query="SELECT * FROM student_record WHERE email ='$email'";
            $Execution = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($Execution);
            if ($row){
                $new_email = $row['email'];
                $query = "SELECT * FROM payment_record where email = '$new_email'";
                $Execution = mysqli_query($connection , $query);
                $row = mysqli_fetch_array($Execution);
                if ($row){
                    $total = $row['Total_paid'] + $amount ;
                    
                    if ($total == 5000){
                        $balance = 'paid';
                        if ($row['date'] == $dateTime){
                            $amount = $row['amount'] + $amount ; 
                        }
                        else{
                            $amount = $_POST['amount'];
                        }
                    }
                    else if ($total < 5000){
                        $balance = 5000 - $total ;
                        if ($row['date'] == $dateTime){
                            $amount = $row['amount'] + $amount ; 
                        }
                        else{
                            $amount = $_POST['amount'];
                        }
                    }
                    // This Part Shows that that the Total is now Greater than 5000
                    else{
                        $total = $amount ; 
                        if ($total < 5000){
                            $balance = 5000 - $total ;

                        }
                        else if ($total == 5000){
                            $balance = 'paid';
                        }
                        if ($row['date'] == $dateTime){
                            $amount = $row['amount'] + $amount ; 
                        }
                        else{
                            $amount = $_POST['amount'];
                        }
                        

                    }
                    $query = "UPDATE payment_record SET name ='$name',email='$new_email' , department = '$dept' , date = '$dateTime' , balance = '$balance' ,expiry ='$expire', amount ='$amount' , Total_paid = '$total' WHERE email = '$new_email' ";
                    $Execution = mysqli_query($connection , $query);
                    if ($Execution){
                        $_SESSION['SuccessMessage']= "Payment Updated Successfully";
                    }
                    else {
                        $_SESSION['ErrorMessage'] = "Couldn't Connect to the Database";
                    }
                }
                // This Else Part runs for the first part of the first time the payment is to be made
                else{
                    $amount = $_POST['amount'];
                    $total = $amount;
                    if ($total == 5000){
                        $balance = 'paid';
                    }
                    else if ($total < 5000){
                        $balance = 5000 - $total;
                    }

                    $query = "INSERT INTO payment_record (name,email , department , date , balance ,expiry, amount , Total_paid) VALUES('$name' , '$email' , '$dept' , '$dateTime' , '$balance' , '$expire', '$amount', '$total')";
                    $Execution = mysqli_query($connection , $query);
                    if ($Execution){
                        $_SESSION['SuccessMessage']= "Payment Added Successfully";
                    }
                    else {
                        $_SESSION['ErrorMessage'] = "Couldn't Connect to the Database";
                    }
                }
                

            }
            else{
                $_SESSION['ErrorMessage'] = "Student Not Registered Yet";
            }
        }
    }
?>

<div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Payment Form</div>

    <section id='insertPayment'>
        <form action="operatorInsertPayment.php" method="POST" class='theForm'>
            <?php echo message() ?>
            <?php echo success() ?>
            <p>Email</p>
            <input type="text" name= 'email'>
            <p>Name</p>
            <input type="text" name= "name"> 
            <p>Department</p>
            <input type="text" name= "dept">
            <p>Amount Paid</p>
            <input type="text" name= "amount" value= 0>

            <p>Expiry Date</p>
            <input type="date" name= "expire">
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</body>

</html>