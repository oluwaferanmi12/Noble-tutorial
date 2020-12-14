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

    select{
        width:100%;
        height:40px;
        border: 1px solid rgba(0,0,0,0.4);
        border-radius:8px;
    }
</style>

<?php 
    if (isset($_POST['submit'])){
            $currentTime = time();
            $dateTime = strftime("%d-%b-%Y" , $currentTime);
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

            if (empty($theTitle) || empty($content) || empty($image)){
                $_SESSION['ErrorMessage'] = "All Fields Are Required";
            }
            else{
                if(in_array($file_extension , $file_allowed)){
                    if ($imageErr === 0){
                        if ($imageSize < 5000000){
                            $fileNewName= uniqid('' , true).".".$file_extension;
                            $fileDestination = 'upload/'.$fileNewName ;
                            move_uploaded_file($imageTmp , $fileDestination);
                            $query = "INSERT INTO blog(header, content , category , date , image) VALUES ('$theTitle' , '$content' , '$category' , '$dateTime' , '$fileNewName')";
                            $execution = mysqli_query($connection , $query);
                            if ($execution){
                                $_SESSION['SuccessMessage'] = "Blog Inserted Successfully";
                            }
                            else{
                                $_SESSION['ErrorMessage']= "Blog Could Not Be Inserted For Some Reason";
                            }
                        }
                        else{
                            $_SESSION['ErrorMessage'] = "File Size is Too large";
                        }
                    }
                    else{
                        $_SESSION['ErrorMessage'] = "There Was An Error Selecting the File";
                    }
                }
                else{
                    $_SESSION['ErrorMessage'] = "The Extension". $file_extension ."can not be uploaded";
                }
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
        <textarea type='file' name="content" id="" cols="10" rows="10"></textarea>
        <br>
        <p>Image</p>
        <input type="file" name='image'>
        <p>Category</p>
        
        <select name="category" id="">
            <?php 
                $query = "SELECT * FROM category";
                $execution = mysqli_query($connection , $query);
                while($row = mysqli_fetch_array($execution)){

                    ?>
                    <option value="<?php echo $row['newcategory'] ;?>"><?php echo $row['newcategory'] ;?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" name = 'submit' class='submit'>
    </form>
</section>

</body>
