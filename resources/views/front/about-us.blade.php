@extends('layouts/front-home')


@section('content')


<section   style="background-image: url(/assets/img/banner-static.png); height: 400px ; background: contain; width: 100%; background-repeat: no-repeat;">
	
</section>

		<!--
        Meet Our Team
        ==================================== -->		

        <section id="team" class="team">
        	<div class="container">
        		<div class="row">

        			<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms" style="text-align: center;">
        				<div class="row">
        					<div class="col-sm-6">
        						<h2>About Kikai Services</h2>
        						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
        						<p style="font-size: 16px; padding:2% 5%; line-height: 1.5; text-align: justify; ">Kikai Services benefits an enormous and broad scope of successful and versatile re-appropriating arrangements. We offer business value to our clients through innovative solutions and operational excellence in key industry verticals, including banking and financial services, insurance, manufacturing, digital marketing, e-commerce, retail and hospitality offering end to end solutions. Our client driven and adjustable arrangements help us in enabling our customers, help them develop and accomplish ideal operational productivity. We endeavor to convey the most elevated quality arrangements and security to enable you to arrive at the zenith of achievement. <br><br></p>
        					</div>
        					<div class="col-sm-6">
        						<img src="/assets/img/accounts.jpg" style="width: 100%; height: auto">
        					</div>
        				</div>

        				<div class="row">
        					<div class="col-sm-6">
        						
        						<h2>Our Mission</h2>
        						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
        						<p style="font-size: 16px; padding:2% 5%; line-height: 1.5; ">To give capable, versatile, and spearheading answers for little and huge organizations while proceeding on our way of personal growth. <br><br></p>

        					</div>

        					<div class="col-sm-6">

        						<h2>Our Vision</h2>
        						<div class="devider"><i class="fa fa-pencil fa-lg"></i></div>
        						<p style="font-size: 16px; padding:2% 5%; line-height: 1.5; ">To be the main Cutting edge end-to - end business process the board Organization.<br><br></p>

        					</div>

        					<div class="col-sm-6">
        						<h2>FAQs</h2>

        						<div class="accordion rs-accordion" id="accordionExample">

        							@if(!empty($faqs))
        							<?php $i=1;?>
        							@foreach($faqs as $faq)
        							<!-- Item 1 -->
        							<div class="card mb-2">
        								<div class="card-header" id="headingOne">
        									<h4 class="title">
        										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne">
        											{{$faq->questions}}
        										</button>
        									</h4>
        								</div>
        								<div id="collapseOne{{$i}}" class="collapse @if($i==1) {{'show'}} @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
        									<div class="card-body">
        										<?php echo $faq->answers; ?> 
        									</div>
        								</div>
        							</div>
        							<?php $i++; ?>
        							@endforeach
        							@endif

        						</div>



        					</div>
        				</div>



        			</div>


        		</div>
        	</div>
        </section>

        <!--
        End Features
        ==================================== -->

        <!--
        End Meet Our Team
        ==================================== -->

        @endsection
