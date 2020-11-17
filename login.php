<?php include ('session.php') ?>
<?php include ('connection.php') ?>
<?php 
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if (empty($email) || empty($password)){
            $_SESSION['ErrorMessage'] = 'All Fields Are Required';

        }
        else{
            $query ="SELECT * FROM admin WHERE email='$email' AND password = '$password' ";
            $execute = mysqli_query($connection , $query);
            $row = mysqli_fetch_array($execute);
            if ($row){
                $_SESSION['User_id'] = $row['id'];
                header("Location:dashboard.php");
            }
            else{
                $_SESSION['ErrorMessage'] = "Wrong Details Entered" ;
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
    <link rel="stylesheet" href="newveiwstudent.css?v=<?php echo time()?>">
</head>
<body style= 'background-color: #E0EFDE; overflow-x:hidden;'>
    <div id = 'Header' style='margin-bottom:100px;'>
        <div style = " height: 100%; padding-top: 20px;"><h3> <span style= "color:#fff; font-family: Helvetica" >Noble</span> Tutorial Class</h3>
        <p></p>
        <p style= "color: #fff; margin-top:8px" >(We deliver result with confidence)</p>
        </div>
    </div>
    <div><?php echo message()?></div>
    <div class="row">
        <div class="offset-lg-1 col-lg-5" style='text-align:center;'>
            <div class='img-container'>
                <img class='login-img' src="./svg/undraw_authentication_fsn5.svg" alt="">
            </div>
        </div>
        <div class='col-lg-5' style='padding-top:75px;'>
        <div style= "width:90%; display:flex; min-height:40vh justify-content:center; align-items:center; background-color:white; margin-top:75px; border-radius:10px; margin:auto;  "> 
    

            <form action="login.php" method= 'POST'  style='width:70%; margin:auto; text-align:center; display:flex; flex-direction:column;  margin-top:50px; ' class='login-form'>
                <p class='theP'>Email</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-square" style='font-size:25px;'></i></span>
                    </div>
                    <input type="text" name='email' class='form-control input-field' placeholder='Enter Email' aria-describedby='basic-addon'>
                </div>
                <p class='theP'>Password</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" style='font-size:25px;'></i></span>
                    </div>
                    <input type="password" name = 'password' class= 'form-control input-field' placeholder='Enter Password' aria-describedby='basic-addon'>
                </div>
                <div style='margin-bottom:95px; margin-top:0px;'><input style='width:100%; height:40px; border-radius:8px; color:white; font-weight:bold; background-color:#e53420;' type="submit" name= 'submit' class= 'theSubmit'> </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>