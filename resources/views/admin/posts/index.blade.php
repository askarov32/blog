@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        @can('create', App\Models\Post::class)
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create Post</a>
        @endcan
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Categories</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            @if ($post->image)
                                <img src="{{ $post->image }}" alt="post image" width="100">
                            @endif
                        </td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-info">View</a>
                            @can('update', $post)
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            @endcan
                            @can('delete', $post)
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection