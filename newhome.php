<?php $title = 'HomePage'; ?>
<?php include ('components/header_2.php')?>
<?php $home = 'theactive' ?>
<?php include ('components/nav.php')?>

<main> 
    <div class="showcase new_showcase">
        <div class= 'showcase-content home-showcase-content'>
            <div class='home-container'>
                <div class='inner-container'>
                    <h1>Learn How To Learn</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quo velit necessitatibus rem deleniti impedit quibusdam a modi quas architecto temporibus perferendis, ad nihil unde numquam culpa reprehenderit facere? Expedita, cumque. Perspiciatis, sed? Excepturi, enim, natus accusantium molestias adipisci odio autem perferendis expedita, sit quia laboriosam eum exercitationem! Id, libero.</p>
                    <a href=""><div class = 'registerButton'>Register</div></a>
                </div>
                <img src="./svg/undraw_education_f8ru2.svg" alt="" class='home-img'>
            </div>
        </div>
    </div>
    <!-------------- What We Offer -------------- -->
        <div class="row offer">
            <div class="col-lg-8">
                <div class='offer-head'>
                    What We Offer
                </div>
                <div class='offer-head-content'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, ea! Optio fugit adipisci nobis distinctio. Doloremque neque recusandae, necessitatibus reiciendis veniam accusantium. Praesentium, expedita officiis eius molestias quis sapiente neque deleniti atque autem et voluptatum eos hic sunt minus nostrum, esse nobis similique earum, consectetur laborum cum harum? Quis, consequuntur?
                </div>

                <div class='row offer-breakdown'>
                    <div class='offset-lg-1 col-lg-5 theCol'>
                        <div class= 'font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Safety First</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' >
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>Regular Classes</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                    <div class='offset-lg-1 col-lg-5 theCol'>
                        <div class= 'font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Certified Teachers</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' >
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>Sufficient Classrooms</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                    <div class='offset-lg-1 col-lg-5 theCol'>
                        <div class= 'font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        <div>
                            <h5>Creative Lessons</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias atque quos libero minus ipsa sit, incidunt quisquam eligendi autem laborum!</p>
                        </div>
                    </div>
                    <div class='col-lg-5 theCol' >
                        <div class='font-container'><i class="fa fa-chalkboard-teacher"></i></div>
                        
                        <div>
                            <h5>E-Resources</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta perspiciatis officia obcaecati, similique expedita harum quidem ea dolorum cupiditate aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-lg-4 theSvg' >
                <img src="./svg/undraw_exams_g4ow.svg" alt="">
            </div>
        </div>
    <!---------x--------- What We Offer -----------x-------- -->
    <!-- Programme that are available // Services Available -->
    <div class='programme' >
        <div class='ourServices'>Programmes</div>
        <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fa fa-long-arrow-left"></i></span>
            <span class="owl-nav-next"><i class="fa fa-long-arrow-right"></i></span>
        </div>
        
        <div class='owl-carousel owl-theme programme-post'>
            <div class="programme-container">
                <div class='programme-img'>
                    <img src="./images/waec-logo.jpg" alt="">
                    
                </div>
                <div class='programme-text' >
                    <h3>Waec</h3>
                    <hr>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            
            <div class="programme-container">
                <div class='programme-img'>
                    <img src="./images/NECO.png" alt="">
                </div>

                <div class='programme-text'>
                    <h3>Neco</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            <div class='programme-container'>
                <div class='programme-img'>
                    <img src="./images/A-levels.jpg" alt="">
                </div>
                <div class='programme-text'>
                    <h3>A-Level</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
            <div class='programme-container'>
                <div class='programme-img'>
                    <img src="./images/Official_JAMB_logo.png" alt="">
                </div>
                <div class='programme-text'>
                    <h3>Jamb</h3>
                    <hr>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At cum ipsa commodi facere dolorem asperiores laborum aut voluptates sint ratione.
                </div>
            </div>
        </div>
        
    </div>
</main>

<?php include('components/footer.php')?>
<?php include('components/end.php')?>