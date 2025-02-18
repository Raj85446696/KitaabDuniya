<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitaabi dunia</title>

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
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
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
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" id="individualRegister">Individual</a></li>
                                    <li><a class="dropdown-item" href="{{ route('org_request.create') }}">Organisation</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

    </nav>

    <div class="nav-2 container-fluid py-1 border-bottom bg-seceondary">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-3 text-start">
                <img src="/assets/nav_logo.png" alt="Logo" class="img-fluid ms-3" width="180px">
            </div>
            <!-- Search Bar -->
            <div class="col-md-6">
                <form class="d-flex">
                    <input class="form-control me-2 rounded-3" type="search" id="searchBox"
                        placeholder="Search Ex.... 'Delhi'" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                    <a href="{{ route('sell.index') }}" class="sell-btn" >Sell</a>

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

    <div class="container-fluid p-0">
        <div class="image">
            <img src="assets/technological.jpg" class="img-fluid w-100 mb-10" style="display: block;"
                alt="Technology Banner">
        </div>
    </div>

    <!-- *************** Main Section ******************-->
    <main class="">
        <div class="categories-section">
            <h2 class="text-center mb-4 fw-bold fs-2" style="color: red;">Categories</h2>
            <div class="row">
                <!-- School Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-book fs-1 text-primary mb-3"></i>
                        <h4 class="mb-2">School</h4>
                        <p class="text-muted">All books from 1st to 12th standard</p>
                    </div>
                </div>

                <!-- Graduation Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                        <h4 class="mb-2">Graduation</h4>
                        <p class="text-muted">All books for graduation courses</p>
                    </div>
                </div>

                <!-- General Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-globe fs-1 text-warning mb-3"></i>
                        <h4 class="mb-2">General</h4>
                        <p class="text-muted">All general books</p>
                    </div>
                </div>

                <!-- Competitive Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-trophy fs-1 text-danger mb-3"></i>
                        <h4 class="mb-2">Competitive</h4>
                        <p class="text-muted">All books for competitive exams</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- *************** Books Collections*************** -->
        <div class="mt-5">
            <div class="container mt-4">
                <h2 class="text-center mb-4 mt-5 text-danger fs-1 fw-bold">📚 Books Collection</h2>

                <!-- New Books Section -->
                <div class="section-header">
                    <h4 class="mb-3 text-primary fw-bold">🔥 New Books</h4>
                </div>
                <div class="container mt-4">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="newBooksContainer"></div>
                </div>

                <!-- Most Readable Books -->
                <div class="section-header mt-5">
                    <h4 class="mb-3 text-success fw-bold">📖 Most Readable Books</h4>
                </div>
                <div class="container mt-4">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="oldBooksContainer"></div>
                </div>
            </div>
        </div>








        <!-- ----------------FAQ------------------- -->

        <div class="container mt-5">
            <h2 class="text-center text-primary fw-bold mb-4 fs-1">❓ Frequently Asked Questions</h2>

            <div class="accordion mx-auto" id="faqAccordion" style="max-width: 800px;">
                <!-- FAQ Item 1 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(1)">
                        <span class="fw-medium">What is the purpose of the SAMIP Software?</span>
                        <i id="icon1" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq1" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        The app simplifies communication, management, and daily operations for residents, RWAs, and
                        staff.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(2)">
                        <span class="fw-medium">How do I register on the app?</span>
                        <i id="icon2" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq2" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        You can register by downloading the app and following the on-screen instructions.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(3)">
                        <span class="fw-medium">Can workers and staff use the app?</span>
                        <i id="icon3" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq3" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        Yes, workers and staff can use the app to manage tasks, view schedules, and update work status.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(4)">
                        <span class="fw-medium">How secure is the app?</span>
                        <i id="icon4" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq4" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        The app ensures data security with encryption protocols and secure login features.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(5)">
                        <span class="fw-medium">Can I pay my society maintenance through the app?</span>
                        <i id="icon5" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq5" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        Yes, the app provides a secure payment gateway for paying society maintenance fees.
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- *************** Footer Section ****************** -->
    <footer class="footer">
        <div class="container">
            <!-- Title Line -->
            <div class="title-line text-center mb-4">
                <h2 class="text-light" style="font-family: 'Merriweather', serif; font-weight: 700;">Kitaabi Duniya
                </h2>
                <p class="text-muted" style="font-size: 1.1rem;">Your Gateway to a World of Books</p>
            </div>

            <!-- Social Icons -->
            <div class="social-icons text-center my-5">
                <a href="#" class="facebook mx-3"><i class="fab fa-facebook fa-2x "></i></a>
                <a href="#" class="twitter mx-3"><i class="fab fa-x-twitter fa-2x"></i></a>
                <a href="#" class="instagram mx-3"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="linkedin mx-3"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#" class="youtube mx-3"><i class="fab fa-youtube fa-2x"></i></a>
            </div>

            <!-- Footer Links -->
            <footer>
                <div class="footer-links row text-center mb-4">
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Home</a></li>
                            <li><a href="#" class="text-muted">Shop</a></li>
                            <li><a href="#" class="text-muted">Categories</a></li>
                            <li><a href="#" class="text-muted">Best Sellers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Customer Care</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Contact Us</a></li>
                            <li><a href="#" class="text-muted">FAQs</a></li>
                            <li><a href="#" class="text-muted">Shipping Policy</a></li>
                            <li><a href="#" class="text-muted">Returns & Refunds</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">About Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Our Story</a></li>
                            <li><a href="#" class="text-muted">Careers</a></li>
                            <li><a href="#" class="text-muted">Blog</a></li>
                            <li><a href="#" class="text-muted">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Newsletter</h5>
                        <form class="newsletter-form">
                            <input type="email" class="form-control mb-2" placeholder="Enter your email">
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom row text-center py-3">
                    <div class="col-md-12">
                        <p class="text-muted mb-0">© 2025 Kittabi Duniya. All rights reserved.</p>
                        <p class="text-muted mb-0"><a href="#" class="text-muted">Privacy Policy</a> | <a href="#"
                                class="text-muted">Terms of Service</a></p>
                    </div>
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

</body>

</html>