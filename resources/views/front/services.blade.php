@extends('layouts/front-home')


@section('content')


<section   style="background-image: url(/assets/img/banner-static.png); height: 400px ; background: contain; width: 100%; background-repeat: no-repeat;">
	
</section>

		<!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				@if(!empty($services))
				<?php $count=1; ?>
				@foreach($services as $service)
				@if($count%2 != 0)
				<div class="row" id="set-response">					
					<div class="col-sm-6">	
						<h2>{{$service->title}}</h2>
						<p>{{$service->description}}</p>
					</div>

					<div class="col-sm-6">
						<img src="/services-img/{{$service->image_url}}" style="width: 95%; height: 300px">
					</div>			

				</div>
				<?php $count++; ?>

				@else
				<div class="row" id="set-response">
					<div class="col-sm-6">
						<img src="/services-img/{{$service->image_url}}" style="width: 95%; height: 300px">
					</div>
					
					<div class="col-sm-6">	
						<h2>{{$service->title}}</h2>
						<p>{{$service->description}}</p>
					</div>									
				</div>
				<?php $count++; ?>
				@endif
				@endforeach
				@endif
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->

@endsection
