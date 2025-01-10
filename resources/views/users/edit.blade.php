@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit User</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password (leave blank if not changing)</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Role Dropdown -->
                <div class="form-group mb-3">
                    <label for="role_id" class="form-label">Role</label>
                    <select name="role_id" id="role_id" class="form-control" required>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
