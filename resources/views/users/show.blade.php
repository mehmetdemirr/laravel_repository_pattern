<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <div class="card">
            <div class="card-header">
                User ID: {{ $user->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">Email: {{ $user->email }}</p>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
