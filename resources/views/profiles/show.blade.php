<!-- resources/views/profiles/show.blade.php -->
@extends('master')

@section('content')
<div class="container">
    <h1>Profile Details</h1>
    <table class="table">
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
                    <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="100">
                @else
                    No avatar uploaded
                @endif
            </td>
        </tr>
        <tr>
            <th>User:</th>
            <td>{{ $profile->user->name }}</td>
        </tr>
    </table>
    <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
