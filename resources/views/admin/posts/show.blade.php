@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    @if ($post->image)
        <img src="{{ $post->image }}" alt="post image" style="max-width: 100%;">
    @endif
    <h2>{{ $post->body }}</h2>
    <h2><strong>Category:</strong> {{ optional($post->category)->name }}</h2>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
</div>
@endsection