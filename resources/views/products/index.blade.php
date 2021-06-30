@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="pull-left">
            @can('buy-product')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            @can('manage-info')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            @can('manage-product')
                <h3 style="text-align: center;" class="mt-4">DAFTAR HASIL TANI</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.create') }}"><i class="icon-plus"></i> Tambah Hasil Tani</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
     
    <table class="table table-bordered mt-4">
        <tr class="table table-info">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="icon-eye"></i> Lihat</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="icon-pencil"></i> Ubah</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endcan
</div>
    
    {!! $products->links() !!}
        
@endsection