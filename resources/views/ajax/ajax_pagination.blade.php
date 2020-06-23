


 <ul class="pagination" id="pagination">
            <?php $pages = $opt->pages;
            ?>
            @if($pages>1)
                @if($page == 1)

                    <li class="disabled"><span>&#8810;</span></li>
                @else
                    <li class="" ><a href="" onclick="getMain({{$page-1}})">&#8810;</a></li>
                @endif

                @if(($page-3)>0)
                    @if($page == 1)
                        <li class="active"><span>1</span></li>
                    @else
                        <li><a href="#" onclick="getMain(1)">1</a></li>
                    @endif
                @endif
                @if(($page-3)>1)
                    <li class="disabled"><span>...</span></li>
                @endif

                @for($i=($page-2); $i<=($page+2); $i++)
                    @if($i<1)
                        @continue
                    @endif
                    @if($i>$pages)
                        @break
                    @endif
                    @if($page == $i)
                        <li class="active"><span>{{$page}}</span></li>
                    @else
                        <li><a href="#" onclick="getMain({{$i}})">{{$i}}</a></li>
                    @endif
                @endfor

                @if(($pages-($page+2))>1)
                    <li class="disabled"><span>...</span></li>
                @endif
                @if(($pages-($page+2))>0)
                    @if($page == $pages)
                        <li class="active"><span>{{$page}}</span>{{$pages}}</li>
                    @else
                        <li><a href="#" onclick="getMain({{$pages}})">{{$pages}}</a></li>
                    @endif
                @endif

                @if($page < $pages)
                    <li class="" ><a href="#" onclick="getMain({{$page+1}})">&#8811;</a></li>
                @else
                    <li class="disabled"><span>&#8811;</span></li>
                @endif
            @endif
        </ul>
