<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budget Lehengas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            transition: background-color 0.3s;
        }
        .navbar-brand {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 1.5rem;
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.1rem;
        }
        .navbar-nav .nav-link:hover {
            color: #e74c3c;
        }
        .jumbotron {
            background-image: url('/img/—Pngtree—beautiful\ woman\ with\ an\ orange_3151312.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .jumbotron h1 {
            font-size: 4rem;
            font-family: 'Sofia', cursive;
        }
        .cta, .sin {
            color: white;
            background-color: transparent;
            border: none;
            font-size: 1rem;
            margin-left: 10px;
            transition: color 0.3s, transform 0.3s;
        }
        .cta:hover, .sin:hover {
            color: #e74c3c;
            transform: scale(1.1);
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 30px 0;
        }
        .footer-icons a {
            color: #fff;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .footer-icons a:hover {
            color: #e74c3c;
        }
        .section-title {
            font-size: 2.5rem;
            color: #e74c3c;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
        }
        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }
        .about-text strong {
            color: #e74c3c;
        }
        .about-img {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        /* Transparent Navbar Styling */
    .navbar {
      background: rgba(0, 0, 0, 0.7);
      padding: 15px;
      position: fixed;
      width: 100%;
      z-index: 1000;
    }

    .navbar-brand, .navbar-nav .nav-link, .navbar .social-icons a {
      color: #fff !important;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover, .navbar .social-icons a:hover {
      color: #ff9800 !important;
    }

    .navbar-nav .nav-link::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: #ff9800;
      transition: width 0.3s;
    }

    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }

    .btn-custom {
      color: white;
      background-color: #007bff;
      border-radius: 50px;
      padding: 5px 15px;
    }

    .btn-custom:hover {
      background-color: #0056b3;
    }

    /* Social Icons Styling */
    .social-icons a {
      font-size: 1.3rem;
      margin-left: 10px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Budget Lehengas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost:3000/index1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/service.php/">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/html/contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:3000/index2.php">Products</a>
                </li>
                </ul>
<!-- Cart Button -->
<button class="cta" onclick="window.location.href='http://localhost:3000/mycart.php'">
    <i class="fas fa-shopping-cart"></i> Cart
</button>

<!-- Sign In Button -->
<button class="sin" onclick="window.location.href='http://localhost:3000/signin.php'">
    <i class="fas fa-user"></i> Sign In
</button>


</nav>

<div class="jumbotron text-center">
    <h1><b><u>Budget Lehengas</u></b></h1>
    <p>Stunning Lehengas Without Straining Your Budget</p>
</div>




<section class="my-5">
    <div class="container">
        <h2 class="section-title">About Us</h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="/img/n11.jpg" class="img-fluid about-img" alt="Lehenga">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="about-text">
                    <h2 class="display-4">Budget Lehengas</h2>
                    <p>
                        At <strong>Budget Lehengas</strong>, we pride ourselves on offering stylish, high-quality lehengas that don’t break the bank. Our vision is to create a fashion-forward platform where affordability meets elegance, allowing you to look your best without straining your budget.
                    </p>
                    <p>
                        <strong>Day by day, your choices shape who you are.</strong> Our lehengas, with their intricate designs and stunning details, celebrate the beauty of South Asian culture. We understand that lehengas hold a special place in weddings, festivals, and cultural gatherings, and we are here to ensure you shine at every occasion.
                    </p>
                    <a href="http://localhost:3000/index2.php" class="btn btn-success mt-3">Explore Our Collection</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p><strong>@Nuriya's Clothing</strong></p>
        <p>
            Address: Hussain Sindhi,<br>
            Next to Shiraz Dairy, near CB School,<br>
            Halar Road, Valsad (Gujarat)<br>
            +91 63594 72166 | +91 63593 33433
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</body>
</html>