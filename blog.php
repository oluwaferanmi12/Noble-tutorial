<?php include ('connection.php') ?>
<?php include('components/header_2.php')?>
<?php $blog='theactive'; ?>
    <!----------------- NavBar ----------------- -->
    <?php include('components/nav.php') ?>

    <!-------------x-------- NavBar  ------x------------>

    
    <main>
    <?php $showcase = isset($_GET['page'])? $_GET['page'] : 1 ?> 
    <?php 
      if ($showcase == 1){

      
    ?>
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
  <?php } ?>

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
                else{
                  $start = ($page - 1) * $limit;
                  $query = "SELECT * FROM blog ORDER BY id DESC LIMIT $start ,$limit";
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


    <?php include('components/footer.php')?>
    <?php include('components/end.php')?>


  
