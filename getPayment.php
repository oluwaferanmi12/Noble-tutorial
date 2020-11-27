<?php include('functions.php') ?>
<?php confirm_login() ?>
<?php include ('connection.php') ?>
<?php confirm_admin_login() ; ?>
<?php 
    $currentTime = time();
    $theDate = strftime("%d-%B-%Y" , $currentTime);
    $query = "SELECT * FROM payment_record WHERE date like '%$theDate%'";
    $execution = mysqli_query($connection , $query);
    $theTotalPayment = array();
    while($row = mysqli_fetch_array($execution)){
        $eachPayment = $row['amount'];
        array_push($theTotalPayment , $eachPayment);
    }
    $theTotalPayment = array_sum($theTotalPayment);
    // echo $theTotalPayment;
?>

<?php 
    $query = "SELECT * FROM expenses WHERE date like '%$theDate%'";
    $execution = mysqli_query($connection , $query);
    $theExpenses= array();
    while($row= mysqli_fetch_array($execution)){
        $theAmount = $row['amount'];
        array_push($theExpenses , $theAmount);
    }

    $theExpenses = array_sum($theExpenses);

    $theBalance = $theTotalPayment - $theExpenses ;

    if ($theBalance <= 0 ){
        $color = 'red';
        $theBalance = -($theBalance);
    }
    else{
        $color = 'green';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous"
    />
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
    <link rel="stylesheet" href="newveiwstudent.css?v=<?php echo time(); ?>"/>
    <title>GetPayment</title>
</head>
</head>
<body style= 'background-color:#E0EFDE; min-height:100vh'>
    <div id = 'Header'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>

    <div class='row'>
        <div class='offset-lg-1 col-lg-5 getPaymentImg' >
            <img src="./svg/undraw_wallet_aym5.svg" alt="">
        </div>
        <div class='col-lg-5'>
            <div style="width:80%; margin:auto; background:#ffffff; text-align:center; display:flex; flex-direction:column; align-items:center; justify-content:space-around; margin-top:20px; padding-top:20px; border-radius:10px; ">
            
            <p style='font-size:24px; font-weight:bold; font-family:monospace; padding-right:10px ; padding-left:10px; '>Total Amount For <?php echo $theDate; ?> </p>
            <hr style="width:95%;text-align:left;margin-left:0">
            <div style='font-weight:500; font-family:monospace; font-size:16px;'>Credit</div>
            <p style='font-weight:bold; font-size:40px; color:green; '><?php echo $theTotalPayment; ?></p>
            <hr style="width:95%;text-align:left;margin-left:0">
            <div>Debit</div>
            <p style= 'font-weight:bold; font-size:40px; color:red;'> <?php echo $theExpenses; ?></p>
            <hr style="width:95%;text-align:left;margin-left:0">
            <div>Balance</div>
            <p style='font-weight:bold; font-size:40px; color: <?php echo $color ?>'> <?php echo $theBalance ?></p>
            <hr style="width:95%;text-align:left;margin-left:0">
            </div>
        </div>

    </div>

    
</body>
</html>