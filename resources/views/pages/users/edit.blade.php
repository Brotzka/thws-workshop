@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div>
        <h1>Edit User {{ $user->name }}</h1>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email', $user->email) }}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 me-1">Benutzer aktualisieren</button>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline btn-outline-primary me-1 mt-3">Back to User</a>
                    <a href="{{ route('users.index') }}" class="btn btn-outline btn-outline-primary me-1 mt-3">Back to Users</a>
                </form>
            </div>
        </div>
    </div>
@endsection
