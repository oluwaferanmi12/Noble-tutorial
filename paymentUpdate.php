<?php include ('session.php') ?>
<?php 
    $update_id = @$_GET['id'];
    $connection = mysqli_connect('localhost' , 'root' , '' , 'noble');
    $query = "SELECT * FROM payment_record WHERE id = '$update_id'";
    $execute = mysqli_query($connection , $query);
    $row = mysqli_fetch_array($execute);
    
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
        <form action="paymentUpdate.php?theId=<?php echo $update_id ;?>" method="POST" class='theForm'>
            <?php echo message() ;?>
            
            <p>Name</p>
            <input type="text" name= "name" value="<?php echo $row['name']; ?>"> 
            <p>Department</p>
            <input type="text" name= "dept" value="<?php echo  $row['department']; ?>">
            <p>Amount Paid</p>
            <input type="text" name= "amount" value="<?php echo  $row['amount']; ?>">

            <p>Expiry Date</p>
            <input type="text" name= "expire" value="<?php echo  $row['expiry'];  ?>">
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
    
</body>

</html>
<?php 
    if (isset($_POST['submit'])){
        $id = $_GET['theId'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $expiry = $_POST['expire'];
        $dept = $_POST['dept'];
        if ($amount < 5000){
            $balance = 5000 - $amount;
        }
        else if($balance = 5000){
            $balance = 'Paid';
        }
        $currentTime = time();
        $dateTime = strftime("%B-%d-%Y @ %H:%M:%S" , $currentTime);
        $connection = mysqli_connect('localhost' , 'root' , '' , 'noble');
        $query = "UPDATE payment_record SET name='$name' ,amount='$amount', department='$dept' ,balance = '$balance' ,expiry= '$expiry', date ='$dateTime' WHERE id = '$id' ";
        $execute = mysqli_query($connection , $query);
        if ($execute){
            $_SESSION['SuccessMessage'] = "Updated Successfully";
            header('location:paymentRecord.php');
        }
    }
?>