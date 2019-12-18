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
							<img src="/team-img/{{$member->image_url}}" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>{{$member->member_name}}</h5>
								<p>{{$member->role}}</p>
								<ul class="social-links text-center">
									@if(!empty($member->twitter))
									<li><a href="{{$member->twitter}}"><i class="fa fa-twitter fa-lg"></i></a></li>
									@endif
									@if(!empty($member->facebook))
									<li><a href="{{$member->facebook}}"><i class="fa fa-facebook fa-lg"></i></a></li>
									@endif
									@if(!empty($member->google))
									<li><a href="{{$member->google}}"><i class="fa fa-google-plus fa-lg"></i></a></li>
									@endif
								</ul>
							</figcaption>
						</div>
						<h4>{{$member->member_name}}</h4>
						<span>{{$member->role}}</span>
							<br><br>
					</figure>
					<!-- end single member -->
					@endforeach
					@endif
									
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->

@endsection
