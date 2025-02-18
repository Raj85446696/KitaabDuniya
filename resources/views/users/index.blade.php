@extends('layouts.admin')

@section('title', 'User Management')

@section('content')
    <h1 class="mt-4 text-primary" style="color: rgb(23, 47, 233) !important;">User Management</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header" style="color: black">
            <i class="fas fa-users me-1"></i>
            User List
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped" style="table-layout: fixed; width: 100%;">
                <thead>
                    <tr style="color: rgb(23, 47, 233) !important;">
                        <th style="width: 8%;">Sl No.</th>
                        <th style="width: 14%;">Name</th>
                        <th style="width: 20%;">Email</th>
                        <th style="width: 10%;">Phone</th>
                        <th style="width: 15%;">Address</th>
                        <th style="width: 10%;">Gender</th>
                        <th style="width: 10%;">Role</th>
                        <th style="width: 10%;">Created At</th>
                        <th style="width: 15%;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->isNotEmpty())
                        @foreach ($users as $index => $user)
                            <tr style="color: black">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ ucfirst($user->gender) }}</td>
                                <td><span class="badge bg-primary text-white">{{ $user->getRoleNames()->first() }}</span>
                                </td>
                                <td>{{ $user->created_at->format('d M, Y') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete('{{ $user->id }}')">Delete</button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center text-muted">No users found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + userId).submit();
                }
            });
        }
    </script>

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
@endsection
