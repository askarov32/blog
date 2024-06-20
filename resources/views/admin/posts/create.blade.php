@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control" id="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_published" class="form-check-input" id="is_published">
                <label class="form-check-label" for="is_published">Publish</label>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
    </div>
@endsection
