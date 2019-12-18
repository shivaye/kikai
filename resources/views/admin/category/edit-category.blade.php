@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Category
			<small>Edit New Category</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Category</li>
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
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{ $message }}
					</div>
					@endif
					<br>
					<a href="/admin/category-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>

					<div class="box-header">
						<h3 class="box-title">Edit details Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-category/{{$category->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="row">
									<div class="col-sm-12">										
										<div class="row">
											<div class="col-sm-8">
												<div class="form-group">
													<label for="title">Title</label>
													<input type="text" class="form-control" id="title" name="title" placeholder="Enter Name Here" value="{{$category->category_name}}">
												</div>

												<div class="form-group">
													<label for="status">Status</label>
													<select class="form-control" name="status" id="status">     
														<option value="">Select Option</option>
														<option value="Active" @if($category->status == 'Active') {{'selected'}} @endif>Active</option>
														<option value="Deactive" @if($category->status == 'Deactive') {{'selected'}} @endif>Deactive</option>
													</select>             
												</div>
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