@extends('layouts.dashboard')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">List Join Event </h4>
        </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">List Join Event </li>
                </ol>
            </div>
    </div>
        <div class="row">
        <div class="col-sm-12">
          <div class="white-box">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Meeting ID</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data as $key) {
          
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$key->mulai}}</td>
                        <td>{{$key->deskripsi}}</td>
                        <td>{{$key->id_meeting}}</td>
                        <td><a href="{{ url('join/event', $key->id) }}" class="btn btn-info">Join</a></td>
                    </tr>
                    
                   <?php
                   }
                   ?>

                   
                       
                    </tbody>
                    </table>
          </div>
        </div>
      </div>

@endsection
