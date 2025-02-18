@extends('layouts.admin')

@section('title', 'Create Role')

@section('content')
    <h1 class="mt-4" style="color: rgb(23, 47, 233) !important;">Create Role</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <h5 style="color: black !important;"><i class="fas fa-plus me-2"></i>Add New Role</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                @method('POST')

                <!-- Role Name Input -->
                <div class="mb-3">
                    <label for="name" class="form-label" style="color: black !important;">Role Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                        placeholder="Enter role name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Permissions Section -->
                <div class="mb-3">
                    <label for="permissions" class="form-label" style="color: black !important;">Assign Permissions</label>
                    <div class="d-flex flex-wrap gap-4">
                        @if ($permissions->isNotEmpty())
                            @foreach ($permissions as $permission)
                                <div class="form-check" style="flex: 0 0 23%; margin-bottom: 1rem;">
                                    <input type="checkbox" name="permissions[]" id="permission-{{ $permission->id }}"
                                        value="{{ $permission->name }}" class="form-check-input">
                                    <label for="permission-{{ $permission->id }}" class="form-check-label" style="color: black !important;">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="text-end">
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
