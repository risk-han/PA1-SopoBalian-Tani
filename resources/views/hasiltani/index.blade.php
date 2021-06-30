@extends('layouts.master')

@section('content')


<div class="container mt-5">
     <h3>Daftar Hasil Tani Sopo Balian</h3>
    @foreach($hasil as $h)
    <div class="row">
        <div class="col-md-4 mt-5">
            <div>
                <img width="420" height="220" src="/image/{{ $h->image }}" alt="$h->name" />
            </div>
        </div>
        <div class="col-md-8">
            <h4>
                {{$h->name}}
            </h4>
            <p>
                {{$h->detail}}
            </p>
            <p>
                Stok    {{$h->stok}} kg
            </p>
        </div>
        @can('buy-product')
        <div class="col-md-8">
        <a class="btn btn-info mt-2" href="{{ route('hasiltani.show', $h->id) }}">Klik untuk Nego</a>
        </div>
        @endcan
        @can('manage-product')
        <div class="col-md-8">
        <a class="btn btn-info mt-2" href="{{ route('hasiltani.show', $h->id) }}">Lihat Hasil Nego</a>
        </div>
        @endcan
    </div>
    @endforeach
</div>

@endsection