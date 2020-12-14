<?php include ('connection.php') ?>
<?php include('components/header_2.php')?>
<?php 
$blog = @$_GET['blogId'];
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
                    <span>2 Comments</span>
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

                
        </div>

        
        <div id='sideMenu' class= 'col-lg-3' >
            <p>Category</p>
            <ul class='category-content container'>
            <?php 
                $query = "SELECT * FROM category";
                $execution = mysqli_query($connection , $query);
                while($row=mysqli_fetch_array($execution)){

            ?>
                <li class='category-item' data-aos="fade-left" data-aos-delay="100"><a href="#"><?php echo $row['newcategory']?></a> </li>
                
                <?php } ?>

            </ul>
            
        </div>
</main>


<?php include('components/end.php')?>