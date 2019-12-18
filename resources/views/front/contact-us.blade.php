@extends('layouts/front-home')

@section('content')

<section   style="background-image: url(/assets/img/banner-static.png); height: 400px ; background: contain; width: 100%; background-repeat: no-repeat;">
	
</section>

<!--
        Contact Us
        ==================================== -->		

        <section id="contact" class="contact">
        	<div class="container">
        		<div class="row mb50">

        			<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
        				<h2>Let’s Discuss</h2>
        				<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
        			</div>

        			<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
        				<p>You can ask any question whatever you have. We will resolve you problem. Our team is always there to help you. </p>
        			</div>

        			<!-- contact form -->
        			<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
        				<div class="contact-form">
        					<h3>Contact Us</h3>
        					<form action="#" id="contact-form" style="padding: 0 5%  !important">
        						<div class="input-group name-email">
        							
        								<input type="text" name="name" id="name" placeholder="Name" class="form-control">
        							
        						</div>
        						<br>
        						<div class="input-group name-email">
        							
        								<input type="email" name="email" id="email" placeholder="Email" class="form-control">
        							
        						</div>
        						<br>
        						<div class="input-group name-email">
        							
        								<input type="phone" name="phone" id="phone" placeholder="Phone" class="form-control">
        							
        						</div>
        						<br>
        						<div class="input-group name-email">
        							
        								<input type="text" name="address" id="address" placeholder="Address" class="form-control">
        							
        						</div>
        						<br>
        						<div class="input-group">
        							<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
        						</div>
        						<div class="input-group">
        							<input type="submit" id="form-submit" class="pull-right" value="Send message">
        						</div>
        					</form>
        				</div>
        			</div>
        			<!-- end contact form -->

        			<!-- contact address -->
        			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
        				<div class="contact-address">
        					<h3>Address</h3>
        					<p>Enkay Square, Plot 448-A,</p>
        					<p>Opposite Cyber Hub,</p>
        					<p>NH8, -122016, Phase V,</p>
        					<p>Udyog Vihar, Sector 19,</p>
        					<p>Gurugram, Haryana 122022</p>
        					<br><br>

        					<h3>Email</h3>
        					<p><a href="mailto:contact@kikaiservices.com" style="color: #00f; font-weight: bold">contact@kikaiservices.com</a></p>
        					<br><br>

        					<h3>Contact</h3>
        					<p><a href="tel:7711997111" style="color: #00f; font-weight: bold">7711997111</a></p>

        				</div>
        			</div>
        			<!-- end contact address -->

        			<!-- footer social links -->
        			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
        				<ul class="footer-social">
        					<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
        					<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
        					<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
        					<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
        				</ul>
        			</div>
        			<!-- end footer social links -->

        		</div>
        	</div>

        	<!-- Google map -->


<div style="width: 100%; margin-top: 50px;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="250" frameborder="0" style="border:0"></iframe>
        	{{-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> --}}
        	<!-- End Google map -->

        </section>

        <!--
        End Contact Us
        ==================================== -->


        @endsection
