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
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Judul</label>
                <input required type="text" class="form-control" name="title" placeholder="Judul Diskusi">
            </div>
            <div class="form-group">
                <label>Kategori Diskusi</label>
                <select required name="category_id" id="" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <textarea required class="form-control" name="content" style="height: 250px;" placeholder="Isi Sesuatu yang anda ingin diskusikan"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-lg btn-primary" type="submit" value="Kirim">
            </div>
        </form>
    </div>
</div>

@endsection
