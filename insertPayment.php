<?php 
    include('session.php');
?>

<?php
    if (isset($_POST['submit'])){
        $currentTime = time();
        $dateTime = strftime("%B-%d-%Y @ %H:%M:%S" , $currentTime);
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $amount = $_POST['amount'];
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
            $connection= mysqli_connect('localhost' , 'root' , '' , 'noble' );
            $query = "INSERT INTO payment_record (name, department , date , balance ,expiry, amount) VALUES('$name' , '$dept' , '$dateTime' , '$balance' , '$expire', '$amount')";
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

<!DOCTYPE html>
<html lang= "en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>    
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous"
        />
        
        <!-- JS, Popper.js, and jQuery -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"
    ></script>
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    "
    />
    <link rel="stylesheet" href="./insertPayment.css">

    
</head>
<body>
    <div id = 'Header'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px'>Payment Form</div>

    <section>
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
            <input type="text" name= "expire">
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</body>

</html>