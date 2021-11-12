`<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>PCOde'd</title>
<!--

http://www.tooplate.com/view/2098-health

-->
     
     <link rel="stylesheet" href="../static/css/bootstrap.min.css">
     <link rel="stylesheet" href="../static/css/font-awesome.min.css">
     <link rel="stylesheet" href="../static/css/animate.css">
     <link rel="stylesheet" href="../static/css/owl.carousel.css">
     <link rel="stylesheet" href="../static/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
	<link rel="stylesheet" href="../static/css/tooplate-style.css">
     
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.8.8/brython.js" integrity="sha256-rA89wPrTJJQFWJaZveKW8jpdmC3t5F9rRkPyBjz8G04=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.8.8/brython_stdlib.js" integrity="sha256-Gnrw9tIjrsXcZSCh/wos5Jrpn0bNVNFJuNJI9d71TDs=" crossorigin="anonymous"></script>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to <font face = "San Francisco" >PCOd’ed</font><br /></i></a></p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +91 8921619772 / +91 9207110456</span>

                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@pcoded.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{url_for('home')}} class="navbar-brand"> <font face = "San Francisco" size =" 5">PCOd’ed</font><br /> </i></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Best Doctors</a></li>
                         <li><a href="home_news.php" class="smoothScroll">Latest News</a></li>
			<li><a class="smoothScroll">Best Fitness Centers</a></li>						
			<li><a href="register.html" class="smoothScroll">Sign Up/Sign In</a></li>
                      </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Take Back Your Life</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Meet Our Fitness Centers</a>
                                        </div>
                                   </div>
                              </div>

                              </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Worried about PCOS?</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>We have solutions that provides the necessary monitoring and guidance for PCOS.An early diagnosis opens the door to the future care and treatment.Meet our Doctors!</p>
					<Br><br>
					<p>Do you know that a better lifestyle modification can help you treat your  PCOS? Connect with our Fitness Centers to know more!</p>
                                   <br><br>
				<p>Get updated with the latest News of PCOS to get informed!</p>
                              
                    </div>
                    
               </div>
          </div>
     </section>
     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Best Gynaec Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="../static/images/team-image1.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr Loveleena Nadir</h3>
                                        <p>Fortis La Femme Hospital, New Delhi</p>
                                        <div class="team-contact-info">
                                             <p>28 years experience</p>
                                             
                                        </div>
                                        
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="../static/images/team-image2.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Dr Aneeta Talwar</h3>
                                        <p>Manipal Hospital,Bangalore</p>
                                        <div class="team-contact-info">
                                             <p></i> 25 years experience</p>
                                            
                                        </div>
                                        
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="../static/images/team-image3.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
										
                                        <h3>Dr Nalini Mahajan</h3>
                                        <p>Mother and Child Hospital, New Delhi</p>
                                        <div class="team-contact-info">
                                             <p></i> 38 years experience</p>
                                        </div>
                                       
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
		 </section>
		 
		 <!-- NEWS -->
	
     
              

                 
     <!-- SCRIPTS -->
     <script src="../static/js/jquery.js" ></script>
     <script src="../static/js/bootstrap.min.js"></script>
     <script src="../static/js/jquery.sticky.js"></script>
     <script src="../static/js/jquery.stellar.min.js"></script>
     <script src="../static/js/wow.min.js"></script>
     <script src="../static/js/smoothscroll.js"></script>
     <script src="../static/js/owl.carousel.min.js"></script>
     <script src="../static/js/custom.js"></script>

</body>
</html>
