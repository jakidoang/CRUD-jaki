@extends('master')

@section('content')
<div class="container">
    <h1>Profiles</h1>
    <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Create New Profile</a>

    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Biodata</th>
                <th>Age</th>
                <th>Address</th>
                <th>Avatar</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->biodata }}</td>
                    <td>{{ $profile->age }}</td>
                    <td>{{ $profile->address }}</td>
                    <td>
                        @if($profile->avatar)
                            <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="50">
                        @else
                            No avatar
                        @endif
                    </td>

                    <td>{{ $profile->user->name }}</td>
                    <td>
                        <a href="{{ route('profiles.show', $profile) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('profiles.edit', $profile) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('profiles.destroy', $profile) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
