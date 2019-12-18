@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add SubCategory
			<small>Add New SubCategory</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">SubCategory</li>
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
					<a href="/admin/subcategory-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>



					<div class="box-header">
						<h3 class="box-title">Enter Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/add-subcategory-success" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<label for="status">Category</label>
									<select class="form-control" name="category_name1" id="category_name1">   <option value="">Please select</option>
										<?php foreach ($category as $key=>$category): ?>
											<option value="<?php echo $category->category_name; ?>">
												<?php  echo $category->category_name; ?>
											</option>
										<?php endforeach; ?>
									</select>             
								</div>
								<div class="form-group">
									<label for="title">SubCategory</label>
									<input type="text" class="form-control" id="subcategory_name1" name="subcategory_name1" placeholder="Enter Name Here">
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">     
										<option value="">Select Option</option>
										<option value="Active">Active</option>
										<option value="Deactive">Deactive</option>
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