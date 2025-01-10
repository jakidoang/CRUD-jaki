@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Profile Details</h1>
        <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back to Profiles</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>ID:</th>
                        <td>{{ $profile->id }}</td>
                    </tr>
                    <tr>
                        <th>Biodata:</th>
                        <td>{{ $profile->biodata }}</td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td>{{ $profile->age }}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{ $profile->address }}</td>
                    </tr>
                    <tr>
                        <th>Avatar:</th>
                        <td>
                            @if($profile->avatar)
                                <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="100" class="rounded-circle">
                            @else
                                No avatar uploaded
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>User:</th>
                        <td>{{ $profile->user->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
