@extends('layouts/front-home')

@section('content')	
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					@if(!empty($banners))
					<?php $count=0; ?>
					@foreach($banners as $banner)
					<div class="item @if($count==0){{'active'}}@endif" style="background-image: url(/banner-images/{{$banner->image_url}});">
						<div class="carousel-caption">
							{{-- <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Brandi</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3> --}}
							{{-- <p data-wow-duration="1000ms" class="wow slideInRight animated" style="color:#fff !important; font-weight: 500; font-size: 42px ">We are a team of professionals</p> --}}
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<?php $count++; ?>
					@endforeach
					@endif
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(/assets/img/banner2.jpg);">
						<div class="carousel-caption">
							{{-- <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3> --}}
							{{-- <p data-wow-duration="500ms" class="wow slideInRight animated" style="color:#FFF; font-weight: 500; font-size: 42px;">We are a team of professionals</p> --}}
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features service-div1">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>OUR SERVICES</h2>
						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
					</div>
					@if(!empty($services))

					@foreach($services as $service)
					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms" id="service-div">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>{{$service->title}}</h3>
								<p>{{$service->description}} </p>
							</div>
						</div>
					</div>
					<!-- end service item -->

					@endforeach
					@endif
					
					<!-- service item -->
					{{-- <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms" id="service-div">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Call center outsourcing- ( Customer Service/Lead Generation, Outbound and Inbound Call)**</h3>
								<p>Brilliant client administrations, exceptionally prepared specialists and guaranteed quality to decrease cost and improve your general procedure the board. </p>
							</div>
						</div>
					</div> --}}
					<!-- end service item -->
					
					<!-- service item -->
					{{-- <div class="col-md-4 wow fadeInRight active" data-wow-duration="500ms"  data-wow-delay="900ms" id="service-div">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>HR administrations </h3>
								<p>Qualified and experienced HR authorities for compensation move organization, record keeping, execution evaluation, preparing, advancement, and that's only the tip of the iceberg.</p>
							</div>
						</div>
					</div> --}}
					<!-- end service item -->
					
				</div>
			</div>
		</section>
		

		{{-- <section id="features" class="features service-div2">
			<div class="container">
				<div class="row">				

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms" id="service-div">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Account & Finance services- </h3>
								<p>Versatile and capable record administrations to help little to huge business in better monetary administration and quality guaranteed bookkeeping arrangements.  </p>
							</div>
						</div>
					</div>
					end service item
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms" id="service-div">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>E-com support services-</h3>
								<p>Benefit spearheading item the board, truck the executives, request satisfaction, after deal backing, offers and arrangements, client care, and substantially more.</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
				</div>
			</div>
		</section>
		 --}}
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>OUR PROJECTS</h2>
						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						{{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p> --}}
					</div>
					
					{{-- <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
							<li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
							<li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
							<li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
						</ul>
					</div> --}}
					
				</div>
			</div>
			
			<div class="project-wrapper">
				@if(!empty($projects))
				@foreach($projects as $project)
				<figure class="mix work-item branding">
					<img src="/projects-img/{{$project->image_url}}" alt="{{$project->project_name}}">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/projects-img/{{$project->image_url}}"><i class="fa fa-eye fa-lg"></i></a>
						<h4>{{$project->title}}</h4>
						<p>{{$project->project_name}}</p>
					</figcaption>
				</figure>
				@endforeach
				@endif
				
				{{-- <figure class="mix work-item web">
					<img src="/assets/img/works/item-2.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="/assets/img/works/item-3.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="/assets/img/works/item-4.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
			
				<figure class="mix work-item branding">
					<img src="/assets/img/works/item-5.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="/assets/img/works/item-6.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="/assets/img/works/item-7.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="/assets/img/works/item-8.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="/assets/img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure> --}}
				
			</div>
		

		</section>
		
        <!--
        End Our Works
        ==================================== -->
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Meet Our Team</h2>
						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
						<p style="font-size: 14px; padding:2% 5%; line-height: 1.5; ">Set up with an unwavering dependence and enthusiasm, Kikai Administrations is the result of probably the most splendid, youthful, and dynamic personalities of the business. Sharing an advantageous encounter of over 15 years by and large between our pioneers, we have been helping organizations with our administrations and answers for recent years. With our creative reasoning, unpredictable methodologies, and trail-blasting arrangements, we are en route to turning into the top BPO and re-appropriating arrangements supplier in the business.</p>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						{{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p> --}}
					</div>

					@if(!empty($members))
					@foreach($members as $member)
					<!-- single member -->
					<figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="/assets/img/team/devam.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>{{$member->member_name}}</h5>
								<p>{{$member->role}}</p>
								<ul class="social-links text-center">
									@if(!empty($member->twitter))
									<li><a href="{{$member->twitter}}" target="blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									@endif
									@if(!empty($member->facebook))
									<li><a href="{{$member->facebook}}" target="blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									@endif
									@if(!empty($member->google))
									<li><a href="{{$member->google}}" target="blank"><i class="fa fa-google-plus fa-lg"></i></a></li>
									@endif
								</ul>
							</figcaption>
						</div>
						<h4>{{$member->member_name}}</h4>
						<span>{{$member->role}}</span>
					</figure>
					<!-- end single member -->
					@endforeach
					@endif
					
					<!-- single member -->
					{{-- <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="/assets/img/team/depreet.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Depreet Uppal</h5>
								<p>CO-Founder & CSO</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Depreet Uppal</h4>
						<span>CO-Founder & CSO</span>
					</figure> --}}
					<!-- end single member -->
					
					<!-- single member -->
					{{-- <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="/assets/img/team/adarsh.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Adarsh Shrivastva</h5>
								<p>CO-Founder & COO</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Adarsh Shrivastva</h4>
						<span>CO-Founder & COO</span>
					</figure> --}}
					<!-- end single member -->

					{{-- <figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms"></figure> --}}
					
					<!-- single member -->
					{{-- <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<br><br>
						<div class="member-thumb">

							<img src="/assets/img/team/aniruddh.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Aniruddh Sharma</h5>
								<p>Director & CTO</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Aniruddh Sharma</h4>
						<span>Director & CTO</span>
					</figure> --}}
					<!-- end single member -->

					<!-- single member -->
					{{-- <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<br><br>
						<div class="member-thumb">
							<img src="/assets/img/team/manav.jpeg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Manav Dawar</h5>
								<p>Director & CAO</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Manav Dawar</h4>
						<span>Director & CAO</span>
					</figure> --}}
					<!-- end single member -->
					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2 style="color: #fff">10 years of Experience</h2>
							<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
						</div>
						
						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="3200">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Hours of Work</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="120">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Satisfied Clients</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="360">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> Projects Delivered </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="6454">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Awards Won</p>
							</div>
						</div>
						<!-- end first count item -->
				
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		<br><br>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 60%; " >
	<!-- Carousel indicators -->
	{{-- <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>  --}}  
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">		
		@if(!empty($testimonials))
		<?php
		$count = 0;
		?>
		@foreach($testimonials as $test)
		<div class="item carousel-item @if($count==0){{'active'}}@endif">
			<div class="img-box"><img src="/testimonials-img/{{$test->image_url}}" alt=""></div>
			<p class="testimonial"><?php echo $test->review; ?></p>
			<p class="overview"><b>{{$test->name}}</b> <a href="#">{{$test->occupasion}}</a></p>
			<div class="star-rating">
				{{-- <ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul> --}}
			</div>
		</div>
		<?php $count++; ?>
		@endforeach
		@endif
		{{-- <div class="item carousel-item">
			<div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg" alt=""></div>
			<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
			<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="item carousel-item">
			<div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg" alt=""></div>
			<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
			<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
				</ul>
			</div>
		</div> --}}		
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>


		
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
					
					<!-- contact address -->
					{{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Cras at ultrices erat, sed vulputate!</h3>
							<p>2345 Setwant natrer, 1234,</p>
							<p>Washington. United States.</p>
							<p>(401) 1234 567</p>
						</div>
					</div> --}}
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-11 col-md-11 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Any Query ?</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group name-email">
									<div class="input-field">
										<input type="phone" name="phone" id="phone" placeholder="Phone" class="form-control">
									</div>
									<div class="input-field">
										<input type="text" name="address" id="address" placeholder="Address" class="form-control">
									</div>
								</div>
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
			{{-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> --}}
			<!-- End Google map -->
			
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		

@endsection