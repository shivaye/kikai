<?php
use App\State;
use App\City;
?>

@extends('admin.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      All Events
      <small>Events that are listed</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">Events List</li>
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
              <div class="box-header">
                <h3 class="box-title">Events</h3>
              </div>
            </div>

            <div class="col-sm-6" style="text-align: center;">
              <form method="GET" action="/searched-events">
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
                  <th>Title</th>
                  <th>Image</th>
                  <th>Date</th>                  
                  <th>Timing</th>                  
                  <th>Location</th>                  
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $c=0; ?>
                @if(!empty($events))
                <?php $i=1; ?>
                @foreach($events as $event)
                <?php $c++; ?>
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$event->title}}
                  </td>
                  <td><img src="/events-img/{{$event->image_url}}" style="width: 100px; height: 100px;"></td>
                  <td>{{$event->date}}</td>
                  <td>{{$event->timing}}</td>
                  <td>
                    <?php
                    $state = State::where('id',$event->state)->first();
                    $city = City::where('id',$event->city)->first();
                    ?>
                    {{$city->city}},{{$state->state}}
                  </td>
                  <td>{{$event->status}}</td>
                  <td>
                    <button class="btn btn-primary"><a href="/admin/edit-event/{{$event->id}}" style="color: #fff">EDIT</a></button>
                    <a href="/admin/events-list/{{ $event->id }}"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></a>
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