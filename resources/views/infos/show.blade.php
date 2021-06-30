@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('infos.index') }}"><i class="icon-arrow-left1"></i> Kembali</a>
            </div>
            <div class="pull-left mt-5">
                <h4>Detail {{$info->name}}</h4>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                {{ $info->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                {{ $info->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                <img src="/image/{{ $info->image }}" width="500px">
            </div>
        </div>
    </div>
</div>
@endsection