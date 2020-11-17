<?php include('functions.php') ?>
<?php confirm_login() ?>
<?php include ('connection.php') ?>
<?php 
    $currentTime = time();
    $theDate = strftime("%B-%d-%Y" , $currentTime);
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
    <title>Document</title>
</head>
</head>
<body style= 'background-color:#E0EFDE; min-height:100vh'>
    <div id = 'Header'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>

    <div style="width:40%; margin:auto; background:#ffffff; text-align:center; display:flex; flex-direction:column; align-items:center; justify-content:space-around; margin-top:50px; padding-top:20px; border-radius:10px; height:300px">
        <p style='font-size:24px; font-weight:bold; '>Total Amount For <?php echo $theDate; ?> </p>
        
        <p style='font-weight:bold; font-size:20px; '><?php echo $theTotalPayment; ?></p>
    </div>
    
</body>
</html>