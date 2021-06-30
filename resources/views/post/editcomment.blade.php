@extends('layouts.master')

@section('content')

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

@endsection