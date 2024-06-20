@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Posts</h1>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="post image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection