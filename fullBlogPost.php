<?php include ('connection.php') ?>
<?php include ('session.php');?>
<?php include('components/header_2.php')?>
<?php $blog = 'theactive'?>
<?php include('components/nav.php')?>
<?php include('functions.php') ?>

<?php 
$blog = isset($_GET['blogId'])? $_GET['blogId']: $_GET['theBlog'];
$query = "SELECT * FROM blog WHERE id='$blog'";
$execution = mysqli_query($connection , $query);
$row = mysqli_fetch_array($execution);
$url = "upload/".$row['content'];
$theContent = file_get_contents($url);
?>


<main> 
    <section id='blog-post' class='row'>
        <div  class="blog-content offset-lg-1 col-lg-7">
            <div class='blog-showcase' data-aos="zoom-in" data-aos-delay="200">
                <div class="blog-image">
                    <img src="./upload/<?php echo $row['image'] ?>" alt="">
                </div>
                <div class="blog-info">
                    <span><i class="fa fa-user"></i>&nbsp; &nbsp;Admin</span>
                    <span><i class="fa fa-calendar"></i>&nbsp; &nbsp;<?php echo $row['date']; ?></span>
                    <span><?php echo $row['comment']?> Comments</span>
                </div>
                </div>
                <div class="blog-title">
                <a href=""><h1><?php echo $row['header']?></h1></a>
                <p><?php echo $theContent ?></p>
                
                </div>
                <?php 
                    $queryCount = "SELECT count(id) FROM blog";
                    $executeCount = mysqli_query($connection , $queryCount);
                    $result = mysqli_fetch_array($executeCount);
                    $NoOfBlogPost = $result[0];
                    // The Query To Select The Previous Post Strictly By id 
                    $prevBlog = $blog - 1 ;
                    $query  = "SELECT * FROM blog WHERE id = '$prevBlog'";
                    $execution = mysqli_query($connection , $query);
                    for ($i = 0 ; $i <= $NoOfBlogPost; $i++){
                        if($prevCount = mysqli_fetch_array($execution)){
                            break;
                        }
                        else{
                            $prevBlog = $prevBlog - 1 ;
                            $query = "SELECT * FROM blog WHERE id='$prevBlog'";
                            $execution = mysqli_query($connection , $query);
                        }
                    }
                    
                    
                    ?>
                <div class="pagination">
                    
                    <?php if (isset($prevCount['id'])){
                        
                    
                    ?>
                    
                    <a href="fullBlogPost.php?blogId=<?php echo $prevCount['id'] ?>"> <i class="fa fa-chevron-left"></i><span style='color:black'>&nbsp; &nbsp; Prev Blog</span></a>

                    <?php } ?>
                    
                    <!-- // The Query to Know the next id to select  -->
                    <?php 
                    $nextBlog = $blog + 1 ;
                    $query = "SELECT * FROM blog WHERE id = $nextBlog";
                    $execution = mysqli_query($connection , $query);
                    for($i = 0 ; $i <= $NoOfBlogPost; $i++){
                        if ($countRow = mysqli_fetch_array($execution)){
                            break;
                        }
                        else{
                            $nextBlog = $nextBlog + 1;
                            $query = "SELECT * FROM blog where id = $nextBlog";
                            $execution = mysqli_query($connection , $query);
                            
                        }
                    }
                ?>
                <?php if (isset($countRow['id'])){

                ?>
                &nbsp; &nbsp; &nbsp;  
                <a href="fullBlogPost.php?blogId=<?php echo $countRow['id'] ?>"><span style='color:black'>Next Blog</span> &nbsp; <i class="fa fa-chevron-right"></i></a>

                <?php } ?>
                </div>

                <?php 
                    if (isset($_GET['commentSubmit'])){
                        $theBlog = $_GET['theBlog'];
                        $commentEmail = $_GET['email'];
                        $commentInput = $_GET['commentContent'];
                        $currentTime = time();
                        $dateTime = strftime("%d-%b-%Y @ %H:%M" , $currentTime);

                        if (empty($commentEmail) || empty($commentInput)){
                            $_SESSION["ErrorMessage"] = 'All Fields Are Required';
                        }
                        else{
                            $query = "INSERT INTO comments(blogid , email , comment , date) VALUES ('$theBlog','$commentEmail' , '$commentInput', '$dateTime')";
                            $execution = mysqli_query($connection , $query);
                            if($execution){
                                $_SESSION['SuccessMessage'] = "Comment Added";
                                $query = "SELECT count(blogid) FROM comments WHERE blogid='$theBlog'";
                                    $execution = mysqli_query($connection , $query);
                                    
                                    if($execution){
                                        echo "it Got here";
                                        $commentRow = mysqli_fetch_array($execution);
                                        $totalNoOfComment = $commentRow[0];
                                        echo $totalNoOfComment ;
                                        $NoOfComment = $totalNoOfComment ;
                                        $query = "UPDATE blog SET comment= '$NoOfComment' WHERE id= '$theBlog'";
                                        $execution = mysqli_query($connection , $query);
                                        
                                    }


                                


                            }
                        }
                    }
                ?>

                <div class='comment'>
                    <?php echo message() ;?>
                    <?php echo success() ;?>
                    <form method ="GET" action="fullBlogPost.php?blogId=<?php echo $blog ?>" >
                        <input type="hidden" name='theBlog'  value ='<?php echo $blog ?>'>
                        <p>Email</p>
                        <input type="email" name='email' placeholder='Enter a Valid Mail '>

                        <p>Post A Comment</p>
                        <input class='commentContent' name='commentContent' type="text" maxlength='150' placeholder = 'Maximum of 150 Characters'>
                        <br>
                        <input type="submit" class='commentSubmit' value='Submit' name='commentSubmit'>
                    </form>
                </div>

                <div class= 'showComment'>
                <?php 

                    $particularCommentId = isset($_GET['blogId'])? $_GET['blogId']: $_GET['theBlog'] ;
                    $query = "SELECT * FROM comments WHERE blogid='$particularCommentId' ORDER BY ID desc ";
                    $commentResult = mysqli_query($connection , $query);
                    while($row = mysqli_fetch_array($commentResult)){

                    
                ?>
                    <div class= 'theComment'>
                        <div>
                            <i class="fa fa-user"></i>
                        
                        
                        <span><?php echo $row['email']?></span>
                        &nbsp;
                        </div>

                        <p> &nbsp; <?php echo $row['comment'] ?></p>  
                        <div class='commentDate'><?php echo $row['date']?></div>
                    </div>
                    <hr style='width:100%;'>
                    <?php } ?>
                </div>
        </div>

        
        <div id='sideMenu' class= 'col-lg-3' >
            <p>Category</p>
            <ul class='category-content container'>
            <?php 
                $query = "SELECT * FROM category";
                $execution = mysqli_query($connection , $query);
                while($row=mysqli_fetch_array($execution)){

            ?>
                <li class='category-item' data-aos="fade-left" data-aos-delay="100"><a href="blog.php?category=<?php echo $row['newcategory']?>"><?php echo $row['newcategory']?></a> </li>
                
                <?php } ?>

            </ul>

            <div id='popular-post' >
                <p>Popular Posts</p>
                <div class="popular-post">
                    <div >
                        <?php 
                        $query = "SELECT * FROM blog ORDER BY comment desc LIMIT 5";
                        $execution = mysqli_query($connection , $query);
                        while ($row= mysqli_fetch_array($execution)){

                        

                        ?>
                        <div class="popular-img" data-aos="flip-up" data-aos-delay="200">
                            <img src="./upload/<?php echo $row['image'] ?>" alt="">
                        </div>
                    <div class="popular-post-title">
                        <a href=""><h1><?php echo $row['header']?></h1></a>
                    </div>
                    <div class="popular-btn">
                        <a href="fullBlogPost.php?blogId=<?php echo $row['id'] ?>"><div class='blog-button'>Read More &nbsp; <i class="fa fa-arrow-right"></i></div></a>
                    </div>
                    <hr>
                    <?php } ?>
                    </div>

                

                </div>
            </div>
            
        </div>
</main>

<?php include('components/footer.php')?>


<?php include('components/end.php')?>