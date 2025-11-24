<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bridal Collection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Cormorant Garamond', serif;
      background-color: #f9f9f9;
    }
    .card {
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-title {
      font-size: 1.5rem;
      color: #a83f39;
    }
    .hero {
      background-image: url('/img/—Pngtree—beautiful woman with an orange_3151312.jpg'); 
      height: 100vh;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      color: #f7f3f0;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
    }

    .hero h1 {
      font-size: 4.5em;
      font-weight: 700;
      letter-spacing: 5px;
      text-transform: uppercase;
      z-index: 2;
      position: relative;
      color: #fff;
    }

    .hero .cta {
      padding: 15px 40px;
      background-color: #fff;
      border-radius: 30px;
      color: #a57b7b;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 2px;
      cursor: pointer;
      text-decoration: none;
      margin-top: 20px;
      z-index: 2;
      position: relative;
      transition: background-color 0.3s ease;
    }

    .hero .cta:hover {
      background-color: #f3d0d0;
    }

    .btn-info {
      background-color: #a83f39;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-info:hover {
      background-color: #c44a4a;
    }
    .navbar-brand {
      font-family: 'Poppins', sans-serif;
      font-size: 1.3rem;
      font-weight: bold;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: #fff;
      font-size: 1.1rem;
    }
    .navbar-dark .navbar-nav .nav-link:hover {
      color: #f3d0d0;
    }
    .btn-success {
      background-color: #d9a09d;
      border: none;
    }
    .form-select {
      border-radius: 30px;
      padding: 5px 10px;
    }
    .card-img-top {
      border-radius: 15px;
      height: 280px;
      object-fit: cover;
    }
    .container h2 {
      margin-top: 50px;
      text-align: center;
      color: #a83f39;
    }
    footer {
      background-color: #333;
      color: white;
      padding: 15px;
      position: relative;
      bottom: 0;
      width: 100%;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
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

    /* Slider animations */
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

  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"href="http://localhost:3000/signin.php" class="btn btn-warning">SignUp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active"  href="http://localhost:3000/index1.php">Home</a>
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
          <a class="nav-link" href="http://localhost:3000/index2.php">Product</a>
        </li>
        
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
        <a href="http://localhost:3000/mycart.php" class="btn btn-success">My Cart (<?php echo $count; ?>)</a>
      </ul>
      
        
      </form>
    </div>
  </div>
  <li class="nav-item">
          <select class="form-select" aria-label="Category Menu" onchange="location = this.value;">
            
            <option value="http://localhost:3000/B.php">Bridal Collection</option>
            <option value="http://localhost:3000/p.php">Party Wear Collection</option>
          </select>
        </li>
</nav>
<section class="hero">
    <div>
      <h1>Party Wear Collection</h1>
      
    </div>
  </section>
<div class="container mt-5">
  
  <div class="row">
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/_Fashion Mistakes That Make People Look so Much Older Than They Are_.jpeg" class="card-img-top" alt="Lehenga 1">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 1</h5>
            <p class="card-text">Price: Rs. 10,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 1">
            <input type="hidden" name="Price" value="10000">
          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/A Guide to the Most Popular Handbag Styles in Paris.jpeg" class="card-img-top" alt="Lehenga 2">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 2</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 2">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/Buy White Lehenga Kota Embroidery V Neck Handloom Kalidar Bridal Set For Women by Tarun Tahiliani Online at Aza Fashions_.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 3</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/download (10).jpeg" class="card-img-top" alt="Lehenga 4">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 4</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 4">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/download (11).jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 5</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/download (9).jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 6</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/ghaghra ni choli _ lehanga.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 7</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/Haldi lehengas.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 8</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/hot red lehnga for wedding season ❤️.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 9</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/latest collection.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 10</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/Pink Organza Wedding Lehenga Set by Ridhi Mehra at Pernia's Pop Up Shop 2024.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 11</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/soft girl dress  💕💮🌺🍭✨.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 12</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/pa/Vrinda fashion.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 13</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/img/p4.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 14</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/img/—Pngtree—beautiful woman with an orange_3151312.jpg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 15</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-3">
      <form action="manage_cart.php" method="POST">
        <div class="card">
          <img src="/img/Sabyasachi Inspired Dark Burgundy Wedding Lehenga.jpeg" class="card-img-top" alt="Lehenga 3">
          <div class="card-body text-center">
            <h5 class="card-title">Lehenga 16</h5>
            <p class="card-text">Price: Rs. 9,000</p>
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Lehenga 3">
            <input type="hidden" name="Price" value="9000">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<footer>
    <div class="container  text-center">
      <ul>
        <li><a href="http://localhost:3000/index1.php">Home</a></li>
        <li><a href="http://localhost:3000/service.php/">Services</a></li>
        <li><a href="http://localhost:3000/about.php">About</a></li>
        <li><a href="http://localhost:3000/html/contact.htm">Contact</a></li>
        <li><a href="http://localhost:3000/index2.php">Products</a></li>
      </ul>
      <p><strong>&copy; Nuriya's Clothing</strong></p>
      <p>Address: Hussain Sindhi, near CB School, Valsad, Gujarat | +91 63594 72166</p>
    </div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
