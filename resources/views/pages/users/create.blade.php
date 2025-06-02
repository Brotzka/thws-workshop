@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <div>
        <h1>Create User</h1>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">User anlegen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
