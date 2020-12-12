<?php $title= 'insertBlog.php' ?>
<?php include('components/header.php')?>
<style>
    body{
        background-color:#e0efde;
        
    }
    #insertPayment{
        margin-top:50px;
        margin-bottom:50px;
    }

    textarea{
        width:100%;
        padding:20px;
        font-size:20px;
        font-family:monospace;
        border:1px solid rgba(0,0,0,0.4);
        border-radius: 10px ;
    }

    textarea:focus{
        outline:none;
        border: 1px solid rgba(0,0,0,0.4);
    }
</style>

<?php 
    if (isset($_POST['submit'])){
        $currentTime = time();
        $dateTime = strftime("%d-%B-%Y" , $currentTime);
        $theTitle = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];
        $image = $_FILES['image'];
        $imageName = $image['name'];
        $imageTmp = $image['tmp_name'];
        $imageErr = $image['error'];
        $imageSize = $image['size'];
        $file_explode = explode('.' , $imageName);
        $file_extension = strtolower(end($file_explode));
        $file_allowed = array('png' , 'jpeg' , 'jpg' , 'svg');
        if (in_array($file_extension , $file_allowed)){
            if ($imageErr === 0){
                if($imageSize < 5000000){
                    $fileNewName = uniqid('' , true).".".$file_extension;
                    $fileDestination = 'upload/'.$fileNewName;
                    move_uploaded_file($imageTmp , $fileDestination);
                    if(empty($theTitle) || empty($content) || empty($image) || empty($category)){
                        $_SESSION['ErrorMessage'] = "All Fields Are Required";
                    }
                    else{
                        $query = "INSERT INTO blog(header , content , category , date , image)VALUES ('$theTitle' , '$content' , '$category', '$dateTime', '$fileNewName')";
                        $execution = mysqli_query($connection , $query);
                        if ($execution){
                            $_SESSION["SuccessMessage"] = "Post Inserted Successfully ";
                        }
                        else{
                            $_SESSION["ErrorMessage"] = "Something Went Wrong";
                        }
                    }
                }
                else{
                    $_SESSION['ErrorMessage'] = "File Size is Too Large";
                }
            }
            else{
                $_SESSION['ErrorMessage']= "There Was an Error Uploading your File";
            }
        }
        else{
            $_SESSION['ErrorMessage'] = "The File Extension ". $file_extension ." can not be Uploaded";
        }
        
        
    
    }
?>

<section id='insertPayment'>
    <form action="insertBlog.php" method="POST" class='theForm' enctype= 'multipart/form-data'>
        <?php echo message() ?>
        <?php echo success() ?>
        <p>Header</p>
        <input type="text" name= 'title'>
        <p>Content</p>
        <textarea name="content" id="" cols="10" rows="10"></textarea>
        <br>
        <p>Image</p>
        <input type="file" name='image'>
        <p>Category</p>
        <input type="text" name= category>
        <br>
        <input type="submit" name = 'submit' class='submit'>
    </form>
</section>

</body>
