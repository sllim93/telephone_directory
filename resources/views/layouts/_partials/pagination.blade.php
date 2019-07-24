<div class="row">
    <div class="col-md-12">
        <span>
            {{trans('string.Showing :start to :end of :total records', [
                'start' => (($row['currentPage'] - 1 ) * $row['itemsPerPage']) + 1 , 
                'end' => (($row['currentPage'] - 1 ) * $row['itemsPerPage']) + count($data),
                'total' => $row['totalCount']
            ])}}
        </span>
        <div class="pull-right margin-bottom-20">
            <ul class="pagination">
                <li><a href="{{route($routename, array_merge($filters, ['page' => 1]))}}">«</a></li>
                @if($row['currentPage'] == 1)
                    @for($i=1; $i<=$row['totalPages'] && $i<=($row['currentPage'] + 4); $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}" >
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                @elseif($row['currentPage'] == 2)
                    @for($i=($row['currentPage']-1); $i>=1 && $i<($row['currentPage']); $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                    <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                        <a href="{{route($routename, array_merge($filters, ['page' => $row['currentPage']]))}}">
                            {{$row['currentPage']}}
                        </a>
                    </li>
                    @for($i=($row['currentPage']+1); $i<=$row['totalPages'] && $i<=($row['currentPage'] + 3); $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                @elseif($row['currentPage'] == ($row['totalPages']-1))
                    @for($i=($row['currentPage']-3); $i<=$row['totalPages']; $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}" class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                @elseif($row['currentPage'] == $row['totalPages'])
                    @for($i=($row['currentPage']-4); $i<=$row['totalPages']; $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}" class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                @else
                    @for($i=($row['currentPage']-2); $i<($row['currentPage']); $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}" class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                    <li class="active">
                        <a href="{{route($routename, array_merge($filters, ['page' => $row['currentPage']]))}}">
                            {{$row['currentPage']}}
                        </a>
                    </li>
                    @for($i=($row['currentPage']+1); $i<=$row['totalPages'] && $i<=($row['currentPage'] + 2); $i++)
                        @if($i>0)
                            <li class="{{$row['currentPage'] == $i ? "active" : ""}}">
                                <a href="{{route($routename, array_merge($filters, ['page' => $i]))}}">
                                    {{$i}}
                                </a>
                            </li>
                        @endif
                    @endfor
                @endif
                <li>
                    <a href="{{route($routename, array_merge($filters, ['page' => $row['totalPages']]))}}">»</a>
                </li>
            </ul>
        </div>
    </div>
</div>