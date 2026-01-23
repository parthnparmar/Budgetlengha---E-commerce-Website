<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">
  <title>Budgetlengha</title>
  <style>
    /* Basic CSS for the page */
    body {
      margin: 0;
      font-family: 'Josefin Sans', sans-serif;
      background-color: #f0f0f0;
      height: 100vh;
      overflow-x: hidden;
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

    /* Fancy Logo Styling */
    .navbar-brand img {
      height: 80px; /* Larger height for visibility */
      width: 80px; /* Matching width for a circular shape */
      border: 3px solid #ff9800; /* Gold-like border */
      border-radius: 50%; /* Circular shape */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Adds depth with shadow */
      transition: transform 0.3s, box-shadow 0.3s;
      object-fit: cover; /* Fills container without stretching */
    }

    /* Glow effect on hover */
    .navbar-brand img:hover {
      transform: scale(1.1); /* Slightly increases size on hover */
      box-shadow: 0 0 15px #ff9800; /* Glowing effect with orange hue */
    }

    /* Hero Section */
    .hero-section {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      background-image: url('/img/—Pngtree—beautiful\ woman\ with\ an\ orange_3151312.jpg');
      background-size: cover;
      background-position: center;
    }

    h1 {
      font-size: 4rem;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
      animation: fadeIn 2s ease-in-out;
    }

    button {
      padding: 15px 30px;
      font-size: 1.2rem;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s;
    }

    button:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }

    /* Footer styling */
    footer {
      background-color: #333;
      color: white;
      padding: 15px;
      position: relative;
      bottom: 0;
      width: 100%;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    footer ul {
      display: flex;
      justify-content: center;
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    footer ul li {
      margin: 0 15px;
    }

    footer ul li a {
      color: white;
      font-size: 1.1rem;
      text-decoration: none;
      transition: color 0.3s;
    }

    footer ul li a:hover {
      color: #ff9800;
    }

    /* Animations */
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="/img/Salford & Co..png" alt="Budgetlengha Logo">
      </a>
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
          <li class="nav-item"><a href="http://localhost:3000/signin.php" class="btn btn-custom">Sign In</a></li>
          
          <?php
            $count = 0;
            if(isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
            }
          ?>
          <a href="http://localhost:3000/mycart.php" class="btn btn-success">My Cart (<?php echo $count; ?>)</a>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Hero Section -->
  <div class="hero-section text-white">
    <h1>Welcome to Budgetlengha</h1>
    <button onclick="window.location.href='http://localhost:3000/index2.php';">Start Shopping</button>
  </div>
  

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <ul>
        <li><a href="http://localhost:3000/index1.php">Home</a></li>
        <li><a href="http://localhost:3000/service.php/">Services</a></li>
        <li><a href="http://localhost:3000/about.php">About</a></li>
        <li><a href="http://localhost:3000/html/contact.htm">Contact</a></li>
        <li><a href="http://localhost:3000/index2.php">Products</a></li>
      </ul>
      <p><strong>Nuriya's Clothing</strong></p>
      <p>Address: Hussain Sindhi, near CB School, Valsad, Gujarat | +91 63594 72166</p>
    </div>
  </footer>

</body>
</html>
