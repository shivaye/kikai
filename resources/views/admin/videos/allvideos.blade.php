@extends('admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Videos List
      <small>All Videos </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">Videos List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
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

          <br>
          
          <div class="box-header">
            <h3 class="box-title">Videos</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Title</th>                 
                  <th>Video Link</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($videos))
                <?php $i=1; ?>
                @foreach($videos as $video)
                <tr>
                  <td>{{$i++}}</td>
                  
                  <td>{{$video->title}}
                    <td>{{$video->video_url}}
                    </td>
                    <td>{{$video->status}}</td>
                    <td>
                      <button class="btn btn-primary"><a href="/admin/edit-video/{{$video->id}}" style="color: #fff">EDIT</a></button>
                      <a href="/admin/videos-list/{{ $video->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
                      {{-- <button type="submit" class="btn btn-danger">DELETE</button> --}}
                    </td>
                  </tr>
                  @endforeach
                  @endif
                  
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection