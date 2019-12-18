@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit {{$page->page_name}} Content
			<small>Edit {{$page->page_name}} Content</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">{{$page->page_name}} Content</li>
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
					<a href="/admin/pages-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>



					<div class="box-header">
						<h3 class="box-title">Enter Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-content/{{$page->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<label for="page_name">Page</label>
									<input type="text" class="form-control" id="page_name" name="page_name" placeholder="Enter Name Here" value="{{$page->page_name}}" readonly>
								</div>
								
									<input type="hidden" class="form-control" id="keyword" name="keyword" placeholder="keyword" value="{{$page->keyword}}">
								

								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="textarea" name="content" placeholder="Place Content here"
									id="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$page->content}}</textarea>
								</div>								          

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