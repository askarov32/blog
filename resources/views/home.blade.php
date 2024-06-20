@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="mt-4">
                        <h4>User Information</h4>
                        <ul>
                            <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                            <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="{{ route('admin.posts.index') }}">View Posts</a></li>
                            <li><a href="{{ route('admin.categories.index') }}">View Categories</a></li>
                            <li><a href="{{ route('admin.roles.index') }}">View Roles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection