<!-- resources/views/profiles/edit.blade.php -->
@extends('master')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('profiles.update', $profile) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="biodata">Biodata</label>
            <input type="text" name="biodata" id="biodata" class="form-control" value="{{ $profile->biodata }}" required>
            @error('biodata')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $profile->age }}" required>
            @error('age')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $profile->address }}" required>
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control">
            @if($profile->avatar)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="100">
                </div>
            @endif
            @error('avatar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
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
@endsection
