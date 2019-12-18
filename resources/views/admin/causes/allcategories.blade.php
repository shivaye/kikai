@extends('admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Cause Categories
      <small>(All Categories)</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">Categories List</li>
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


          <div class="row">
            <div class="col-sm-6">    
              
              <a href="/add-category" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 10px">Add Category</button> </a>
            </div>

            <div class="col-sm-6" style="text-align: center;">
              <form method="GET" action="/searched-categories">
                <input type="search" placeholder="Search Here" name="keyword" class="form-group" style="padding: 8px; margin-top: 2%; width: 50%">
                <button type="submit" name="submit" value="Search" class="btn btn-primary" style="padding: 9px 30px; margin-top: -5px; ">Search</button>
              </form>
            </div>
          </div>

          

          <div class="box-header">
            <h3 class="box-title">All Categories</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Category</th>                 
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $c=0; ?>
                @if(!empty($categories))
                <?php $i=1; ?>
                @foreach($categories as $category)
                <?php $c++; ?>
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$category->name}}</td>                  
                  <td>{{$category->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-category/{{$category->id}}" style="color: #fff">EDIT</a></button>
                    <a href="/admin/categories-list/{{ $category->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
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