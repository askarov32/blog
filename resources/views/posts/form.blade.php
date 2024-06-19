@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($post) ? 'Edit' : 'Create' }} Post</h1>

    @if (isset($post))
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
    @else
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @endif
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if (isset($post) && $post->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="150">
                </div>
            @endif
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="published" name="published" {{ isset($post) && $post->published ? 'checked' : '' }}>
            <label class="form-check-label" for="published">Published</label>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Create' }} Post</button>
    </form>
</div>
@endsection
