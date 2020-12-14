<?php ?>
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

    <?php include('end.php')?>