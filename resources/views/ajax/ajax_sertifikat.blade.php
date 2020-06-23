     <meta name="csrf-token" content="{{ csrf_token() }}">
     <h4 class="box-title m-b-0"></h4>
        <div class="table-responsive " >
           <table class="table color-bordered-table muted-bordered-table">
             <thead>
            <tr style="">
                <th>No</th>
                <th>Title 1</th>
                <th>Title 2</th>
                <th>Title 3</th>
                <th>Title 4</th>
                <th>Title 5</th>
                <th>Title 6</th>
                <th>Image</th>
                <th>Status</th>
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
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->title_1}}</td>
                        <td>{{$data->title_2}}</td>
                        <td>{{$data->title_3}}</td>
                        <td>{{$data->title_4}}</td>
                        <td>{{$data->title_5}}</td>
                        <td>{{$data->title_6}}</td>
                        <td style="width: 10%;" >
                          @if($data->image)
                            <img src="{{url('public/images/sertifikat/'. $data->image)}}" alt="image" style=" width: 50%;" />
                          @else
                            <img src="{{url('public/images/sertifikat/default.png')}}" alt="image" style=" width: 50%;" />
                          @endif
                          </td>
                        <td>{{$data->status}}</td>
                       <td>
                        <a href="{{ route('edit_sertifikat', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('delete_sertifikat', $data->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
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

