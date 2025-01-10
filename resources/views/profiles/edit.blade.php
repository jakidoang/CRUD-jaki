@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Profile</h1>
        <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-secondary">Back to Profile</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('profiles.update', $profile) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="biodata">Biodata</label>
                    <input type="text" name="biodata" id="biodata" class="form-control mt-1" value="{{ $profile->biodata }}" required>
                    @error('biodata')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control mt-1" value="{{ $profile->age }}" required>
                    @error('age')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control mt-1" value="{{ $profile->address }}" required>
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="form-control mt-1">
                    @if($profile->avatar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="100" class="rounded-circle">
                        </div>
                    @endif
                    @error('avatar')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="user_id">User</label>
                    <select name="user_id" id="user_id" class="form-control mt-1" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $profile->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
