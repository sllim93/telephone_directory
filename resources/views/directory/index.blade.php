@extends('layouts.master')

@section('title', trans('string.Directory List'))

@section('content')
<div class="m-content">
    @include('layouts._partials.alert')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <form class="form-inline" method="get" action="{{route('directory.index')}}">
                    <div class="form-group m-form__group mb-0">
                        <div class="input-group">
                            {!! Form::select('type', $types, $where, ['class'=>'form-control', 'placeholder'=> 'All'])!!}
                            {!! Form::select('where', $searches, $where, ['class'=>'form-control', 'placeholder'=> 'Please select'])!!}
                            <input type="text" name="value" class="form-control" placeholder="Search" value="{{$value}}">
                            <div class="input-group-append">
                                <button class="btn btn-primary m-0" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="m-section">
                <div class="m-section__content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-right">#</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Entity Name</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(sizeof($directories) != 0)
                                    {!!""; $count = (($directories->currentPage() - 1 ) * $directories->perPage()) + 1 !!}
                                    @foreach($directories as $dir)
                                    <tr>
                                        <td class="text-right"> {{$count++}} </td>
                                        <td class="text-center"> {{$dir->category}} </td>
                                        <td class="text-center"> {{$dir->name}} </td>
                                        <td class="text-center"> {{$dir->phone}} </td>
                                        <td class="text-center">
                                            <span class="m-badge m-badge--{{$dir->getStatusLabel()}} m-badge--wide"> {{$dir->getStatus()}} </span> 
                                        </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            No records available        
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        @if(sizeof($directories) > 0)
                            <span class="pull-left margin-top-10">
                                Showing {{ (($directories->currentPage() - 1 ) * $directories->perPage()) + 1 }} to {{(($directories->currentPage() - 1 ) * $directories->perPage()) + $directories->count()}} of {{$directories->total()}} records
                            </span>
                            <div class="pull-right">
                                {!! $directories->links('pagination::bootstrap-4') !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page_style')
@stop

@section('page_script')
@stop

@section('init_script')
<script>
</script>
@stop