@extends('admin.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pages
        <small>Static Pages Contents</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">List</a></li>
        <li class="active">Pages Contents</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">               
              <div class="box-header">
                <h3 class="box-title">Contents</h3>
              </div>            
          

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Page</th>                 
                  <th>Content</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $c=0; ?>
                  @if(!empty($pages))
                  <?php $i=1; ?>
                  @foreach($pages as $page)
                  <?php $c++; ?>
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$page->page_name}}</td>                  
                  <td><?php echo substr($page->content,0,100); ?>...</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-content/{{$page->id}}" style="color: #fff">EDIT</a></button>
                    
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