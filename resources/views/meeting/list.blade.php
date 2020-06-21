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
                    $arr1 = explode('/',$key->url_event);
                    $ar1 = $arr1[4];
                    $arr2 = explode('?',$ar1);
                    $ar2 = $arr2[0];
                    $id_meeting= $ar2;
                    //substr("https://us02web.zoom.us/j/86407017964?pwd=a0RaRzU4UndldjhNZmNoT2JKajJPZz09")
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$key->mulai}}</td>
                        <td>{{$key->deskripsi}}</td>
                        <td>{{$id_meeting}}</td>
                        <td><a href="{{ url('delete/meeting', $key->id) }}" class="btn btn-info">Delete</a></td>
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
