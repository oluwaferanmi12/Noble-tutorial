

<?php include('components/header.php') ?>
<?php 
    $display = 'none';
    $forgotDisplay = '';
    if (isset($_POST['forgot_submit'])){
        $number = $_POST['number'];
        if (empty($number)){
            $_SESSION['ErrorMessage'] = "All Fields Are Required";
        }
        else{
            $query = "SELECT * FROM student_record WHERE phone='$number'";
            $execution = mysqli_query($connection , $query);
            $row = mysqli_fetch_array($execution);
            if ($row){
                $student_id = $row['student_id'];
                $display = '';
                $forgotDisplay = 'none';

            }
            else{
                $_SESSION['ErrorMessage'] = "This Number does not exist";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .confirmSubmit:hover{
        background-color:#e53420!important;
        color:white !important;
    }
</style>
<body style="background-color:#e0efde; min-height:100vh;">
    <div style="margin-top:100px; display: <?php echo  $forgotDisplay ;?>;">
        
        <section id="insertPayment" style= "padding:20px;">
            
            <form action="forgotId.php" method="POST" class="theForm" style="padding-top:20px;">
                <?php echo message(); ?>
                <p style = "text-align:left; margin-bottom:20px; font-size:24px;">Confirm Password</p>
                <p>Enter Number</p>
                <input type="text" placeholder="Enter Registered Number" name='number'>
                <br> <br>
                <input class="confirmSubmit" type="submit" name="forgot_submit" style="font-weight:bolder;">
            </form>
        </section>
    </div>
<!-- THE ID OF THE USER -->
    <section class= "showId" style="display:<?php echo $display ; ?>;">
        <div style="margin-top:100px;">
            <div style= 'height:300px; background-color:white; border-radius:8px;width:30%; text-align:center; margin:auto;'>
            
            <p style="padding-top:100px; font-weight: bold;">Your Id is <br>  <span style= "font-weight:bolder; font-size:30px;"><?php echo $student_id;?></span></p>
        </div>
        </div>
    </section>
</body>
</html>