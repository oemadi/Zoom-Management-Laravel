@extends('layouts.dashboard')
@section('content')
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">List Meeting</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Dashboard</a></li>
          <li class="active">List Meeting </li>
        </ol>
      </div>
    </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="white-box" >

            <div class="box-body">
             @if (Session::has('gagal'))
              <div class="alert alert-danger alert-dismissable">{{ Session::get('gagal') }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
             @endif
            </div>

            <div class="box-body">
             @if (Session::has('succes'))
              <div class="alert alert-success alert-dismissable">{{ Session::get('succes') }}
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               </div>
             @endif
            </div>

            <div class="row">
              <div class="col-lg-4">
                  <br>
                  <label>show</label>
                  <select name="myTable_length" aria-controls="myTable" class="" id="cek">
                      <option value="20" selected="">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                  </select><label>&nbsp;entries</label>
              </div>

              <div class="col-lg-4">
                <label>Pilih tanggal <code>(tanggal awal dan tanggal akhir)</code></label>
                <div class="input-daterange input-group" id="date-range">
                  <input type="text" autocomplete="off" class="form-control" name="start" />
                  <span class="input-group-addon bg-info b-0 text-white">To</span>
                  <input type="text" autocomplete="off" class="form-control" name="end" />
                </div>
            </div>

            <div class="col-lg-4">
              <form role="search" autocomplete="off">
              {{ csrf_field() }}
                <div class="col-md-1">
                  <div class="form-group">
                    <label for="tanggal">Search</label>
                    <span class="input-group">
                      <button type="button" id="" class="btn waves-effect btn-sm waves-light btn-success page"><i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </form>
              </div>
             </div>
           <div id="table"></div>
            </div>
        </div>
      </div>

 <img style="position:absolute; display: none ;width:3%; left:50%; top:48%; z-index:100000;" src="{{url('')}}/public/images/loader.gif"  id="loader">
<script src="{{url('')}}/public/plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    getMain(1);
    function getMain(page) {
        $('#loader').show();
        var limit= $('#cek').val();
        var start_date = $('[name="start"]').val();
        var end_date = $('[name="end"]').val();

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            type: 'POST',
            url : "{{route('meeting_list')}}",
            data: {
                 start_date : start_date,
                 end_date : end_date,
                 page: page,
                 limit : limit,
                _token: '{{csrf_token()}}'

            }
        }).done(function (data) {
            $('#loader').hide();
            $("#table").html(data.view);
            var starhalaman= 1;
              $.ajax({
                  type: 'POST',
                  url : "{{route('meeting_list')}}",
                  data: {
                       halaman : starhalaman,
                       start_date : start_date,
                       end_date : end_date,
                       page: page,
                       limit : limit,
                      _token: '{{csrf_token()}}'

                  }
              }).done(function (data) {
                  $('#loader').hide();
                  $("#paging").html(data.view2);
              })

        })

    }

    $(document).ready(function() {

      //page click
        $('.page').click(function(){
        $('#loader').show();
            getMain(1)

        });
      //limit
       $('#cek').on('change', function(){
        var limit= $('#cek').val();
          $('#loader').show();
          getMain(1);
         });
    //date
     $('#date-range').datepicker({
      toggleActive: true,
      format: 'dd/mm/yyyy'
      });

   });
</script>

@endsection
