<?php $title = 'HomePage'; ?>
<?php include ('components/header_2.php')?>
<?php $home = 'theactive' ?>
<?php include ('components/nav.php')?>
<?php include ('connection.php')?>


<main> 
    <div class="showcase new_showcase">
        <div class= 'showcase-content home-showcase-content'>
            <div class='home-container' >
                <div class='inner-container'>
                    <h1 data-aos="fade-right" data-aos-delay='300'>Learn How To Learn</h1>
                    <p data-aos= 'fade-up' data-aos-delay='500'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo velit necessitatibus rem deleniti impedit quibusdam a modi quas architecto temporibus perferendis, ad nihil unde numquam culpa reprehenderit facere? Expedita, cumque. Perspiciatis, sed? Excepturi, enim, natus accusantium molestias adipisci odio autem perferendis expedita, sit quia laboriosam eum exercitationem! Id, libero.</p>
                    <a href="" ><div class = 'registerButton' data-aos= 'fade-left' data-aos-delay='700'>Register</div></a>
                </div>
                <img src="./svg/undraw_education_f8ru2.svg" alt="" class='home-img' data-aos= 'fade-down' data-aos-delay='1000'>
            </div>
        </div>
    </div>
    <!-------------------- Recent Blog Posts /Advertisement  and Quotes ------------->
    
    <div class="row" style= 'padding-top:0px'>
        <div class=" col-lg-6 flash-advert" data-aos= 'fade-up' data-aos-delay='500'>
            
            
            <div class= 'flash-title'>Trending</div>
            <hr style='background-color:white; width:100%;'>
            <div class='content-flash' >
                <?php 
                    $query = "SELECT * FROM blog ORDER BY id DESC LIMIT 5";
                    $execute = mysqli_query($connection, $query);
                    while($row=mysqli_fetch_array($execute)){
                        $url = 'upload/'.$row['content'];
                        $textContent = file_get_contents($url);
                        $theId = $row ['id'];

                    
                
                ?>
                <div class="slides">
                    <h4><?php echo $row['header']; ?></h4>
                    <p><?php echo substr($textContent , 0 , 100)?>...</p>
                    <a href="fullBlogPost.php?blogId=<?php echo $theId ; ?>"><div class='flash-link-div'>Read More</div></a>
                </div>

                <?php } ?>
                
            </div>
        </div>

        <!--------------- Quotes Section --------------- -->
        <div class="col-lg-6 theQuote">
            <div class='Quote-Section'>
                <?php 
                    $query = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
                    $execute = mysqli_query($connection , $query);
                    while ($row= mysqli_fetch_assoc($execute)){

                    
                ?>
                <div class='quote' data-aos= 'fade-up' data-aos-delay='500'>
                    <i class="fa fa-quote-left "></i>
                    &nbsp; &nbsp;
                    <?php echo $row['quotes']?>
                    <i class="fa fa-quote-right ">
                        &nbsp; &nbsp;
                    </i> 
                    <br>
                    <p><?php echo $row['author'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-----------x---------------- Quote Section ----x------------- -->
    </div>

    <!------------x- Recent Blog Posts And Advertisement -------x---------- -->
    <!-------------- What We Offer -------------- -->
        <div class="row offer">
            <div class="col-lg-8">
                <div class='offer-head'>
                    What We Offer
                </div>
                <div class='offer-head-content' data-aos= 'fade-up' data-aos-delay='500'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, ea! Optio fugit adipisci nobis distinctio. Doloremque neque recusandae, necessitatibus reiciendis veniam accusantium. Praesentium, expedita officiis eius molestias quis sapiente neque deleniti atque autem et voluptatum eos hic sunt minus nostrum, esse nobis similique earum, consectetur laborum cum harum? Quis, consequuntur?
                </div>

                <div class='row offer-breakdown'>
                    <div class='offset-lg-1 col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500'>
                        <div class= 'font-container' ><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Safety First</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500'>
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>Regular Classes</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                    <div class='offset-lg-1 col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500'>
                        <div class= 'font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Certified Teachers</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500' >
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>Sufficient Classrooms</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                    <div class='offset-lg-1 col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500'>
                        <div class= 'font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Creative Lessons</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' data-aos= 'fade-up' data-aos-delay='500'>
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>E-Resources</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-lg-4 theSvg' data-aos= 'fade-up' data-aos-delay='500' >
                <img src="./svg/undraw_exams_g4ow.svg" alt="">
            </div>
        </div>
    <!---------x--------- What We Offer -----------x-------- -->
    <!-- Programme that are available // Services Available -->
    <div class='programme'>
        <div class='ourServices'>Programmes</div>
        <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fa fa-long-arrow-left"></i></span>
            <span class="owl-nav-next"><i class="fa fa-long-arrow-right"></i></span>
        </div>
        
        <div class='owl-carousel-0 owl-carousel owl-theme programme-post'>
            <div class="programme-container" data-aos= 'fade-up' data-aos-delay='500' >
                <div class='programme-img'>
                    <img src="./images/waec-logo.jpg" alt="">
                </div>
                <div class='programme-text' >
                    <h3>Waec</h3>
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            
            <div class="programme-container" data-aos= 'fade-up' data-aos-delay='500'>
                <div class='programme-img'>
                    <img src="./images/NECO.png" alt="">
                </div>

                <div class='programme-text'>
                    <h3>Neco</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            <div class='programme-container' data-aos= 'fade-up' data-aos-delay='500'>
                <div class='programme-img'>
                    <img src="./images/A-levels.jpg" alt="">
                </div>
                <div class='programme-text'>
                    <h3>A-Level</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            <div class='programme-container' data-aos= 'fade-up' data-aos-delay='500'>
                <div class='programme-img'>
                    <img src="./images/Official_JAMB_logo.png" alt="">
                </div>
                <div class='programme-text'>
                    <h3>Jamb</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            <div class='programme-container' data-aos= 'fade-up' data-aos-delay='500'>
                <div class='programme-img'>
                    <img src="./images/jupeb.jpg" alt="">
                </div>
                <div class='programme-text'>
                    <h3>Jupeb</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
        </div>
        
    </div>

    <!-------------- Our Team ------------- -->
    <div class='team'>
        <div class='ourTeam' style='color: white'>Our Team</div>
        <div class='row'>
            <!-- Since this only has just a content then there is no need for the use of the bootstrap grid layout , just using margin: auto would do the trick -->
            <div class='offset-lg-4 col-lg-12'>
                <div class='author-container' data-aos= 'fade-up' data-aos-delay='200'>
                    <div class='team-img-container'>
                        <img src="./images/Team/Founder.jpg" alt="">
                    </div>
                    <div class="founder-details">
                        <h3>The Founder</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab expedita debitis culpa, in omnis amet eaque accusantium pariatur tenetur nisi.</p>
                        <hr>
                        <div class='tutor-follow'>Follow:</div>
                        <div class='tutor-media'>
                            <a href="#" ><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------ Tutors ------------------- -->
        <div class='tutors'>
            <div class='row'>
                <div class="offset-lg-1 col-lg-10">
                    <div class='owl-carousel-1 owl-carousel owl-theme TutorContent'>
                <div class='Tutor-container' data-aos= 'fade-up' data-aos-delay='500'>
                    <div class='TutorImage'>
                        <img src="./images/Team/Founder.jpg" alt="">
                    </div>
                    <div class="tutor-details">
                        <div class="tutor-name">Chike Njeome(Science)</div>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id fugit repudiandae deleniti rerum illum earum deserunt minus perspiciatis corporis odit molestias amet quas, est animi quam quo laboriosam. Blanditiis.</p>
                        <hr>
                        <div class='tutor-follow'>Follow:</div>
                        <div class='tutor-media'>
                            <a href="#" ><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class='Tutor-container' data-aos= 'fade-up' data-aos-delay='500'>
                    <div class='TutorImage'>
                        <img src="./images/Team/Founder.jpg" alt="">
                    </div>
                    <div class="tutor-details">
                        <div class="tutor-name">Akin Akin(Art)</div>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id fugit repudiandae deleniti rerum illum earum deserunt minus perspiciatis corporis odit molestias amet quas, est animi quam quo laboriosam. Blanditiis.</p>
                        <hr>
                        <div class='tutor-follow'>Follow:</div>
                        <div class='tutor-media'>
                            <a href="#" ><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <hr>
                    </div>
                    
                </div>
                <div class='Tutor-container' data-aos= 'fade-up' data-aos-delay='500'>
                    <div class='TutorImage'>
                        <img src="./images/Team/Founder.jpg" alt="">
                    </div>
                    <div class="tutor-details">
                        <div class="tutor-name">Mallam Njeome(Comm)</div>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id fugit repudiandae deleniti rerum illum earum deserunt minus perspiciatis corporis odit molestias amet quas, est animi quam quo laboriosam. Blanditiis.</p>
                        <hr>
                        <div class='tutor-follow'>Follow:</div>
                        <div class='tutor-media'>
                            <a href="#" ><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                        </div>
                        <hr>
                    </div>

                    
                    
                </div>
                
            </div>

                </div>
            </div>
        </div>
        <!----------x-------------- Tutors ----------------x---------- -->
    </div>
    <!-------x------- Our Team ------------------x -->

    <div class='example-student'>
        <div class='row'>
            <div class="offset-lg-1 col-lg-9 example-student-cont">
                <div class='student-head'>Testimonial</div>
                <div class='row'>
                    <div class="col-lg-9 test-cont" >
                        <div class= 'student-img'>
                            <img src="./images/Team/pexels-spencer-selover-775358.jpg" alt="">
                            
                        </div>
                        &nbsp; &nbsp;
                        <div class='student-test'>
                            <div class= 'student-test-div'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sunt. Unde vitae esse illo impedit quos a, debitis nam pariatur quibusdam! Dolorem, iure aut. Distinctio animi nemo veritatis quod illum.This is the remaining content of the page with which i really hope doesn't affect the things that are going on here</div>
                            <a href="#"><div class='linkToTestimonials'>Veiw More</div></a>
                            

                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</main>

<?php include('components/footer.php')?>
<?php include('components/end.php')?>