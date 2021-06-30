@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('post.index') }}">Kembali</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mt-3">{{$post->title}}</h4>
                    <p>Kategori : {{$post->category->name}}</p>
                </div>
                <div class="panel-body">
                    <p>{{$post->created_at->diffForHumans()}}</p>
                </div>
                <div class="panel-body">
                    <p>{{$post->content}}</p>
                    <p>Ditulis oleh {{$post->user->name }}</p>
                </div>
                <div class="panel-body">
                    {{$post->categories}}
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="mt-3">Komentar</h5>
                    @foreach($post->comments()->get() as $comment)
                        <div class="panel-body"> 
                            <h5>{{ $comment->user->name }} - {{$comment->created_at->diffForHumans()}}</h5>

                            <p>{{ $comment->message}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="panel-body"> 
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <form action="{{ route('post.comment.store', $post)  }}" class="form-horizontal" method="POST">
                    @csrf
                            <textarea required name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan Jawaban Anda untuk membantu {{$post->user->name }}"></textarea>
                            <input type="submit" class="btn btn-primary mt-3" value="Komentar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection