@extends('layouts.master')

@section('content')


<div class="container mt-5">
     <h3>Daftar Hasil Tani Sopo Balian</h3>
    <div class="row">
        <div class="col-md-4">
            <div>
                <img width="420" height="220" src="/image/{{ $hasil->image }}" alt="$hasil->name" />
            </div>
        </div>
        <div class="col-md-8">
            <h4>
                {{$hasil->name}}
            </h4>
            <p>
                {{$hasil->detail}}
            </p>
            <p>
                Stok    {{$hasil->stok}} kg
            </p>
        </div>

        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table table-bordered mt-5">
               
                <div class="panel-heading mt-5">
                    <h4>Daftar Tawaran yang sudah diajukan</h4>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <tr class="table table-info">
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Pesan</th>
                    <th>Waktu</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($hasil->negos()->get() as $nego)
                <tr>
                    <td>{{ $nego->user->name }}</td>
                    <td>Rp {{ $nego->nominal}}</td>
                    <td>{{ $nego->pesan}}</td>
                    <td>{{ $nego->created_at->diffForHumans() }}</td>
                    <td><a href="https://wa.me/{{$nego->user->notelp}}" class="btn btn-info">Chat ke Whatsapp</a></td>
                    <td><a href=""></a></td>
                </tr>
                @endforeach
                </table>
                @can('buy-product')
                <div class="panel-heading mt-5">
                    <h4>Berikan Tawaran Negosiasi Anda</h4>
                </div>
                <div class="panel-body"> 
                    <form action="{{route('hasiltani.nego.store', $hasil)}}" method="post" class="form-horizontal">
                    @csrf
                        <h4>Rp. <input type="number" name="nominal" class="form-control" placeholder="Jatuhkan Harga yang ingin anda tawarkan"></h4>
                        <textarea name="pesan" id="" cols="30" rows="5" class="form-control" placeholder="Tambahkan Pesan"></textarea>
                        <input type="submit" class="btn btn-primary mt-3" value="Tawar">
                    </form>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>

@endsection