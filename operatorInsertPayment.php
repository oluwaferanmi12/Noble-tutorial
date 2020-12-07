<?php $title = 'InsertPayment' ; ?>
<?php @include ('components/header.php')?>

<?php 
    $student_id = @$_GET['student_id'];
    $enterIdDisplay = '';
    $formDisplay = 'none';
    $currentTime = time() ;
    $submitDisplay = '';
    $dateTime = strftime("%d-%B-%Y" , $currentTime);
    if (isset($_GET['student_id'])){
        $particularStudent=$_GET['student_id'];
        $checkQuery = "SELECT * FROM student_record WHERE student_id = '$particularStudent'";
        $checkExecute = mysqli_query($connection , $checkQuery);
        $row = mysqli_fetch_array($checkExecute);
        if ($row){
            
            $enterIdDisplay ='none';
            $formDisplay = '';
            $student_name = $row['name'];
            $student_email = $row['email'];
            $student_sex = $row['sex'];
            $student_department = $row['department'];
            
        
        }
        else{
            $_SESSION["TextE"] = "Student Does Not Exist";
        }
        
    }
    if (isset($_POST['submit'])){
        $enterIdDisplay = 'none';
        $formDisplay = '';
        $email = $student_email ;
        $name = $student_name;
        $dept = $student_department;
        $amount = $_POST['amount'];
        $submitDisplay = 'none';

        if (empty($email) || empty($name) || empty($dept) || empty($amount)){
            $_SESSION['ErrorMessage']= 'All Fields Are Required';

        }
        else{
            $query="SELECT * FROM student_record WHERE student_id ='$student_id'";
            $Execution = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($Execution);
            if ($row){
                $new_email = $row['email'];
                $query = "SELECT * FROM payment_record WHERE student_id = '$student_id'";
                $Execution = mysqli_query($connection , $query);
                $row = mysqli_fetch_array($Execution);
                if ($row){
                    if (isset($_POST['subscription'])){
                        $subscription = $_POST['subscription'];
                        if ($subscription == '1-month'){
                            $dataExpiry = $row['expiry'];
                            $convertedDataExpiry = strtotime($dataExpiry);
                            if ( $currentTime < $convertedDataExpiry){
                                $daysLeft = $convertedDataExpiry - $currentTime;
                                $expiry = $currentTime + 2592000 + $daysLeft;
                                $expiry = strftime("%B-%d-%Y" , $expiry);

                        }
                        else{
                            $expiry = $currentTime + 2592000;
                            $expiry = strftime("%B-%d-%Y" , $expiry);
                        }
                        
                

                    }
                    else if ($subscription == '2-month'){
                        $dataExpiry = $row['expiry'];
                        $convertedDataExpiry = strtotime($dataExpiry);
                        if ( $currentTime < $convertedDataExpiry){
                            $daysLeft = $convertedDataExpiry - $currentTime;
                            $expiry = $currentTime + 5184000 + $daysLeft;
                            $expiry = strftime("%B-%d-%Y" , $expiry);

                        }
                        else{
                            $expiry = $currentTime + 5184000;
                            $expiry = strftime("%B-%d-%Y" , $expiry);
                        }
                    }
                    else if ($subscription == '3-month'){
                        $dataExpiry = $row['expiry'];
                        $convertedDataExpiry = strtotime($dataExpiry);
                        if ( $currentTime < $convertedDataExpiry){
                            $daysLeft = $convertedDataExpiry - time();
                            $expiry = $currentTime + 7776000 + $daysLeft;
                            $expiry = strftime("%B-%d-%Y" , $expiry);

                        }
                        else{
                            $expiry = $currentTime + 7776000;
                            $expiry = strftime("%B-%d-%Y" , $expiry);
                        }
                    }
                    else if ($subscription == '2-weeks'){
                        $dataExpiry = $row['expiry'];
                        $convertedDataExpiry = strtotime($dataExpiry);
                        if ( $currentTime < $convertedDataExpiry){
                            $daysLeft = $convertedDataExpiry - $currentTime;
                            $expiry = $currentTime + 1209600 + $daysLeft;
                            $expiry = strftime("%B-%d-%Y" , $expiry);

                        }
                        else{
                            $expiry = $currentTime + 1209600;
                            $expiry = strftime("%B-%d-%Y" , $expiry);
                        }
                    }
                    
                }
                else{
                    $subscription = $row['subscription'];
                    $expiry = $row['expiry'];
                    
                }
                    if($subscription == '1-month'){
                        $toBePaid = 5000;
                    }
                    else if ($subscription == '2-month'){
                        $toBePaid = 10000;
                    }
                    else if ($subscription == '3-month'){
                        $toBePaid = 15000;
                    }
                    else if($subscription == '2-weeks'){
                        $toBePaid = 3000;
                    }
                    else{
                        $toBePaid = $row['To_Be_Paid'];
                    }


                    
                    $total = $row['Total_paid'] + $amount ;
                    if ($total == $row['To_Be_Paid']){
                        $balance = 'paid';
                        if ($row['date'] == $dateTime){
                            $amount = $row['amount'] + $amount ; 
                        }
                        else{
                            $amount = $_POST['amount'];
                        }
                    }
                    else if ($total < $row['To_Be_Paid']){
                        $balance = $row['To_Be_Paid'] - $total ;
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
                        if ($total < $row['To_Be_Paid']){
                            $balance = $toBePaid - $total ;

                        }
                        else if ($total == $row['To_Be_Paid']){
                            $balance = 'paid';
                        }
                        if ($row['date'] == $dateTime){
                            $amount = $row['amount'] + $amount ; 
                        }
                        else{
                            $amount = $_POST['amount'];
                        }
                        

                    }


                    $query = "UPDATE payment_record SET name ='$name',student_id = '$student_id' , email='$new_email' , department = '$dept' , date = '$dateTime' , balance = '$balance' ,expiry ='$expiry', amount ='$amount' , Total_paid = '$total', subscription = '$subscription', To_Be_Paid = '$toBePaid' , time = '$currentTime' WHERE student_id = '$student_id'";
                    $Execution = mysqli_query($connection , $query);
                    if ($Execution){
                            $email_subject="PaymentReciept";
                            $email_to = $new_email;
                            
                            $headers = "From:NobleTutorial<support@nobletutorial.com.ng>"."\r\n";
                            $headers = "MIME-Version: 1.0"."\r\n";
                            $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
                            $body = "
                            <!DOCTYPE html>
                            <html lang='en'>
                            <head>
                                    <meta charset='UTF-8'>
                                    <meta name = 'veiwport' content='width=device-width, initial-scale=1.0'>
                            </head>
                            <body style='background:#E0EFDE'; min-height:100vh;
                            padding-top:100px; padding-bottom:50px;'>
                            <div style='text-align:center; background-color:white; border-radius:10px; ;width:70%; margin:auto ; height:400px; padding:20px; margin-top:50px;'> 
                            <div>Thanks For Choosing Noble Tutorial Classes</div>
                            <p>Please Find Below is the Details of your payment</p>
                            <hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Amount Paid</div>
                            "."\r\n";
                            $body .="<div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>"."\r\n";
                            $body .= $amount."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Balance</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $balance."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Date</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $dateTime."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Expiry Date</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $expiry."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>"."\r\n";
                            $body .= "<div styl= 'color:orange; font-size:15px; font-weight:bold;'>Note:The Date Higlighted Above is the Latest date a payment is made.</div>
                            <div style= 'font-weight:bold;'>Kindly Report to the management if any contradiction occurs</div>
                            <div style='font-size:12px'>For More Information: <br> Visit us at <a style='text-decoration:none;' href='http://www.nobletutorial.com.ng'>www.nobletutorial.com.ng</a> </div>";
                            $body .= "
                            </div>
                            </body>
                            </html>
                            ";
                        if(mail($email_to, $email_subject , $body , $headers)){
                            
                            $_SESSION['SuccessMessage']= "Payment Updated Successfully";
                            
                            

                        }
                    }
                    else {
                        $_SESSION['ErrorMessage'] = "Couldn't Connect to the Database";
                    }
                }
                // This Else Part runs for the first part of the first time the payment is to be made
                else{
                    $subscription = $_POST['subscription'];
                    if ($subscription == '1-month'){
                        $expiry = time()  + 2592000;
                        $expiry = strftime("%d-%B-%Y" , $expiry);
                        $toBePaid = 5000;
                    }
                    else if ($subscription == '2-month'){
                        $expiry = time() + 5184000;
                        $expiry = strftime("%d-%B-%Y" , $expiry);
                        $toBePaid = 10000;
                    }
                    else if ($subscription == '3-month'){
                        $expiry = time() + 7776000;
                        $expiry = strftime("%d-%B-%Y" , $expiry);
                        $toBePaid = 15000;
                    }
                    else if ($subscription == '2-weeks'){
                        $expiry = time() + 1209600;
                        $expiry = strftime("%d-%B-%Y" , $expiry);
                        $toBePaid = 3000;
                    }
                    $amount = $_POST['amount'];
                    $total = $amount;
                    if ($total == $toBePaid){
                        $balance = 'paid';
                    }
                    else if ($total < $toBePaid){
                        $balance = $toBePaid - $total;
                    }

                    $query = "INSERT INTO payment_record (student_id ,name,email , department , date , balance , expiry , amount , Total_paid, To_Be_Paid, subscription , time) VALUES ('$student_id' , '$name' , '$email' , '$dept' , '$dateTime' , '$balance' ,'$expiry' , '$amount', '$total', '$toBePaid', '$subscription', '$currentTime')";
                    $Execution = mysqli_query($connection , $query);
                    if ($Execution){
                        
                            $email_subject="PaymentReciept";
                            $email_to = $email;
                            
                            $headers = "From:NobleTutorial<support@nobletutorial.com.ng>"."\r\n";
                            $headers = "MIME-Version: 1.0"."\r\n";
                            $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
                            $body = "
                            <!DOCTYPE html>
                            <html lang='en'>
                            <head>
                                    <meta charset='UTF-8'>
                                    <meta name = 'veiwport' content='width=device-width, initial-scale=1.0'>
                            </head>
                            <body style='background:#E0EFDE'; min-height:100vh;
                            padding-top:100px; padding-bottom:50px;'>
                            <div style='text-align:center; background-color:white; border-radius:10px; ;width:70%; margin:auto ; height:400px; padding:20px; margin-top:50px;'> 
                            <div>Thanks For Choosing Noble Tutorial Classes</div>
                            <p>Please Find Below is the Details of your payment</p>
                            <hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Amount Paid</div>
                            "."\r\n";
                            $body .="<div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>"."\r\n";
                            $body .= $amount."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Balance</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $balance."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Date</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $dateTime."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>
                            <div style='font-size:12px; font-weight:bold; margin-bottom:10px;'>Expiry Date</div>
                            <div style='margin-bottom:20px; font-size:24px; font-weight:bolder;'>
                            "."\r\n";
                            $body .= $expiry."\r\n";
                            $body .= "</div>"."\r\n";
                            $body .= "<hr style='width:95%; text-align:left; margin-left:0px'>"."\r\n";
                            $body .= "<div styl= 'color:orange; font-size:15px; font-weight:bold;'>Note:The Date Higlighted Above is the Latest date a payment is made.</div>
                            <div style= 'font-weight:bold;'>Kindly Report to the management if any contradiction occurs</div>
                            <div style='font-size:12px'>For More Information: <br> Visit us at <a style='text-decoration:none;' href='http://www.nobletutorial.com.ng'>www.nobletutorial.com.ng</a> </div>";
                            $body .= "
                            </div>
                            </body>
                            </html>
                            ";
                            if(mail($email_to, $email_subject , $body , $headers)){
                                
                                $_SESSION['SuccessMessage']= "Payment Added Successfully";
                                
                                
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

    <div style='display:<?php echo $formDisplay; ?>'>
        <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Payment Form</div>

        <section id='insertPayment'>
            <form action="operatorInsertPayment.php?student_id=<?php echo $student_id ?>" method="POST" class='theForm' >
                <?php echo message() ?>
                <?php echo Success() ?>
                
                
                <div style="margin-top:20px; font-weight:bold; text-align:left;">Hi , <?php echo $student_name?></div>
                
                <div style="margin-top:20px; font-weight:bold; text-align:left;">Email: <?php echo $student_email ?></div>
                
                <div style="margin-top:20px; font-weight:bold; text-align:left;">Department: <?php echo $student_department ?></div>
                <div style= "margin-top:20px; font-weight:bold; text-align:left">Sex: <?php echo $student_sex ?></div>
                <?php 
                    $amountQuery = "SELECT * FROM payment_record WHERE student_id='$student_id'";
                    $amountExecute = mysqli_query($connection , $amountQuery);
                    $amountRow = mysqli_fetch_array($amountExecute);
                    if ( $amountRow && $amountRow['balance'] != 'paid'){
                        $amountBalance = $amountRow['balance'];
                        $amountExpiry = $amountRow['expiry'];
                        
                    
                ?>
                <div style= "color:red; font-size:12px ; font-weight:bold; margin-top:20px; text-align:left;">Amount-Left: <?php echo $amountBalance ; ?> and Expiry: <?php echo $amountExpiry ;?></div>
                <?php } ?>
                <p>Amount Paid</p>
                <input type="text" name= "amount" value= 0>
                <?php 
                    $formQuery = "SELECT * FROM payment_record WHERE student_id ='$student_id'";
                    $formExecution= mysqli_query($connection , $formQuery);
                    $formRow = mysqli_fetch_array($formExecution);
                    if (!$formRow || $formRow['To_Be_Paid'] == $formRow['Total_paid']){

                    
                ?>
                <p>Subscription</p>
                <select class='theSelect' type='text' name="subscription" >
                    <option value="1-month">1-Month</option>
                    <option value="2-month">2-Month</option>
                    <option value="3-month">3-Month</option>
                    <option value="2-weeks">2-Weeks</option>
                    
                </select>

                    
                <?php } ?>

                    
                
                <br>
                <input type="submit" name = 'submit' class='submit' onClick = "alert('Are you Sure You want to Submit')">
            </form>
        </section>
    </div>
    <div style='display: <?php echo $enterIdDisplay; ?>'>
    <div style= "text-align:center; font-weight:bold; padding-top:0px;"><?php echo ErrorText() ;?></div>
        <section id='insertPayment' style='padding-top:50px;'>
            <form action="operatorInsertPayment.php" method="GET" class='theForm'>
                <p>Enter Student_id</p>
                <input type="text" name= 'student_id' placeholder='Example:NTC/2021/001'>
                <br>
                <input type="submit" name="getSubmit" class=submit>
            </form>
        </section>
    </div>
</div>
</body>

</html>