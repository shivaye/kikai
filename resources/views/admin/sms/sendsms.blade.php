@extends('admin.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Send SMS
      <small>Send SMS</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">SMS</li>
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
          {{-- <a href="/events-list" style="padding: 2%"><button type="submit" class="btn btn-primary" style="padding: 0.5% 3%">Back</button> </a><br><br> --}}



          <div class="box-header">
            <h3 class="box-title">Enter details Here
              {{-- <small>Simple and fast</small> --}}
            </h3>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad" >
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6" style="text-align: center;">
                <form action="/api/admin/send-sms" method="POST">                                       
                                 
                
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="phone" class="form-control" name="mobile" id="mobile">  
                </div>

                <div class="form-group">
                  <label for="sms">SMS</label>
                  <textarea class="form-control" name="sms" id="sms"> </textarea> 
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>


            </form>
              </div>
              <div class="col-sm-3"></div>
            </div>
            
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

@section('script')

<script>
  $('#state').on('change',function(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var state = $('#state').val();
    
    $.ajax({
      type: 'POST',
      url: '/admin/ajaxData',
      data: {_token: CSRF_TOKEN, state_id : state },
      success:function(data){
        $('#city').html(data);
      }
    });
  });

</script>


@endsection