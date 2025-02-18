<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitabi dunia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        .profile-section img {
            width: 100px;
            /* Fixed width */
            height: 100px;
            /* Fixed height */
            border-radius: 50%;
            /* Makes the image circular */
            object-fit: cover;
            /* Ensures the image covers the area without stretching */
            border: 2px solid #ddd;
            /* Optional: Adds a border around the image */


        }
    </style>
</head>


<body>
    <!-- *************** Header Section **************** -->
    <nav class="navbar navbar-expand-lg bg-dark py-0">
        <div class="container-fluid">
            <div class="left">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="#">Location |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="#">About Us |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
                    @auth
                        <!-- Dashboard and User Dropdown Menu for Logged-in Users -->
                        <li class="nav-item">
                            <a class="nav-link text-light px-2" href="#"><i class="bi bi-person-circle"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light px-2" href="#" role="button"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </ul>
                        </li>
                    @else
                        <!-- Login and Register Options for Guests -->
                        <li class="nav-item">
                            <a class="nav-link text-light px-2" href="#" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Register
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" id="individualRegister">Individual</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('register') }}?type=organisation">Organisation</a></li>
                                </ul>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

    </nav>

    <div class="container-fluid py-1 border-bottom bg-seceondary">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-3 text-start">
                <img src="https://tse3.mm.bing.net/th?id=OIP.5bMrEJU6YvsMumkmj4WpGgHaGH&pid=Api&P=0&h=180" alt="Logo"
                    class="img-fluid" width="50px">
            </div>
            <!-- Search Bar -->
            <div class="col-md-6">
                <form class="d-flex">
                    <input class="form-control me-2 rounded-3" type="search" id="searchBox"
                        placeholder="Search Ex.... 'Delhi'" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            <!-- Cart -->
            <div class="col-md-3 text-end">
                <a href="#" class="btn btn-outline-secondary text-dark">
                    <i class="bi bi-cart"></i> Cart
                </a>
            </div>
        </div>
    </div>



    <main class="container mt-4">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="card p-4 shadow-sm text-center">
                    <div class="profile-section">
                        <div class="mt-2 d-flex justify-content-center align-items-center">
                            @if($user->profile_pic)
                                <!-- If profile picture exists, show the image -->
                                <img id="profile_preview" src="{{ asset('storage/' . $user->profile_pic) }}"
                                    alt="Profile Picture" class="profile-picture">
                            @else
                                <!-- If no profile picture exists, show a placeholder icon inside a fixed-size circle -->
                                <img id="profile_preview" src="{{ asset('path/to/placeholder-icon.png') }}" alt="Preview"
                                    class="profile-picture">
                            @endif
                        </div>
                        <h5 class="mt-3 fw-bold text-primary">Hello, {{$user->name}}</h5>
                    </div>
                    <hr>
                    <ul class="list-group list-group-flush text-start mb-3">
                        <li class="list-group-item list-hover"><a href="#" class="text-decoration-none d-block">📦 My
                                Orders</a></li>
                        <li class="list-group-item list-hover"><a href="#" class="text-decoration-none d-block">🛒
                                Cart</a></li>
                        <li class="list-group-item list-hover"><a href="#" class="text-decoration-none d-block">❤️
                                Wishlist</a></li>
                        <li class="list-group-item list-hover"><a href="#" class="text-decoration-none d-block">🔑
                                Change Password</a></li>
                    </ul>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100 rounded-pill">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                    <form id="delete-form" method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary w-100 mt-2 rounded-pill"
                            onclick="confirmDelete()">
                            <i class="bi bi-trash"></i> Delete Account
                        </button>
                    </form>
                </div>
            </div>

            <!-- Main Content (Personal Info) -->
            <div class="col-md-8 col-lg-9">
                <div class="card p-4 shadow-sm">
                    <h4 class="mb-3 text-primary"><i class="bi bi-person-circle"></i> Personal Info</h4>
                    <hr>
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label"><i class="bi bi-person"></i> Full Name</label>
                                <input type="text" class="form-control rounded-md" id="name" name="name"
                                    value="{{ old('name', $user->name) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label"><i class="bi bi-envelope"></i> Email
                                    Address</label>
                                <input type="email" class="form-control rounded-md" id="email" name="email"
                                    value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label"><i class="bi bi-telephone"></i> Phone
                                    Number</label>
                                <input type="text" class="form-control rounded-md" id="phone" name="phone"
                                    value="{{ old('phone', $user->phone) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label"><i class="bi bi-house"></i> Address</label>
                                <input type="text" class="form-control rounded-md" id="address" name="address"
                                    value="{{ old('address', $user->address) }}">
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label class="form-label"><i class="bi bi-gender-ambiguous"></i> Gender</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="other" {{ $user->gender == 'other' ? 'checked' : '' }}>
                                    <label class="form-check-label">Other</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="profile_pic" class="form-label"><i class="bi bi-camera"></i> Profile
                                Picture</label>
                            <input type="file" class="form-control" id="profile_pic" name="profile_pic"
                                onchange="previewImage(event)">

                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-md"><i class="bi bi-save"></i> Update
                            Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('profile_preview');
                output.src = reader.result;
                output.classList.remove("d-none");
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


    <!-- *************** Footer Section ****************** -->
    <footer class="footer">
        <div class="title-line">
            <h5>Kittabi Duniya</h5>
        </div>

        <div class="social-icons my-5">
            <a href="#" class="facebook"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="twitter"><i class="fab fa-x-twitter fa-2x"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="#" class="youtube"><i class="fab fa-youtube fa-2x"></i></a>
        </div>


        <div class="footer-bottom row">
            <div class="col-md-2">
                <a href="#">Contact Us</a>
            </div>
            <div class="col-md-8">
                <a href="#">© 2025 Kittabi Duniya . All rights and Reserve</a>
            </div>
            <div class="col-md-2">
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register as Individual</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" required>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" required>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="other" required>
                                    <label class="form-check-label">Other</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Include the login.blade.php content here -->
                    @include('auth.login')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function () {
            $('#loginForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Handle success response
                        if (response.success) {
                            window.location.href = "{{ route('dashboard') }}";
                        } else {
                            alert('Login failed');
                        }
                    },
                    error: function (xhr) {
                        // Handle error
                        alert('An error occurred');
                    }
                });
            });
        });
    </script>

    <script>
        document.getElementById('individualRegister').addEventListener('click', function (event) {
            event.preventDefault();
            var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        });
    </script>
    <script>
        function toggleFAQ(index) {
            var answer = document.getElementById('faq' + index);
            var icon = document.getElementById('icon' + index);

            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
                icon.classList.remove('bi-plus-lg');
                icon.classList.add('bi-dash-lg');
            } else {
                answer.style.display = 'none';
                icon.classList.remove('bi-dash-lg');
                icon.classList.add('bi-plus-lg');
            }
        }
    </script>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form').submit();
                }
            });
        }
    </script>


</body>

</html>