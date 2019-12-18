@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Video
			<small>Edit Video</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Video</li>
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
					<a href="/admin/videos-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>

					<div class="box-header">
						<h3 class="box-title">Edit Link Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-video/{{$video->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">			
								<div class="row">
									<div class="col-sm-12">


										<div class="form-group">
											<label for="title">Video Title</label>
											<input type="text" class="form-control" name="title" id="title" value="{{$video->title}}">        
										</div>

										<div class="form-group">
											<label for="video_url">Video Link</label>
											<input type="text" class="form-control" name="video_url" id="video_url" value="{{$video->video_url}}">        
										</div>

										<div class="form-group">
											<label for="date">Date</label>
											<input type="text" class="form-control" name="date" id="date" value="{{$video->date}}">        
										</div>


										<div class="form-group">
											<label for="status">Status</label>
											<select class="form-control" name="status" id="status">     
												<option value="">Select Option</option>
												<option value="Active" @if($video->status == 'Active') {{'selected'}} @endif>Active</option>
												<option value="Deactive" @if($video->status == 'Deactive') {{'selected'}} @endif>Deactive</option>
											</select>             
										</div>
									</div>


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