@extends('admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Category List
      <small>All Category </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">Category List</li>
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
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ $message }}
          </div>
          @endif
          <br>
          
          <div class="box-header">
            <h3 class="box-title">Category</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($category))
                <?php $i=1; ?>
                @foreach($category as $service)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$service->category_name}}</td>
                  <td>{{$service->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-category/{{$service->id}}" style="color: #fff">EDIT</a></button>
                    <a href="/admin/category-list/{{ $service->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
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