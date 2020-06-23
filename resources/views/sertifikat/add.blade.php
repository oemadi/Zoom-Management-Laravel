@extends('layouts.dashboard')
@section('content')
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Sertifikat</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Dashboard</a></li>
          <li class="active">Create Sertifikat </li>
        </ol>
      </div>
    </div>
        <div class="row">
        <div class="col-sm-6">
          <div class="white-box">
            <form class="form-horizontal" method="post" action="{{route('store_sertifikat')}}" enctype="multipart/form-data">
             {{ csrf_field() }}

            <div class="form-group">
                <label class="col-md-12">Title 1</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_1" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 2</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_2" required="">
                </div>
            </div>

             <div class="form-group">
                <label class="col-md-12">Title 3</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_3" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 4</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_4" required="">
                </div>
           </div>

            <div class="form-group">
                <label class="col-md-12">Title 5</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_5" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 6</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_6" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 6</label>
               <div class="col-md-12">
                <img width="200" height="200" />
                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="cover">
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

@endsection
<script src="{{url('')}}/public/plugins/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
