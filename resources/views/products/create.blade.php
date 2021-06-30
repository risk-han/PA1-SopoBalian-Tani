@extends('layouts.master')
@section('content')

<div class="container">
<div class="row">
@can('buy-product')
        <div class="col-md-8">
        <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
        </div>
    </div>
</div>
@endcan
@can('manage-info')
        <div class="col-md-8">
        <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
        </div>
    </div>
</div>
@endcan
@can('manage-product')
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Hasil Tani</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
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
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok</strong>
                <input type="number" class="form-control" name="stok" placeholder="Stok">
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