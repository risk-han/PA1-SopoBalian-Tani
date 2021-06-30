@extends('layouts.master')

@section('content')


@can('buy-product')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>Anda tidak Mempunyai akses ke halaman ini</h4>
        </div>
    </div>
</div>
@endcan
@can('manage-product')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.index') }}"><i class="icon-arrow-left1"></i> Kembali</a>
            </div>
            <div class="pull-left mt-5">
                <h4>Detail {{$product->name}}</h4>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok</strong>
                {{ $product->stok }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar</strong><br>
                <img src="/image/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
</div>
@endcan
@endsection