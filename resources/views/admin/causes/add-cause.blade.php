@extends('admin.app')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Blog
        <small>Add New Blog</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
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
<a href="/admin/causes-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br>



            <div class="box-header">
              <h3 class="box-title">Enter details Here
                {{-- <small>Simple and fast</small> --}}
              </h3>
               <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="POST" action="/admin/add-cause-success" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title (short heading)</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title Here">
                </div>
               
                <div class="form-group">
                  <label for="category_id">Category</label>
                  <select class="form-control" name="category_id" id="status">     
                    <option value="">Select Category</option>
                    @if(!empty($categories))
                    @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                    @endif
                    
                  </select>             
                </div>
                               
                <div class="form-group">
                  <label for="targeted_amount">Targeted Amount</label>
                  <input type="text" class="form-control" id="targeted_amount" name="targeted_amount" placeholder="Enter Amount Here">
                </div>

                <div class="form-group">
                  <label for="short_description">Short Description</label>
                  <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Description Here">
                </div>

                <div class="form-group">
                  <label for="description">Full Description</label>
                  <textarea class="textarea" name="description" placeholder="Enter Description Here"
                          id="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

                <div class="form-group">
                  <label for="image_url">Image</label>
                  <input type="file" class="form-control" name="image_url" id="image_url">  
                  <p>Image size should be 2000*1500 </p>
                </div>

                <div class="form-group">
                  <label for="video_url">Video URL</label>
                  <input type="text" class="form-control" name="video_url" id="video_url" placeholder="Enter URL Here">         
                </div>

                <div class="form-group">
                  <label for="last_date">Last Date for Donation</label>
                  <input type="date" class="form-control" id="last_date" name="last_date" placeholder="Select Date">
                </div>

                <div class="form-group">
                  <label for="urgent">Urgent (if Its urgent, then select yes)</label>
                  <select class="form-control" name="urgent" id="urgent">     
                    <option value="">Select Option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>             
                </div>

                <div class="form-group">
                  <label for="cause_status">Cause Status</label>
                  <select class="form-control" name="cause_status" id="cause_status">     
                    <option value="">Select Option</option>
                    <option value="in_process">In Process</option>
                    <option value="completed">Completed</option>
                  </select>             
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