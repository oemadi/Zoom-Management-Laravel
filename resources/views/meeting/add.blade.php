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
                  <input type="text" class="form-control" name="topic">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12">Mulai</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="start_time" value="2020-06-18T08:30:00">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Durasi</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="duration">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="password">
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
