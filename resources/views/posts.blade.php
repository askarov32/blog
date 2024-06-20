@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>All Posts</h1>
        <form method="GET" action="{{ route('posts') }}" class="mb-3">
            <label for="per_page">Posts per page:</label>
            <select name="per_page" id="per_page" onchange="this.form.submit()">
                <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                <option value="15" {{ request('per_page') == 15 ? 'selected' : '' }}>15</option>
                <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            </select>
        </form>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 400px; height: 700px;">
                    @if ($post->image)
                        <img src="{{ $post->image }}" alt="post image" style="max-width: 100%; height: 350px">
                    @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                            <p class="card-text"><small class="text-muted">{{ $post->categories->pluck('name')->join(', ') }}</small></p>
                            <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->appends(request()->query())->links() }}
    </div>
@endsection
