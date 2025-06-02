@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div>
        <h1>User {{ $user->name }}</h1>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('users.index') }}" class="btn btn-outline btn-primary me-1">Back to Users</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline btn-primary me-1">Edit User</a>
                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-outline btn-danger">Delete User</a>
            </div>
        </div>
    </div>
@endsection
