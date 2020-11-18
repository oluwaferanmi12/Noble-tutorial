
<?php $title = 'InsertPayment' ; ?>
<?php @include ('components/header.php')?>

<?php
    if (isset($_POST['submit'])){
        $currentTime = time();
        $dateTime = strftime("%B-%d-%Y" , $currentTime);
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $amount = $_POST['amount'];
        $total = $amount; 
        $email = $_POST['email'];
        $query="SELECT * FROM student_record WHERE email ='$email'";
        $expire = $_POST['expire'];
        $Execution = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($Execution);
        if (empty($name) || empty($dept) || empty($amount) || empty($expire)){
            $_SESSION['ErrorMessage']= 'All Fields Are Required';
        }
        else{
            if ($row){
                if ($amount < 5000){
                    $balance = 5000 - $amount;
                }
                else {
                    if ($amount == 5000){
                        $balance = 'Paid';
                    }
                    
                }
                $query = "INSERT INTO payment_record (name,email , department , date , balance ,expiry, amount , Total_paid) VALUES('$name' , '$email' , '$dept' , '$dateTime' , '$balance' , '$expire', '$amount', '$total')";
                $execute = mysqli_query($connection , $query);
                if ($execute){
                    $_SESSION['SuccessMessage']= "Payment Added Successfully";
                    header('Location:dashboard.php');
                }
                else{
                    $_SESSION['ErrorMessage'] = "Payment Could not Be added For Some Reason";
                }
            }
            else{
                $_SESSION['ErrorMessage'] = "The Email Can not Be found in the Student Record ;";
            }
        }
    }
?>


    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Payment Form</div>

    <section id='insertPayment'>
        <form action="insertPayment.php" method="POST" class='theForm'>
            <?php echo message() ?>
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