<?php $title = 'Edit Super Admin' ; ?>
<?php @include ('components/header.php') ;?>
<?php confirm_admin_login() ; ?>

<?php 
    $new_display = "none";
    $id = @$_GET[id];
    if (isset($_POST['submit'])){
        $confirmEmail = $_POST['email'];
        $confirmPassword = $_POST['password'];
        $query = "SELECT * FROM super_admin WHERE email = '$confirmEmail' AND password = '$confirmPassword' and id = '$id'";
        $execution = mysqli_query($connection , $query);
        $row = mysqli_fetch_array($execution);
        if (!($row)){
            $_SESSION['ErrorMessage']= 'Wrong Password Or Email ';
            
        }
        else{
            $display = 'none';
            $_SESSION ['AdminSuccessMessage'] = "Details Confirmed";
            $new_display = "";
        }

    }
?>


<div style= 'background-color:#E0EFDE; min-height:80vh; margin-top:0px; padding-top:0px; display:<?php echo $display ?>;' >
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px; padding-top:50px;'>Edit  Super Admin</div>

    <section id='insertPayment'>
        <form action="superAdminEdit.php?id=<?php echo $id ; ?>" method="POST" class='theForm'>
            
            <?php echo message() ?>
            <?php echo Success()?>
            
            <p>Enter Previous Email</p>
            <input type="text" name= 'email' >
            <p>Enter Previous Password</p>
            <input type="password" name = 'password' >
            

            
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</div>
<!-- The New Page that is Shown once the user is Validated -->
<?php 
    if (isset($_POST['newsubmit'])){
        $id = $_GET['id'];
        $newEmail = $_POST['email'];
        $newPassword = $_POST['password'];
        $query= "UPDATE super_admin  SET email = '$newEmail' , password = '$newPassword' WHERE id = '$id' ";
        $execution = mysqli_query($connection , $query);
        if ($execution){
            $_SESSION['SuccessMessage'] = "Super Admin Details Updated Successfully";
            header('Location:superAdminEdit.php');
            
            
        }
        else{
            $_SESSION['ErrorMessage']= 'Could Not Update Details For Some Reason ';
        }
    }
?>

<div style= 'background-color:#E0EFDE; min-height:80vh; margin-top:0px; padding-top:0px; display:<?php echo $new_display ?>;' >
    <div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px; padding-top:50px;'>Edit  Super Admin</div>

    <section id='insertPayment'>
        <form action="superAdminEdit.php?id=<?php echo $id ; ?>" method="POST" class='theForm'>
            <?php echo confirm_success() ?>
            <?php echo message() ?>
            <p>Enter New Email</p>
            <input type="text" name= 'email' >
            <p>Enter New Password</p>
            <input type="password" name = 'password' >
            

            
            <br>
            <input type="submit" name = 'newsubmit' class='submit'>
        </form>
    </section>
</div>
</body>
