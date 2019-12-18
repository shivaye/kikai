@extends('admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Testimonials List
      <small>All Testimonials </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">Testimonials List</li>
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
            <h3 class="box-title">Testimonials</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Occupasion</th>
                  <th>Image</th>
                  
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($testimonials))
                <?php $i=1; ?>
                @foreach($testimonials as $test)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$test->name}}</td>
                  <td>{{$test->occupasion}}</td>
                  <td><img src="/testimonials-img/{{$test->image_url}}" style="width: 100px; height: 100px"></td>
                  <td>{{$test->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-testimonial/{{$test->id}}" style="color: #fff">EDIT</a></button>
                    <a href="/admin/testimonials-list/{{ $test->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
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