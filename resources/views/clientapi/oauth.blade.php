@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <?php
                   $url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".env('client_id_zoom')."&redirect_uri=".env('Redirect_URL_OAut_zoom');
                        ?>
                    <a href="<?php echo $url; ?>">GET OAUTH</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
