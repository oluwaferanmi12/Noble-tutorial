
<?php @include ('components/header.php')?>

<?php
    if (isset($_POST['submit'])){
        $currentTime = time();
        $dateTime = strftime("%B-%d-%Y @ %H:%M:%S" , $currentTime);
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $amount = $_POST['amount'];
        $total = $amount;
        if ($amount < 5000){
            $balance = 5000 - $amount;
        }
        else if ($amount == 5000){
            $balance = 'Paid';
        }
        $expire = $_POST['expire'];
        if (empty($name) || empty($dept) || empty($amount) || empty($expire)){
            $_SESSION['ErrorMessage']= 'All Fields Are Required';
        }
        else{
            
            $query = "INSERT INTO payment_record (name, department , date , balance ,expiry, amount , Total_paid) VALUES('$name' , '$dept' , '$dateTime' , '$balance' , '$expire', '$amount', '$total')";
            $execute = mysqli_query($connection , $query);
            if ($execute){
                $_SESSION['SuccessMessage']= "Payment Added Successfully";
            }
            else{
                $_SESSION['ErrorMessage'] = "Payment Could not Be added For Some Reason";
            }

        }
    }
?>


    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Payment Form</div>

    <section id='insertPayment'>
        <form action="insertPayment.php" method="POST" class='theForm'>
            <?php echo message() ;?>
            <?php echo Success() ;?>
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