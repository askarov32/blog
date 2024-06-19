@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($category) ? 'Edit' : 'Create' }} Category</h1>

    @if (isset($category))
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @method('PUT')
    @else
        <form action="{{ route('categories.store') }}" method="POST">
    @endif
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Create' }} Category</button>
    </form>
</div>
@endsection
