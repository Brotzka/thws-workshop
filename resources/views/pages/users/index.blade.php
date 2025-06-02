@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div>
        <h1>Users</h1>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="d-flex align-items-center">
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-info me-1">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                    <form class="" action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('users.create') }}" class="btn btn-outline btn-primary">Create New User</a>
            </div>
        </div>
    </div>
@endsection
