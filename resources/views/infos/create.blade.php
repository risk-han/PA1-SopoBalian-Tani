@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
            @can('buy-product')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            @can('manage-product')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            </div>
            <div class="pull-left">
    @can('manage-info')
        <div class="pull-left">
            <h2>Tambah Informasi Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('infos.index') }}"> Back</a>
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
     
<form action="{{ route('infos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul</strong>
                <input type="text" name="title" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
</div>
@endcan
@endsection