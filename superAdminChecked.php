<?php $title = 'Edit Super Admin' ; ?>
<?php @include ('components/header.php') ;?>
<?php confirm_admin_login() ; ?>

<?php 
    if (isset($_POST['submit'])){
        $newEmail = $_POST['email'];
        $newPassword = $_POST['password'];
        if (empty($newEmail) || empty($newPassword)){
            $_SESSION['ErrorMessage'] = 'All Fields Are Required';
        }
        else{
            
        }
    }
?>

<div style= 'background-color:#E0EFDE; min-height:80vh; margin-top:0px; padding-top:0px;'>
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px; padding-top:50px;'>Edit  Super Admin</div>

    <section id='insertPayment'>
        <form action="superAdminChecked.php" method="POST" class='theForm'>
            <?php echo message() ?>
            <p>Enter New Email</p>
            <input type="text" name= 'email' >
            <p>Enter New Password</p>
            <input type="password" name = 'password' >
            

            
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</div>
</body>