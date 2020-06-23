     <meta name="csrf-token" content="{{ csrf_token() }}">
     <h4 class="box-title m-b-0"></h4>
        <div class="table-responsive " >
           <table class="table color-bordered-table muted-bordered-table">
             <thead>
            <tr style="">
                <th>No</th>
                <th>Nama </th>
                <th>Email</th>
                <th>Nik</th>
                <th>Jabatan</th>
                <th>Instansi</th>
                <th>CreatedAt</th>
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
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->nik}}</td>
                        <td>{{$data->jabatan}}</td>
                        <td>{{$data->instansi}}</td>
                        <td>{{$data->created_at}}</td>

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

