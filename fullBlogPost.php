<?php include ('connection.php') ?>
<?php include('components/header_2.php')?>
<?php 
$blog = @$_GET['blogId'];
$query = "SELECT * FROM blog WHERE id='$blog'";
$execution = mysqli_query($connection , $query);
$row = mysqli_fetch_array($execution)

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
                <p><?php echo $row['content']?></p>
                
                </div>
            </div>
        
</main>


<?php include('components/end.php')?>