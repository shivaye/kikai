@extends('admin.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Us List
        <small>Submitted Contact Us Forms data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">List</a></li>
        <li class="active">Contact Us List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Us</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Email</th>                 
                  <th>Phone</th>                 
                  <th>Subject</th>                 
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if(!empty($contacts))
                  <?php $i=1; ?>
                  @foreach($contacts as $contact)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$contact->name}}</td>                  
                  <td>{{$contact->email}}</td>                  
                  <td>{{$contact->phone}}</td>                  
                  <td>{{$contact->subject}}</td>                  
                  <td>{{$contact->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-contact/{{$contact->id}}" style="color: #fff">EDIT</a></button>
                     <a href="/admin/contacts-list/{{ $contact->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
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