@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Role Details</h1>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back to Roles</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="col-4">ID:</th>
                    <td>{{ $role->id }}</td>
                </tr>
                <tr>
                    <th class="col-4">Name:</th>
                    <td>{{ $role->name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
