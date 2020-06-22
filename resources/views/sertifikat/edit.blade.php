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
            <form class="form-horizontal" method="post" action="{{route('update_sertifikat', $data->id)}}" enctype="multipart/form-data">
             {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
                <label class="col-md-12">Title 1</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_1" required="" value="{{ $data->title_1 }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 2</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_2" required="" value="{{$data->title_2}}">
                </div>
            </div>

             <div class="form-group">
                <label class="col-md-12">Title 3</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_3" required="" value="{{$data->title_3}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 4</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_4" required="" value="{{$data->title_4}}">
                </div>
           </div>

            <div class="form-group">
                <label class="col-md-12">Title 5</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_5" required="" value="{{$data->title_5}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Title 6</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title_6" required="" value="{{$data->title_6}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12">Image</label>
               <div class="col-md-12">
               <img width="200" height="200" @if($data->image) src="{{ asset('public/images/sertifikat/'.$data->image) }}" @endif />
                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="cover" value="{{$data->image}}">
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
                return false
            })
        })
        </script>
