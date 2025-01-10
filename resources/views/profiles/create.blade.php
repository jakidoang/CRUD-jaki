@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Create Profile</h1>
        <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back to Profiles</a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Biodata -->
                <div class="form-group mb-3">
                    <label class="form-label" for="biodata">Biodata</label>
                    <input type="text" name="biodata" id="biodata" class="form-control" value="{{ old('biodata') }}" required>
                    @error('biodata')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Age -->
                <div class="form-group mb-3">
                    <label class="form-label" for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" required>
                    @error('age')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Address -->
                <div class="form-group mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Avatar -->
                <div class="form-group mb-3">
                    <label class="form-label" for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    @error('avatar')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- User -->
                <div class="form-group mb-3">
                    <label class="form-label" for="user_id">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
