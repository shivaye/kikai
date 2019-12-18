<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>KIKAI SERVICES</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="/assets/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="/assets/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="/assets/css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="/assets/css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="/assets/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="/assets/img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="/">
						<h1 id="logo">
							<img src="/assets/img/kikai-logo.png" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current" onclick="showHome()"><a href="/">Home</a></li>
                        {{-- <li><a href="#features">Features</a></li> --}}
                        <li onclick="showTeam()"><a href="/our-team">Team</a></li>
                        <li onclick="showService()"><a href="/services">Services</a></li>
                        <li onclick="showAbout()"><a href="/about-us">About</a></li>
                        <li onclick="showContact()"><a href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->



        @yield('content')



        
        
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">
                            <img src="/assets/img/kikai-logo.png" alt="">
                            <br><br>
                            <p><h4><b>Address: </b></h4>
                                Enkay Square, Plot 448-A, <br>Opposite Cyber Hub,<br> NH8, -122016, Phase V, <br>Udyog Vihar, Sector 19,<br> Gurugram, Haryana 122022</p><br>

                                <p><h4><b>E-mail: </b></h4>
                                <a href="mailto:contact@kikaiservices.com">contact@kikaiservices.com</a></p>
                                    <br>
                                <p><h4><b>Contact: </b></h4>
                                <a href="tel:77 11 99 7111">77 11 99 7111</a></p>


                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Subscribe </h6>
                            <form action="#" class="subscribe">
                                <input type="text" name="subscribe" id="subscribe">
                                <input type="submit" value="&#8594;" id="subs">
                            </form>
                            <p>We will glad to share latest updates with you on your email.</p>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="footer-single">
                            <h6>KIKAI</h6>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/our-team">Our Team</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="footer-single">
                            <h6>Support</h6>
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">FAQ</a></li>
                                {{-- <li><a href="#">Pressroom</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </footer>
        <footer id="footer-1" class="footer-1">
            <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">
                            Copyright © 2019 <a href="http://www.getbos.co/">GETBOS.CO</a>. All rights reserved.</a>
                        </p>
                    </div>
                </div>
        </footer>
        
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <!-- Single Page Nav -->
        <script src="/assets/js/jquery.singlePageNav.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="/assets/js/jquery.fancybox.pack.js"></script>
        <!-- jquery.mixitup.min -->
        <script src="/assets/js/jquery.mixitup.min.js"></script>
        <!-- jquery.parallax -->
        <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="/assets/js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="/assets/js/jquery.appear.js"></script>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- jquery easing -->
        <script src="/assets/js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="/assets/js/wow.min.js"></script>
        <script>
            var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
        </script> 
        <!-- Custom Functions -->
        <script src="/assets/js/custom.js"></script>
        
        <script type="text/javascript">
            $(function(){
                /* ========================================================================= */
                /*  Contact Form
                /* ========================================================================= */
                
                $('#contact-form').validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: "come on, you have a name don't you?",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "no email, no message"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            type:"POST",
                            data: $(form).serialize(),
                            url:"process.php",
                            success: function() {
                                $('#contact-form :input').attr('disabled', 'disabled');
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $(this).find(':input').attr('disabled', 'disabled');
                                    $(this).find('label').css('cursor','default');
                                    $('#success').fadeIn();
                                });
                            },
                            error: function() {
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $('#error').fadeIn();
                                });
                            }
                        });
                    }
                });
            });

            function showHome(){
                window.location.href = '/';
            }

            function showTeam(){
                window.location.href = '/our-team';
                
            }

            function showContact(){
                window.location.href = '/contact-us';
                
            }

            function showAbout(){
                window.location.href = '/about-us';
                
            }

            function showService(){
                window.location.href = '/services';
                
            }
        </script>
    </body>
</html>
