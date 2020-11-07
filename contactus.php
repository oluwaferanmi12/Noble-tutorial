<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
      />
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
    <link rel="stylesheet" href="contact.css" />
    <title>Document</title>
  </head>
  <body>
    <section id="nav-bar">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="#"
            >Noble <span id="side-head">Tutorial</span></a
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
                <a class="nav-link" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.html">NEWS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="priceplan.html">PRICE PLANS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">TESTIMONIALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html" id="current"
                  >CONTACT US</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section id= 'slider'>
      <div id="headerSlider" class="carousel slide theFirstSlider" data-ride='carousel'>

        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to = '0' class="active"></li>
          <li data-target="#headerSlider" data-slide-to = '1' ></li>
          <!-- <li data-target="#headerSlider" data-slide-to = '2'></li> -->
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

        </div>
      </div>

    </section>

    <section id="theBody">
        <div class="row">

          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="margin-left: 28px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.401908813221!2d3.907971514483806!3d7.531067594568296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ef0be162d14d%3A0x301513cb0e4b8cf9!2sMoniya%20Police%20Station!5e0!3m2!1sen!2sng!4v1600862528884!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>


          <div class="col-lg-6 col-md-6 col-sm-6 theForm" style="text-align:center; padding-top: 30px; padding-bottom: 30px;">
              <h4 class='sent-notification'><h4/>
              <form id = 'myForm' action="POST">
                <p>name</p>
                <input id='name' type="text" placeholder="Example: Ciroma Chuckwuma" autofocus required>
                <p>Email</p>
                <input id = 'email' type="email" placeholder ='you@example.com required'>
                <p>Number</p>
                <input id ='number' type="text" placeholder="Max of 11 digits" required>
                <p>message us</p>
                <textarea id ='body' style="width: 80%;border: 1px solid #b4b0b0; border-radius: 4px; margin-bottom: 20px;" rows= '5'></textarea>
                <a href="#" class="theLink"><button type='button'  class="btn btn-warning theSubmitbutton" style="width: 60%;  border: none; font-weight: bold;  font-size: 20px; font-family: 'Courier New', Courier, monospace;" type="button" value='Send an Email'>Send Message</button></a>
              </form>
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
