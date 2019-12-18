@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Member
			<small>Edit Team Member</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Team Member</li>
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
					<a href="/admin/members-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>

					<div class="box-header">
						<h3 class="box-title">Edit details Here
							{{-- <small>Simple and fast</small> --}}
						</h3>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
						<form method="POST" action="/admin/edit-member/{{$member->id}}" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="row">
									<div class="col-sm-8">

										<div class="form-group">
											<label for="member_name">Member Name</label>
											<input type="text" class="form-control" id="member_name" name="member_name" placeholder="Author Name" value="{{$member->member_name}}">
										</div>

										<div class="form-group">
											<label for="role">Role</label>
											<input type="text" class="form-control" id="role" name="role" placeholder="Enter Short Description Here" value="{{$member->role}}">
										</div>

										<div class="form-group">
											<label for="facebook">Facebook Link</label>
											<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Your Facebook Link" value="@if(!empty($member->facebook)){{$member->facebook}}@endif">
										</div> 

										<div class="form-group">
											<label for="twitter">Twitter Link</label>
											<input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Your Twitter Link" value="@if(!empty($member->Twitter)){{$member->Twitter}}@endif">
										</div> 

										<div class="form-group">
											<label for="google">Google Plus Link</label>
											<input type="text" class="form-control" id="google" name="google" placeholder="Enter Your Google Plus Link" value="@if(!empty($member->google)){{$member->google}}@endif">
										</div> 

										<div class="form-group">
											<label for="image_url">Image</label>
											<input type="file" class="form-control" name="image_url" id="image_url">   
											<p>Image size should be 400*400</p>     
										</div>

										<div class="form-group">
											<label for="status">Status</label>
											<select class="form-control" name="status" id="status">     
												<option value="">Select Option</option>
												<option value="Active" @if($member->status == 'Active') {{'selected'}} @endif>Active</option>
												<option value="Deactive" @if($member->status == 'Deactive') {{'selected'}} @endif>Deactive</option>
											</select>             
										</div>
									</div>

									<div class="col-sm-4">
										<div style="padding: 5%">
											<img src="/team-img/{{$member->image_url}}" style="width: 200px; height: 200px" />
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