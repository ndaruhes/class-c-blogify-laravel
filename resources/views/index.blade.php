@extends('layouts.app')

@section('title', 'Home | Blogify')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-3">
                    <div class="col-md-12 bg-light rounded p-3 shadow-sm">
                        <img src="{{ asset('storage/blogs/' . $blog->thumbnail) }}" class="w-100">
                        <h4>{{ $blog->title }}</h4>
                        <span class="text-muted">{{ $blog->user->username }}</span>
                        <span class="badge bg-info">{{ $blog->category->title }}</span>
                        <p>{{ $blog->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection