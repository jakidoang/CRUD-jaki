<!-- resources/views/roles/show.blade.php -->
@extends('master')

@section('content')
<div class="container">
    <h1>Role Details</h1>
    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $role->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $role->name }}</td>
        </tr>
    </table>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
