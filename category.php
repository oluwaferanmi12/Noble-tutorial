<?php $title = 'Add Category' ?>
<?php include('components/header.php')?>
<?php 
    if (isset($_POST['submit'])){
        $category =$_POST['thecategory'];
        $currentTime = time();
        $dateTime = strftime("%d-%B-%Y" , $currentTime);
        if (empty($category)){
            $_SESSION['ErrorMessage'] = "The Add Post Field is Required";
        }

        else{
            $query = "INSERT INTO category (date , newcategory) VALUES('$dateTime' , '$category')";
            $execution = mysqli_query($connection , $query);
            if ($execution){
                $_SESSION['SuccessMessage'] = "New Category Added Successfully";
            }
            else{
                $_SESSION['ErrorMessage'] = "Could Not Connect";
            }
        }
    }
?>
<style>
    body{
        background-color:#E0EFDE;
    }

    #insertPayment{
        margin-top:50px;
    }
</style>

<section id='insertPayment'>
    <form action="category.php" method="POST" class='theForm'>
        <?php echo message() ?>
        <?php echo success() ?>
        <p>Add Category</p>
        <input type="text" name= 'thecategory'>
        <input type="submit" name = 'submit' class='submit' value="Add">
    </form>
</section>
</body>