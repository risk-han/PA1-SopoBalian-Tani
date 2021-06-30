@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
                @can('buy-product')
                    <h4>Selamat Datang, distributor</h4>
                @endcan
                @can('manage-product')
                    <h4>Selamat Datang, Petani</h4>
                @endcan
                @can('manage-info')
                    <h4>Selamat Datang, Admin</h4>
                @endcan

                <div id="about" class="about row justify-content-center">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about-box">
                        <h2>Tentang Kami</h2>
                        <p>Kelompok Tani Sopo Balian merupakan kelompok tani yang berada di Kabupaten Simalungun Kecamatan Girsang Sipangan Bolon. Sistem Informasi ini dikembangkan untuk mempermudah para petani dalam proses pendistribusian hasil tani dengan lebih mudah dan jangkauan yang lebih luas.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
                    <div class="about-box_img">
                    <figure><img height="450px" src="{{ asset('image/home.jpg') }}" alt="#" /></figure>
                    </div>
                    </div>
                </div>
                </div>


            </div>

            <div class="container">
                <h2>INFORMASI TERBARU</h2>
                @foreach($infos as $i)
                <a href="{{ route('infos.show', $i->id) }}">
                <div class="card mt-1">
                    <div class="card-header">
                    Ditulis oleh Admin
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $i->title }}</h5></a>
                        <p class="card-text"> {{Str::limit($i->detail, 250)}} </p>
                        <p class="card-text"><img src="/image/{{$i->image }}" width="800px" alt=""></a></p>
                        <a href="{{ route('infos.show', $i->id) }}" class="btn-sm btn btn-info">Lihat selengkapnya</a>
                    </div>
                    
                @endforeach
                </div>

            @if (Route::has('login'))
            <div class="latest-products">
                <div class="container mt-5">
                    <div class="row">
                    <div class="col-md-12 mt-5">
                    <h2>HASIL TANI TERBARU</h2>
                    <div class="float-right">
                        <div class="section-heading">
                        <a href="{{route('hasiltani.index') }}"></a>
                    </div>
                    </div>
                    </div>
                    @foreach($product as $p)
                    <div class="col-md-4">
                        <div class="product-item">
                        <a href="{{ route('hasiltani.index') }}">
                        <img src="/image/{{$p->image }}" alt=""></a>
                        <div class="down-content">
                        <h4>{{$p->name }}</h4>
                            <P>{{$p->created_at->diffForHumans() }}</P>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>DISKUSI TERBARU</h2>
                @foreach($posts as $p)
                <a href="{{ route('post.show', $p->id) }}">
                <div class="card mt-1">
                    <div class="card-header">
                    Ditulis oleh {{$p->user->name}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5></a>
                        <p class="card-text"> {{ Str::limit($p->content, 100)}} </p>
                        
                        @can('manage-product', 'buy-product')
                        <a href="{{ route('post.show', $p->id) }}" class="btn-sm btn btn-info">Tambah Jawaban</a>
                        @endcan
                        @can('manage-info')
                        <form action="{{ route('post.destroy', $p->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('post.show',$p->id) }}"><i class="icon-eye"></i> Lihat</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                        </form>
                        @endcan
                    </div>
                </div>
                @endforeach
                </div>          
            </div>
            @endif
        </div>
    </div>
</div>
@endsection