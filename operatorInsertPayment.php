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
                        $headers="From:NobleTutorial<support@nobletutorial.com.ng>"."\r\n";
                        $headers .= "MIME-Version: 1.0"."\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
                        $message = "
                        <html> 
                            <body style= 'background:#E0EFDE; min-heigt:100vh; padding-top:50px'>
                                <div style='text-align:center; background-color:white; border-radius:10px; width:80%; margin:auto; height:600px; padding:20px;'>
                                <div style= 'text-align:left; font-family:cursive;font-weight:bold;'>Hi , Oluwaferanmi <br> Your Receipt</div>
                                <hr style='width:95%;text-align:left;margin-left:0'>
                                    <div>
                                        <div>Amount Paid</div>
                                        <p style='font-weight:bold; font-size:24px'>2000</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>'{$balance}'</div>
                                        <p style='font-weight:bold; font-size:24px'>1000</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>Date Paid</div>
                                        <p style='font-weight:bold; font-size:24px'>Nov-12</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>Expiry Date</div>
                                        <p style='font-weight:bold; font-size:24px'>Dec 12</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>

                                        <p style='font-weight:bold; font-family:monospace;'>Note:The Date Paid only shows the most recent date you made a payment. <br>Also Kindly  Inform the Management for any mistake in the data above .</p>

                                    </div>
                                </div>
                            </body>
                        </html>
                        ";
                        $email_to = $email;
                        $email_subject = 'Payment Receipt';
                        if(mail($email_to , $email_subject, $message , $headers)){
                            echo "success";
                        }
                        else{
                            echo "Couldn't Send";
                        }
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
                        $headers="From:NobleTutorial<support@nobletutorial.com.ng>"."\r\n";
                        $headers .= "MIME-Version: 1.0"."\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
                        $message = "
                        <html> 
                            <body style= 'background:#E0EFDE; min-heigt:100vh; padding-top:50px'>
                                <div style='text-align:center; background-color:white; border-radius:10px; width:80%; margin:auto; height:600px; padding:20px;'>
                                <div style= 'text-align:left; font-family:cursive;font-weight:bold;'>Hi , Oluwaferanmi <br> Your Receipt</div>
                                <hr style='width:95%;text-align:left;margin-left:0'>
                                    <div>
                                        <div>Amount Paid</div>
                                        <p style='font-weight:bold; font-size:24px'>2000</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>Balance</div>
                                        <p style='font-weight:bold; font-size:24px'>1000</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>Date Paid</div>
                                        <p style='font-weight:bold; font-size:24px'>Nov-12</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>
                                        <div>Expiry Date</div>
                                        <p style='font-weight:bold; font-size:24px'>Dec 12</p>
                                        <hr style='width:95%;text-align:left;margin-left:0'>

                                        <p style='font-weight:bold; font-family:monospace;'>Note:The Date Paid only shows the most recent date you made a payment. <br>Also Kindly  Inform the Management for any mistake in the data above .</p>

                                    </div>
                                </div>
                            </body>
                        </html>
                        ";
                        $email_to = $email;
                        $email_subject = 'Payment Receipt';
                        if(mail($email_to , $email_subject, $message , $headers)){
                            echo "success";
                        }
                        else{
                            echo "Couldn't Send";
                        }
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

<div style='background-color:#E0EFDE; min-height:100vh;'>
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
</div>
</body>

</html>