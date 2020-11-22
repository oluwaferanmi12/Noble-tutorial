<?php $title = 'Edit User' ; ?>
<?php @include ('components/header.php')?>
<?php confirm_admin_login() ; ?>

<?php 
    $id = @$_GET['id'];
    $query = "SELECT * FROM admin WHERE id = '$id'";
    $execution = mysqli_query($connection , $query);
    $row = mysqli_fetch_assoc($execution);
    $email = $row['email'];
    $password = $row ['password'];
?>

<div style='text-align:center;font-weight:bold;font-size:24px; margin-bottom: 20px; margin-top:10px;'>Edit Admin</div>

    <section id='insertPayment'>
        <form action="AdminEdit.php?id=<?php echo $id ; ?>" method="POST" class='theForm'>
            <?php echo message() ?>
            <p>Add Email</p>
            <input type="text" name= 'email' value = <?php echo $email; ?>>
            <p>Add Password</p>
            <input type="password" name = 'password' value = <?php echo $password; ?>>
            

            
            <br>
            <input type="submit" name = 'submit' class='submit'>
        </form>
    </section>
</body>



</html>

<?php 
    if (isset($_POST['submit'])){
        $id  = $_GET['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "UPDATE admin SET email ='$email' , password = '$password' WHERE id= '$id' ";
        $execution = mysqli_query($connection , $query);
        if ($execution){
            $_SESSION['SuccessMessage'] = 'User Edited Successfully';
            echo "<script> window.close() </script>";
        }
    }
?>