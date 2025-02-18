<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell </title>
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
        .cursor-pointer {
            cursor: pointer;
        }
        .custom-navbar {
            height: 50px;
            background-color: #f7f8f9;
            box-shadow: 10px 10px 50px rgba(0, 0, 0, 0.05);
        }

        .custom-navbar a {
            font-weight: 900;
            padding-left: 20px;
            font-size: 25px;
            color: black;
        }

        .custom-navbar a:hover {
            color: #333;
            font-size: 30px;
        }

        .footer {
            background-color: rgba(82, 85, 85, 0.544);
            /* Dark blue background */
            color: #fff;
            padding: 40px 0;
            margin-top: 70px;

        }

        .title-line h2 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .social-icons a {
            color: #fff;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #3498db;
            /* Change color on hover */
        }

        .footer-links a {
            color: #bdc3c7;
            /* Light gray for links */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #3498db;
            /* Change color on hover */
        }

        .newsletter-form .form-control {
            background-color: #f8f8f8;
            /* Slightly lighter dark blue */
            border: none;
            color: #fff;
        }

        .newsletter-form .btn {
            background-color: #2e2e30;
            /* Blue button */
            border: none;
            transition: background-color 0.3s ease;
        }

        .newsletter-form .btn:hover {
            background-color: #111113;
            /* Darker blue on hover */
        }

        .footer-bottom {
            border-top: 1px solid #34495e;
            /* Divider line */
            padding-top: 20px;
        }

        .facebook i {
            color: #1877F2;
        }

        .twitter i {
            color: #000000;
        }

        .instagram i {
            color: #E4405F;
        }

        .linkedin i {
            color: #0077B5;
        }

        .youtube i {
            color: #FF0000;
        }


    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar py-0 px-10">
        <div class="container-fluid">
            <a href="/"><i class="bi bi-arrow-left"></i></a>
        </div>
    </nav>

    <!-- Main body start  -->
    <main>
        <h2 class="text-center py-3">POST YOUR BOOK'S</h2>
        <div class="py-5">
            <div class="row ">
                <!-- School Category -->
                <div class="col-md-3 col-sm-6 mb-4 cursor-pointer">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-book fs-1 text-primary mb-3"></i>
                        <h4 class="mb-2">School</h4>
                        <p class="text-muted">All books from 1st to 12th standard</p>
                    </div>
                </div>

                <!-- Graduation Category -->
                <div class="col-md-3 col-sm-6 mb-4 cursor-pointer">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                        <h4 class="mb-2">Graduation</h4>
                        <p class="text-muted">All books for graduation courses</p>
                    </div>
                </div>

                <!-- General Category -->
                <div class="col-md-3 col-sm-6 mb-4 cursor-pointer">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-globe fs-1 text-warning mb-3"></i>
                        <h4 class="mb-2">General</h4>
                        <p class="text-muted">All general books</p>
                    </div>
                </div>

                <!-- Competitive Category -->
                <div class="col-md-3 col-sm-6 mb-4 cursor-pointer">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-trophy fs-1 text-danger mb-3"></i>
                        <h4 class="mb-2">Competitive</h4>
                        <p class="text-muted">All books for competitive exams</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main body ends -->

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
                <div class="footer-links row text-center mb-4 ">
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

    <!-- footor ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>