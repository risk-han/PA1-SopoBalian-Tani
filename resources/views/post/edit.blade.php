@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="col">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Mohon maaf </strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <div class="list-group">
                        <h4>Edit Forum Diskusi</h4>
                </div>
            </div>
        </div>
        <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Diskusi" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Kategori Diskusi</label>
                <select name="category_id" id="" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <textarea class="form-control" name="content" style="height: 250px;" placeholder="Isi Sesuatu yang anda ingin diskusikan">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-lg btn-primary" type="submit" value="Edit">
            </div>
        </form>
    </div>
</div>

@endsection