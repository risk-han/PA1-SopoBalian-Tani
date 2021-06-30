@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: right;" class="pull-right mt-2">
                <a class="btn btn-info" href="{{ route('infos.index') }}"><i class="icon-arrow-left1"></i> Kembali</a>
            </div>
            <div class="pull-left">
                <h2>Edit {{$info->title}}</h2>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('infos.update', $info->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul</strong>
                <input type="text" name="title" class="form-control" placeholder="Name" value="{{ $info->title }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail</strong>
                <textarea class="form-control" style="height:350px" name="detail" placeholder="Detail" value="">{{ $info->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img style="margin-top: 20px;" src="/image/{{ $info->image }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-lg btn-primary">Ubah</button>
        </div>
    </div>
</form>
</div>
@endsection