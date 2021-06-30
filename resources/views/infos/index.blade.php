@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="">
            @can('buy-product')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            @can('manage-product')
            <h3 style="text-align: center;" class="mt-4">ANDA TIDAK MEMPUNYAI AKSES KE HALAMAN INI</h3>
            @endcan
            </div>
            <div class="pull-left">
            @can('manage-info')
                <h3 style="text-align: center;" class="mt-4">DAFTAR INFORMASI</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('infos.create') }}"><i class="icon-plus"></i> Tambah Informasi</a>
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
            <th>Judul</th>
            <th>Detail</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($info as $if)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $if->title }}</td>
            <td>{{ $if->detail }}</td>
            <td><img src="/image/{{ $if->image }}" width="100px"></td>
            <td>
                <form action="{{ route('infos.destroy',$if->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('infos.show',$if->id) }}"><i class="icon-eye"></i> Lihat</a>
      
                    <a class="btn btn-primary" href="{{ route('infos.edit',$if->id) }}"><i class="icon-pencil"></i> Ubah</a>
     
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

    
    {!! $info->links() !!}

@endsection