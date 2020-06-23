     <meta name="csrf-token" content="{{ csrf_token() }}">
     <h4 class="box-title m-b-0"></h4>
        <div class="table-responsive " >
           <table class="table color-bordered-table muted-bordered-table">
             <thead>
            <tr style="">
                <th>No</th>
                <th>Deskripsi </th>
                <th>Mulai</th>
                <th>IDMeeting</th>
                <th>CreatedAt</th>
                <th>Aksi</th>
            </tr>
            </thead>
            @if(count($data) > 0)
                <tbody id="load">
                <?php

                $pagemin1 =$page-1;
                $no ='';
                $total =0;
                if($page == 1){ $no = 1; }else{ $no = $pagemin1 *$limit+1; } ?>
                 @foreach($data as $data)
                    @php $arr1 = explode('/',$data->url_event);
                    $ar1 = $arr1[4];
                    $arr2 = explode('?',$ar1);
                    $ar2 = $arr2[0];
                    $id_meeting= $ar2;
                    @endphp
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>{{$data->mulai}}</td>
                        <td>{{$id_meeting}}</td>
                        <td>{{$data->created_at}}</td>
                       <td><a href="{{ url('delete/meeting', $data->id) }}" class="btn btn-info">Delete</a></td>
                     </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="12">
                            <div style="display: table;height: 250px;width: 100%;">
                                <h3 style="display: table-cell;vertical-align: middle;text-align: center;" class="hobby_travel-color">Data Kosong!</h3>
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div id="paging" class="text-center" ></div>

