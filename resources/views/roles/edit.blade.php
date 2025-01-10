@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Role</h1>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('roles.update', $role) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Role Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3 py-2">Update Role</button>
            </form>
        </div>
    </div>
</div>
@endsection
