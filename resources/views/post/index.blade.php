@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
            <div class="list-group">
                <h3 style="text-align: center;">FORUM DISKUSI PETANI</h3>
            </div>
            <div>
                <a href="{{ route('post.create') }}"></a>
                <a class="btn btn-info float-right" href="{{ route('post.create') }}">Tulis Diskusi</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
        @foreach($posts as $p)
        <div class="card mt-5">
            <div class="card-header">
            Ditulis oleh {{$p->user->name}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $p->title }}</h5>
                <p class="card-text"> {{Str::limit($p->content, 150)}} </p>
                @can('add-comment')
                <a href="{{ route('post.show', $p->id) }}" class="btn-sm btn btn-info">Tambah Komentar</a>
                @endcan
                @if(auth()->id() === $p->user_id)
                <a href="{{ route('post.edit', $p->id) }}" class="btn-sm btn btn-info">Edit</a>
                <form action="{{ route('post.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2"><i class="icon-trash"></i></button>
                </form>
                @endif
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

@endsection