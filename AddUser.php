<?php $title = 'InsertPayment' ; ?>
<?php @include ('components/header.php')?>
<?php confirm_admin_login() ; ?>

<?php 
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ( !isset($email) || !isset($password)){
            $_SESSION['ErrorMessage']="All Fields Are Required";
        }
        else{
            $query= "INSERT INTO admin (email, password) VALUES ('$email' , '$password')";
            $execution = mysqli_query($connection ,$query);
            if ($execution){
                $_SESSION['SuccessMessage']= "Admin Added Successfully";
                header("Location:manageAccess.php");
            }
        }
    }
?>

    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px; margin-top:10px;'>Add An Admin</div>

    <section id='insertPayment'>
        <form action="AddUser.php" method="POST" class='theForm'>
            <?php echo message() ?>
            <p>Add Email</p>
            <input type="text" name= 'email'>
            <p>Add Password</p>
            <input type="password" name = 'password'>
            

            
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</body>

</html>