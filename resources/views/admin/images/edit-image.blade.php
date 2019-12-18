@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Image
			<small>Edit Image</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Image</li>
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
					<a href="/admin/images-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>

					<div class="box-header">
						<h3 class="box-title">Update Image Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-image/{{$image->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">			
							<div class="row">
								<div class="col-sm-8">
									

								<div class="form-group">
									<label for="image_url">Image</label>
									<input type="file" class="form-control" name="image_url" id="image_url">        
								</div>

								<div class="form-group">
									<label for="image_category">Image Type</label>
									<select class="form-control" name="image_category" id="image_category">  
										<option value="">Select Category</option>
										<option value="banner" @if($image->image_category == 'banner') {{'selected'}} @endif>Banner</option>
										<option value="gallery" @if($image->image_category == 'gallery') {{'selected'}} @endif>Gallery</option>
										<option value="partner" @if($image->image_category == 'partner') {{'selected'}} @endif>Partner's Logo</option>
									</select>             
								</div>

								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">     
										<option value="">Select Option</option>
										<option value="Active" @if($image->status == 'Active') {{'selected'}} @endif>Active</option>
										<option value="Deactive" @if($image->status == 'Deactive') {{'selected'}} @endif>Deactive</option>
									</select>             
								</div>
								</div>

								<div class="col-sm-4">
									<img src="/banner-images/{{$image->image_url}}" style="height: 150px; width: auto; margin-top: 10%">
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