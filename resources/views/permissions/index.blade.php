@extends('layouts.admin')

@section('title', 'Permission Management')

@section('content')
    <h1 class="mt-4" style="color: rgb(23, 47, 233) !important;">Permission Management</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Permissions</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span style="color: black !important">
                <i class="fas fa-table me-1"></i>
                Permissions List
            </span>
            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm" style="margin-left: auto;">
                <i class="fas fa-plus"></i> Add Permission
            </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped">
                <thead style="color: rgb(23, 47, 233) !important;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody style="color: black !important">
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->created_at->format('d M, Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('permissions.edit', $permission->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                    class="d-inline" id="delete-form-{{ $permission->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $permission->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            window.onload = function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            }
        </script>
    @endif

    <script>
        function confirmDelete(permissionId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + permissionId).submit();
                }
            });
        }
    </script>
@endsection
