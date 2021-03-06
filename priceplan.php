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
    <link rel="stylesheet" href="price.css"/>
    <title>Document</title>
  </head>
  <body onload="theSlider()">
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
                <a class="nav-link" href="priceplan.html" id="current"
                  >PRICE PLANS</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">TESTIMONIALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">CONTACT US</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section>
        <div id="theChange" style="background-image: url(./images/books-on-shelf-in-library-256374.jpg); width: 100vh; height: 100vw; background-repeat: no-repeat; background-size: cover; background-position: center;">
          This is another div with the intention of getting a new div

        </div>
    </section>
    <section id="footer">
      <div class="d-footer">
        <span id="footer-tutorial">Noble</span> Tutorial
        <span id="noble-copyright">copyright &copy; 2020</span>
      </div>
    </section>
    <script>
        let slideImg = document.getElementById('theChange')
        let images = ['./images/books-on-shelf-in-library-256374.jpg', './images/Noble-1.jpg'  , './images/Noble-2.jpg']
        let len = images.length
        let i = 0 ;
        function slider(){
          if (i > (len-1)){
            i=0;
          }
          slideImg
        }
    </script>
  </body>
</html>
