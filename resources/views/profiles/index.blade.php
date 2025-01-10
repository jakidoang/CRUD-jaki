@extends('master')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Profiles Management</h1>
        <a href="{{ route('profiles.create') }}" class="btn btn-primary">Create New Profile</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table id="basic-datatable" class="table table-striped">
                <thead class="table-dark">
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
                                <a href="{{ route('profiles.show', $profile) }}" class="btn btn-info btn-sm me-1" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="{{ route('profiles.edit', $profile) }}" class="btn btn-warning btn-sm me-1" title="Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <form action="{{ route('profiles.destroy', $profile) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
<script>
    // Remove alert after 3 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.transition = 'opacity 0.5s ease';
                successAlert.style.opacity = '0';
                setTimeout(() => successAlert.remove(), 500);
            }, 3000);
        }
    });
</script>
@endpush
@endsection
