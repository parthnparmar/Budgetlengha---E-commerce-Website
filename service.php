<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #f9f9f9 !important;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }
        .jumbotron {
            background-image: url('/img/—Pngtree—beautiful\ woman\ with\ an\ orange_3151312.jpg');
            background-size: cover;
            color: white;
        }
        .form-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .map-responsive {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%;
        }
        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* Fancy Logo Styling */
    .navbar-brand img {
      height: 80px; /* Larger height for visibility */
      width: 80px; /* Matching width for a circular shape */
      border: 3px solid #ff9800; /* Gold-like border */
      border-radius: 50%; /* Circular shape */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Adds depth with shadow */
      transition: transform 0.3s, box-shadow 0.3s;
      object-fit: cover; /* Fills container without stretching */
    }/* Transparent Navbar Styling */
    .navbar {
      background: rgba(0, 0, 0, 0.7);
      padding: 15px;
      position: fixed;
      width: 100%;
      z-index: 1000;
    }


    </style>
</head>
<body>

    <!-- Fancy Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="">
        <img src="/img/Salford & Co..png" alt="Budgetlengha Logo">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/service.php/">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/html/contact.htm">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Location</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost:3000/about.php">About Us</a>
                       <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://localhost:3000/help.php">Help</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron Header -->
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Our Services</h1>
        <p class="lead">We offer a variety of services tailored to your needs.</p>
    </div>

    <!-- Service Info Section -->
    <section class="container my-5" id="services">
        <h2 class="text-center">Our Services</h2>
        <hr>
        <div class="row text-center">
            <!-- Service cards here -->
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="container" id="contact">
        <!-- Contact form here -->
    </section>

    <!-- Google Map Section -->
    <section class="container my-5" id="location">
        <h3 class="text-center mb-4">Our Location</h3>
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.3802861465944!2d72.9250812149346!3d20.59929818623613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05891b4bb1211%3A0xf0dcd8b9d47dcff6!2sShiraz%20Dairy%2C%20Near%20CB%20School%2C%20Valsad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1603301293672!5m2!1sen!2sin"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p><strong>@Nurinas Clothing</strong></p>
        <p>Address: Hussain Sindhi, Next to Shiraz Dairy, Near CB School, Valsad, Gujarat</p>
        <p>Phone: +91 63594 72166 | +91 63593 33433</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
