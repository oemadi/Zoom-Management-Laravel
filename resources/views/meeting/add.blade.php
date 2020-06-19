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
            </div>
        </div>
      </div>

        <div class="row">
        <div class="col-sm-6">
          <div class="white-box">
            <form class="form-horizontal" method="post" action="http://localhost/spp/guru/save">
              <div class="form-group">
                <label class="col-md-12">Nama</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="nama_guru">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-12">Keterangan</label>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="keterangan">
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
