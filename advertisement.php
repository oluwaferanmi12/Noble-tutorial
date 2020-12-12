<?php $title = 'Advertisement' ?>
<?php include('./components/header.php') ?>


<style>
    textarea{
        width:100%;
        padding:20px;
        font-size:20px;
        font-family:monospace;
    }
</style>

<?php 
    if (isset ($_POST['submit'])){
        if (!empty($_POST['title']) || !empty($_POST['content']) || !empty($_POST['action'])){
            $theTitle = $_POST['title'];
            $theContent = $_POST['content'];
            $theAction  = $_POST['action'];
            $query = "INSERT INTO advertisment(title, text , action ) VALUES ('$theTitle' , '$theContent' , '$theAction')";
            $execution = mysqli_query($connection , $query);
            if ($execution){
                $_SESSION['SuccessMessage'] = 'New Advert Added Successfully';
            }
            else{
                $_SESSION['ErrorMessage'] = "Couldn't Connect to the Database";
            }
        }
        else{
            $_SESSION['ErrorMessage']= "All Fields Are Required";
        }
    }
?>

<section id= 'insertPayment' style='margin-top:50px'>
    <form action="advertisement.php" method="POST" class='theForm'>
        <?php echo message() ?>
        <?php echo success() ?>
        <p>Title</p>
        <input type="text" name= 'title'>
        <p>Content</p>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <p>Action</p>
        <input type="text" name='action'>
        <br>
        <input type="submit" name = 'submit' class='submit'>
        
    </form>
</section>

</body>