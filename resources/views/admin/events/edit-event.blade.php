<?php
	use App\City;
?>


@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add Event
			<small>Add New Event</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Event</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">


				<div class="box">

					@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</div>
					@endif

					@if($message = Session::get('message'))
					<div class="btn btn-primary" style="width: 100%">
						<p>{{ $message }}</p>
					</div>
					@endif
					<br><br>
					<a href="/admin/events-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>



					<div class="box-header">
						<h3 class="box-title">Enter details Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-event/{{$event->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-group">
											<label for="title">Title (heading)</label>
											<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Here" value="{{$event->title}}">
										</div>

										<div class="form-group">
											<label for="date">Date</label>
											<input type="date" class="form-control" id="date" name="date" placeholder="Enter Title Here" value="{{$event->date}}">
										</div>

										<div class="form-group">
											<label for="timing">Timing</label>
											<input type="text" class="form-control" id="timing" name="timing" placeholder="Enter Title Here" value="{{$event->timing}}">
										</div>
									</div>
									<div class="col-sm-4">
										<div style="padding: 5% 10%">
											<img src="/events-img/{{$event->image_url}}" alt="{{$event->title}}" style="width: 200px; height: 200px" /> 
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="state">State</label>
									<select class="form-control" id="state" name="state">
										<option value="">Select State</option>
										@if(!empty($states))
										@foreach($states as $state)
										<option value="{{$state->id}}" @if($event->state == $state->id) {{'selected'}} @endif>{{$state->state}}</option>
										@endforeach
										@endif
									</select>
								</div>
								<?php
								$city = City::where('id',$event->id)->first();
								?>
								<div class="form-group">
									<label for="city">City</label>
									<select class="form-control" id="city" name="city">
										<option value="{{$city->id}}">{{$city->city}}</option>
									</select>
								</div>

								<div class="form-group">
									<label for="short_description">Short Description</label>
									<input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Description Here" value="@if(!empty($event->short_description)) {{$event->short_description}} @endif">
								</div>

								<div class="form-group">
									<label for="description">Full Description</label>
									<textarea class="textarea" name="description" placeholder="Place some text here"
									id="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$event->description}}</textarea>
								</div>

								<div class="form-group">
									<label for="image_url">Image</label>
									<input type="file" class="form-control" name="image_url" id="image_url">                  
								</div>

								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">     
										<option value="">Select Option</option>
										<option value="past" @if($event->status == 'past') {{'selected'}} @endif>Past</option>
										<option value="present" @if($event->status == 'present') {{'selected'}} @endif>Present</option>
										<option value="future" @if($event->status == 'future') {{'selected'}} @endif>Future</option>
									</select>             
								</div>

							</div>
							<!-- /.box-body -->              

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('script')
<script>
	$('#state').on('change',function(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var state = $('#state').val();

		$.ajax({
			type: 'POST',
			url: '/admin/ajaxData',
			data: {_token: CSRF_TOKEN, state_id : state },
			success:function(data){
				$('#city').empty();
				$('#city').html(data);
			}
		});
	});

</script>


@endsection