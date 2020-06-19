@extends('layouts.dashboard')
@section('content')
    <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"></h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
          <li><a href="#">Dashboard</a></li>
          <li class="active">Oauth </li>
        </ol>
      </div>
    </div>

      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <?php
                      $url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".env('client_id_zoom')."&redirect_uri=".env('Redirect_URL_OAut_zoom');
                    ?>
                    <button class="btn btn-info waves-effect waves-light m-r-10"><a href="<?php echo $url; ?>">GET OAUTH</a></button>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

