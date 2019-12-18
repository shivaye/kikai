@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Blog
			<small>Edit New Blog</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Blog</li>
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
					<a href="/admin/blogs-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>

					<div class="box-header">
						<h3 class="box-title">Edit details Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/admin/edit-blog/{{$blog->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="row">
									<div class="col-sm-8">
										
									
								<div class="form-group">
									<label for="short_title">Title (short heading)</label>
									<input type="text" class="form-control" id="short_title" name="short_title" placeholder="Enter Title Here" value="{{$blog->short_title}}">
								</div>
								<div class="form-group">
									<label for="author_name">Author Name</label>
									<input type="text" class="form-control" id="author_name" name="author_name" placeholder="Author Name" value="{{$blog->author_name}}">
								</div>
								<div class="form-group">
									<label for="long_title">Short Description</label>
									<input type="text" class="form-control" id="long_title" name="long_title" placeholder="Enter Short Description Here" value="{{$blog->long_title}}">
								</div>
									</div>

									<div class="col-sm-4">
										<div style="padding: 5%">
										<img src="/blogs-img/{{$blog->image_url}}" style="width: 200px; height: 200px" />
									</div>
									</div>

								</div>

								<div class="form-group">
									<label for="description">Full Description</label>
									<textarea class="textarea" name="description" placeholder="Place some text here"
									id="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{$blog->description}}</textarea>
								</div>

								<div class="form-group">
									<label for="image_url">Image</label>
									<input type="file" class="form-control" name="image_url" id="image_url">        
								</div>

								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">     
										<option value="">Select Option</option>
										<option value="Active" @if($blog->status == 'Active') {{'selected'}} @endif>Active</option>
										<option value="Deactive" @if($blog->status == 'Deactive') {{'selected'}} @endif>Deactive</option>
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