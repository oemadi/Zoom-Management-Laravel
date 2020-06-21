@extends('layouts.dashboard')
@section('content')
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Meeting</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Dashboard</a></li>
          <li class="active">Create Meeting </li>
        </ol>
      </div>
    </div>
        <div class="row">
        <div class="col-sm-6">
          <div class="white-box">
            <form class="form-horizontal" method="post" action="{{route('store_create')}}">
             {{ csrf_field() }}

              <div class="form-group">
                <label class="col-md-12">Deskripsi</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="topic" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12">Tanggal</label>
                <div class="col-md-12">
                <div class="input-group">
                 <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy" name="tgl" required="">
                    <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
              </div>
              </div>

              <div class="form-group">
              <div class="col-lg-6">
                <label class="col-md-12">Jam</label>
                <div class="input-group clockpicker">
                  <input type="text" class="form-control" name="jam" required="">
                  <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> </div>
                </div>
              </div>


              <div class="form-group">
                <label class="col-md-12">Durasi</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="duration" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="password" required="">
                </div>
              </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                   <button type="button" class="btn btn-default">Cancel</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{url('')}}/public/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>

<script type="text/javascript">
    jQuery(function($) {
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    })

});

</script>
<script type="text/javascript">

    $(document).ready(function() {
    //date
     $('.mydatepicker').datepicker({
      toggleActive: true,
      format: 'dd/mm/yyyy'
      });

   });

</script>
@endsection
