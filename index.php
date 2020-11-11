<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    "
    />
    <link href="https://fonts.googleapis.com/css2?family=Tittilium + Web" rel="stylesheet">
    <link rel="stylesheet" href="newindex.css?v=<?php echo time(); ?>"/>
  </head>
  <body>
    <section id="nav-bar">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <p class="navbar-brand" 
            >Noble <span id="side-head">Tutorial</span></p
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-expanded="false"
            aria-controls="navbarNav"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.php" id="current">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">NEWS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">SERVICES</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="priceplan.php">PRICE PLANS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.php">TESTIMONIALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">CONTACT US</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- Slider -->
    <section id="slider">
      <div id="headerSlider" class="carousel slide theFirstSlider" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active bg-1">
            <div class="carousel-caption theSlider bgc-1">
              <h3 style = 'font-size : 50px'> deliver result with confidence</h3>
              <p style = 'font-size : 1.5rem'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam
                dicta, officiis saepe nostrum dolores porro nemo iure voluptate
                temporibus laborum?
              </p>
            </div>
          </div>
          <div class="carousel-item bg-2">
            <div class="carousel-caption theSlider bgc-2">
              <h3 style = 'font-size : 50px'>We deliver result with confidence</h3>
              <p style = 'font-size : 1.5rem'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam
                dicta, officiis saepe nostrum dolores porro nemo iure voluptate
                temporibus laborum?
              </p>
            </div>
          </div>
          <div class="carousel-item bg-3">
            <div class="carousel-caption theSlider bgc-3">
              <h3 style = 'font-size : 50px'>We deliver result with confidence</h3>
              <p style = 'font-size : 1.5rem'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam
                dicta, officiis saepe nostrum dolores porro nemo iure voluptate
                temporibus laborum?
              </p>
            </div>
          </div>
        </div>
        <!-- <a
          class="carousel-control-prev"
          href="#headerSlider"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#headerSlider"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>
    </section>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 ">
            <div class="about-us">
              <h2><span class="head-a">About</span> Us</h2>
              <div class="about-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                labore quod officia illum numquam perferendis magnam
                necessitatibus beatae quibusdam facere facilis deleniti qui
                explicabo blanditiis incidunt quia dolor in accusantium ullam
                magni, voluptas provident. Mole stias repudiandae quaerat cumque
                soluta inventore quas vero et magni commodi ipsum! Vitae
                voluptas optio, cupiditate a est atque? Doloribus iure
                aspernatur ullam reprehenderit repudiandae!
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="about-us">
              <h2 class="head-a">Vision/Mission</h2>
              <div class="about-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                nihil sed cum sint dolores sunt error maiores laudantium velit
                consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Voluptate vero officiis aut quibusdam commodi? Quisquam
                suscipit delectus cum animi maiores.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="author">
      <div class="container">
        <h1>The Founder</h1>
        
        <div class="row">
          
          <div
            class="col-lg-3 col-md-12 col-sm-12 col-xs-12 profile-pic text-center"
          >
            <div class="img-box">
              <img
                src="./images/man-1283235.jpg"
                alt="The author's picture"
                class="img-responsive"
              />
              <ul>
                <a href="#" target="_blank"
                  ><li><i class="fa fa-facebook"></i></li
                ></a>
                <a href="#" target="_blank"
                  ><li><i class="fa fa-twitter"></i></li
                ></a>
                <a href="#" target="_blank"
                  ><li><i class="fa fa-whatsapp"></i></li
                ></a>
              </ul>

              <div>
                <h2
                  style="
                    font-family: cursive;
                    font-size: larger;
                    color: #dc493a;
                  "
                >
                  Ogbenna Godfrey Noble
                </h2>
                <h3
                  style="
                    color: #555;
                    font-family: monospace;
                    font-weight: bold;
                  "
                >
                  Founder/Ceo
                </h3>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style= 'margin-top: 10px'>
            <div id="wordAbout">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Consequuntur eum error dignissimos cumque placeat illo aperiam
              voluptatem velit cupiditate dolores, quae quos! Sed voluptas
              blanditiis doloribus similique accusantium voluptatum unde, ipsam
              ratione tempore, expedita quibusdam voluptatibus officiis? Officia
              magnam rem error minus exercitationem odit, labore rerum
              blanditiis consequuntur! Beatae, porro! Lorem ipsum dolor, sit
              amet consectetur adipisicing elit. Consequuntur illum, laboriosam
              fugiat maxime adipisci reprehenderit dicta aperiam sunt autem
              ipsa!
            </div>
          </div>
          <div class= "col-lg-4 col-md-12 col-sm-12 col-xs-12" style= 'margin-top: 10px' >
            
              <div id="news-slider" class="carousel slide" data-ride = 'carousel'>
                <ol class="carousel-indicators">
                  <li data-target="#news-slider" data-slide-to="0"></li>
                  <li data-target="#news-slider" data-slide-to="1"></li>
                  <li data-target=" #news-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active news-1">
                    <div class="news carousel-caption  news-caption-1" id = 'second'>
                      <h2>Latest news</h2>

                      <p style = "text-align: left;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum consequuntur doloremque quibusdam quae magnam  
                        <a href="news.html" style=" text-decoration:none  ">Read...</a>
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item news-2">
                    <div class="news carousel-caption  news-caption-2" id = 'second'>
                      <h2>Latest news</h2>
                      <p style = "text-align: left;"> Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Eveniet harum consequuntur doloremque quibusdam
                        quae magnam
                        <a href="news.html" style="text-decoration: none;">Read....</a>
                      </p>
                    </div>
                  
                  </div>
                  <div class="carousel-item news-3">
                    <div class="news carousel-caption  news-caption-2" id= 'third' >
                      <h2>Latest news</h2>

                      <p style = "text-align: left;">Lorem ipsum dolor sit amet consectetur adipisci
                        elit. Eveniet harum consequutur doloremque quibusdam
                        quae magnam 
                        <a href="news.html" style="text-decoration: none;" >Read...</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
        
      </div>
    </section>
    <section id="footer">
      <div class="d-footer">
        <span id="footer-tutorial">Noble</span> Tutorial
        <span id="noble-copyright">copyright &copy; 2020</span>
        <div class="theIcons" style="text-align: center">

          <p>Contact us:</p>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class = "fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-whatsapp"></i></a>
          
          <div style="font-size: 12px; font-family: 'Times New Roman', Times, serif;letter-spacing: 0.04em; padding-bottom: 20px;">tel:08069845070</div>

        </
      </div>
    </section>
  </body>
</html>
