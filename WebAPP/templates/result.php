<html>
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
<?php
SESSION_START();
$conn=mysqli_connect("localhost","root","","pcoded");
$q="select * from result ORDER BY dt DESC LIMIT 1";
		$r=mysqli_query($conn,$q);
		if($d=mysqli_fetch_assoc($r))
		{
			$user=$d['user'];
			$prediction=$d['prediction'];
			$_SESSION['user']=$user;
			$_SESSION['prediction']=$prediction;
			header("location:prediction.html");
		}
?>
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
                         <li><a href="{{url_for('question1')}}" class="smoothScroll">Questionnaire & Prediction</a></li>
                         <li><a href="{{url_for('doctorplace')}}" class="smoothScroll">Doctor Recommendation</a></li>
                         <li><a href="{{url_for('fitnessplace')}}" class="smoothScroll">Fitness Center Recommendation</a></li>
                         <li><a href="#news" class="smoothScroll">Updates on PCOS</a></li>
                      </ul>
               </div>

          </div>
     </section>























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