@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">User Details</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>ID:</th>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Role:</th>
                        <td>{{ $user->role->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
