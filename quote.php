<?php $title = 'InsertQuote'?>

<?php include('components/header.php'); ?>

<?php 
    if (isset($_POST['submit'])){
        $quote = $_POST['quote'];
        $author = $_POST['author'];
        $query = "INSERT INTO quotes(quotes, author) VALUES ('$quote' , '$author')";
        $execution = mysqli_query($connection , $query);
        if ($execution ){
            $_SESSION['SuccessMessage']= "Quote Added Successfully";
        }
        else{
            $_SESSION['ErrorMessage'] = "Quote Could Not be added";

        }
    }
?>


<section id='insertPayment' style='margin-top:50px; background-color:#E0EFDE'>
    <form action="quote.php" method="POST" class='theForm'>
        <?php echo message() ?>
        <?php echo success() ?>
        <p>Quotes</p>
        <input type="text" name= 'quote' placeholder='Enter Quote'>
        <p>Author</p>
        <input type="text" name= 'author' placeholder='Enter Name Of Author'>
        
        <br>
        <input type="submit" name = 'submit' class='submit'>
    </form>
</section>

</body>