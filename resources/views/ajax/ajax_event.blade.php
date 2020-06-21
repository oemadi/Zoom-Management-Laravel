     <meta name="csrf-token" content="{{ csrf_token() }}">
     <h4 class="box-title m-b-0"></h4>
        <div class="table-responsive " >
           <table class="table color-bordered-table muted-bordered-table">
             <thead>
            <tr style="">
                <th>No</th>
                <th scope="col">Mulai</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Meeting ID</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            @if(count($data) > 0)
                <tbody id="load">
                <?php

                $pagemin1 =$page-1;
                $no ='';
                $total =0;
                if($page == 1){ $no = 1; }else{ $no = $pagemin1 *$limit+1; } ?>
                 @foreach($data as $key)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$key->mulai}}</td>
                        <td>{{$key->deskripsi}}</td>
                        <td>{{$key->id_meeting}}</td>
                        <td>{{$key->password}}</td>
                        <td><a target="_blank" href="{{ url($key->url_event) }}" class="btn btn-info">Join</a></td>
                     </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="12">
                            <div style="display: table;height: 250px;width: 100%;">
                                <h3 style="display: table-cell;vertical-align: middle;text-align: center;" class="hobby_travel-color">Not Found! </h3>
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div id="paging" class="text-center" ></div>

