@extends('admin.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Images List
        <small>All Images </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">List</a></li>
        <li class="active">Images List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">


            <div class="row">
            <div class="col-sm-6">                
              <div class="box-header">
              <h3 class="box-title">Images</h3>
            </div>
            </div>

            <div class="col-sm-6" style="text-align: center;">
              <form method="GET" action="/searched-images">
                <input type="search" placeholder="Search Here" name="keyword" class="form-group" style="padding: 8px; margin-top: 2%; width: 50%">
                <button type="submit" name="submit" value="Search" class="btn btn-primary" style="padding: 9px 30px; margin-top: -5px; ">Search</button>
              </form>
            </div>
          </div>

            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Image</th>
                  <th>Image Type</th>                 
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $c=0; ?>
                  @if(!empty($images))
                  <?php $i=1; ?>
                  @foreach($images as $image)
                  <?php $c++; ?>
                <tr>
                  <td>{{$i++}}</td>
                  <td><img src="/banner-images/{{$image->image_url}}" style="width: 100px; height: 100px"></td>
                  <td>{{$image->image_category}}
                  </td>
                  <td>{{$image->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-image/{{$image->id}}" style="color: #fff">EDIT</a></button>
                     <a href="/admin/images-list/{{ $image->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
                    {{-- <button type="submit" class="btn btn-danger">DELETE</button> --}}
                  </td>
                </tr>
                @endforeach
                @endif
                
                </tbody>
                
              </table>

              @if($c==0)
            <h3 style="text-align: center;padding: 5%"> No Result Found</h3>
            @endif

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