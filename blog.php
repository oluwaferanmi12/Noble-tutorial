<?php include ('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    "
    />
    <!--------------------- Owl Carousel --------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!---------x------------- Owl Carousel ---------x------ -->

    <!---------------- Animation on Scroll ------------ -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--------x--------- Animation On scroll -------x--------- -->
    <!---------------------- jQuery ----------------------- -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <!----x-------------------- jQuery --------------------x -->

    <!----------------------- BootStrap -------------------- -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <!-----------x------------------ Bootstrap  --------x------->
    <!--------------------- Customised Style ----------------- -->
    <link rel="stylesheet" href="./generalStyle.css?v=<?php echo time() ?>" />
    <!------x--------- Customised Style --------------x -->

    
    <title>Blog</title>
  </head>
  <div style='overflow-x:hidden'>
  <body >
    <!----------------- NavBar ----------------- -->
    <nav class='nav'>
      <div class='nav-content'>
        <div class='nav-brand'>
          <p class='nav-brand-item'>Noble<span class='span_1'>Tutorial</span></p>
        </div>

      
          
        <ul class='nav-menu'>
          <li class='nav-menu-item'><a href="#">Home</a></li>
          <li class='nav-menu-item'><a href="#">About</a></li>
          <li class='nav-menu-item theactive'><a href="#">Blog</a></li>
          <li class='nav-menu-item'><a href="#">Contact</a></li>
          <li class='nav-menu-item'><a href="#">E-Resources</a></li>
          <li class='nav-menu-item'><a href="#">Testimonial</a></li>
        </ul>
          
          
          
          <div class='nav-social'>
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
            
          </div>
          <div class="toggle-collapse" >
              <div class="toggle-icons">
                  <i class="fa fa-bars"></i>
              </div>
          </div>
          
          


      </div>
      
    </nav>

    <!-------------x-------- NavBar  ------x------------>

    
    <main>
      <div class="showcase">
        <!-------------------- ShowCase Section  -------------------->
        <div class='showcase-content'>
          <h1 data-aos='fade-right' data-aos-delay='500'>Avail Yourself With Great Contents <br> From The Best Creators.</h1>
          <a href="#"><div data-aos='fade-left' data-aos-delay='700'  class='showcase-button'>Start Exploring</div>
        </div></a>

        <img src="./svg/wavesNegative.svg" alt="" class='showcase-img'>
      </div>
      <!-----x---------------- ShowCase Section  -----------x---------->

      <!------------------------- Advertisement---------------------- -->
      
      <div id='advertisement' class='container'>
        <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fa fa-long-arrow-left"></i></span>
            <span class="owl-nav-next"><i class="fa fa-long-arrow-right"></i></span>
          </div>
        
        <div class="owl-carousel owl-theme advertisement-post" >
          
          <div class="advertisement-content " data-aos='fade-up' data-aos-delay='300' >
            
            <div class="advert-post">
              <h1>Change Of Course</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos exercitationem </p>
              <a href="#"><div class='advert-link'>Read</div></a>
            </div>
          </div>

          <div class="advertisement-content" data-aos='fade-up' data-aos-delay='300'>
            
            <div class="advert-post">
              <h1>Change Of Course</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos exercitationem </p>
              <a href="#"><div class='advert-link'>Read</div></a>
            </div>
          </div>

          <div class="advertisement-content" data-aos='fade-up' data-aos-delay='300' >
            <div class="advert-post">
              <h1>Change Of Course</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos exercitationem </p>
              <a href="#"><div class='advert-link'>Read</div></a>
            </div>
            
          </div>

          <div class="advertisement-content" data-aos='fade-up' data-aos-delay='300'>
            <div class="advert-post">
              <h1>Change Of Course</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci dignissimos exercitationem </p>
              <a href="#"><div class='advert-link'>Read</div></a>
            </div>

          </div>


        </div>
      </div>

      <!----------------- Blog Posts --------- -->
      
      <section id='blog-post' class='row'>
          <div  class="blog-content offset-lg-1 col-lg-7">
          <?php
              $query_no = "SELECT count(id) FROM blog";
              $execution_no =  mysqli_query($connection , $query_no);
              $row_no = mysqli_fetch_array($execution_no);
              $noOfBlog = $row_no[0];
              $limit = 5;
              $pages = ceil($noOfBlog/$limit);
              
              if(isset($_GET['page'])){
                $page = $_GET['page'];
                if ($page > $pages){
                  $page =$pages;
                  $start = ($page - 1) * $limit;
                  $query = "SELECT * FROM blog ORDER BY id DESC LIMIT $start, $limit";
                }
                else if($page < 1){
                  $page = 1;
                  $start = ($page - 1) * $limit;
                  $query = "SELECT * FROM blog ORDER BY id DESC LIMIT $start, $limit";
                }
              }

              else if(isset($_GET['category'])){
                  $nameOfCategory = $_GET['category'];
                  $query = "SELECT * FROM blog WHERE  category = '$nameOfCategory' ORDER BY id desc limit 15";
                  $display = 'none';
                  $page = 1 ;
              }
              
              else{
                $page = 1;
                $start = ($page - 1) * $limit;
                $query = "SELECT * FROM blog ORDER BY id DESC LIMIT $start, $limit";
              }
              
              
              $execution = mysqli_query($connection , $query);
              while($row = mysqli_fetch_array($execution)){
                $url = 'upload/'.$row['content'];
                $thecontent = file_get_contents($url);

            ?>
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
              <p><?php echo substr($thecontent , 0, 200)  ?> ......</p>
              <a href="fullBlogPost.php?blogId=<?php echo $row['id'] ?>"><div class='blog-button'>Read More &nbsp; <i class="fa fa-arrow-right"></i></div></a>
            </div>
            <hr width='90%'>
            
            
              <?php } ?>
              
                <div class="pagination" style='display:<?php echo $display ?>'>
                  <?php 
                    if($page > 1){
                    
                    ?>
                      <a href="blog.php?page=<?php echo $page - 1 ?>"><i class="fa fa-chevron-left"></i></a>

                  <?php } ?>
                  <?php for($i = 1; $i <= $pages; $i++){

                  ?>
                  <a href="blog.php?page=<?php echo $i ?>" class="pages"><?php echo $i; ?></a>
                  <?php } ?>
                  

                    <?php 
                      if ($page < $pages){

                      
                    ?>
                    <a href="blog.php?page=<?php echo $page + 1 ?>"><i class="fa fa-chevron-right"></i></a>

                    <?php } ?>
                  
                </div>
          
              
              
          <!--------x--------- Pagination ---------x--- -->
          </div>
<!---------------- sideMenu  --------------------->
          <div id='sideMenu' class= 'col-lg-3' >
            <p>Category</p>
            <ul class='category-content container'>
            <?php 
              $query = "SELECT * FROM category";
              $execution = mysqli_query($connection , $query);
              while($row=mysqli_fetch_array($execution)){

            ?>
                <a href="blog.php?category=<?php echo $row['newcategory']?>"><li class='category-item' data-aos="fade-left" data-aos-delay="100"><?php echo $row['newcategory']?></li></a> 
                
                <?php } ?>

            </ul>
            
            <div id='popular-post' >
              <p>Popular Posts</p>
              <div class="popular-post">
                <div >
                    <?php 
                      $query = "SELECT * FROM blog ORDER BY comment desc LIMIT 7";
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
<!-----x---------- sideMenu  --------------x----->
      </section>

      <!-----x------- Blog Post  ----x------------>
      <!------------x------ Advertisement -------------------x- -->
    </main>


    <footer class='footer'>
      <div class='container footer-container'>
        <div class='about-us'>
          <p>about us</p>
          <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptas sed hic, odit, id commodi non libero harum iure soluta quis cum nemo similique iste! Soluta, totam! Rerum vitae nulla minima incidunt! Ex molestias in natus, ea a magnam maxime? Quae incidunt architecto aut officia accusamus nam quam voluptatem blanditiis!</div>
        </div>

        <div class="follow ">
          <p>Follow Us</p>
          <div class='l-social'>Let us be Social</div>
          <div>
              <i class="fa fa-facebook-f"></i>
              <i class="fa fa-twitter"></i>
              <i class="fa fa-instagram"></i>
              <i class="fa fa-youtube"></i>
          </div>
          
        </div>
        <div class="move-up">
          <span><i class="fa fa-arrow-circle-up fa-2x"></i></span>
        </div>
      </div>

    </footer>


  </body>
  </div>
  <!-- Animation On scroll  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init()</script>
  <!---------x----- Animation On Scroll -----x--------- -->
  <!-- Owl Carousel js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
  
  
  <!-- Customised Js  -->
  <script src="main.js"></script>
  
</html>
