<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Cormorant Garamond', serif;
      background-color: #f9f9f9;
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
        <a class="navbar-brand" href="http://localhost:3000/signin.php">Sign Up</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="http://localhost:3000/index1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:3000/service.php/">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:3000/about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:3000/html/contact.htm">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:3000/index2.php">Product</a></li>
                <li class="nav-item">
                    <a href="mycart.php" class="btn btn-success">
                        My Cart (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)
                    </a>
                </li>
                <li class="nav-item">
                    <select class="form-select" onchange="location = this.value;">
                        <option selected>Categories</option>
                        <option value="B.php">Bridal Collection</option>
                        <option value="p.php">Party Wear Collection</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</nav>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 1.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 1</h5>
    <p class="card-text">Price: Rs.10000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 1">
    <input type="hidden" name="Price" value="10000">
  </div>
</div>
        </form>
      </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 8.jpg" class="card-img-top" alt="..." width="50" height="280"  >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 2</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 2">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/n2.jpeg.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/n17.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 4</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 4">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>

        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/n2.jpeg.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 5</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/n21.jpg" class="card-img-top" alt="..."width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 6</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 1.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 2.jpg" class="card-img-top" alt="..."width="50" height="280"  >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 3.jpg" class="card-img-top" alt="..." >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 4.jpg" class="card-img-top" alt="..." >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 5.jpg" class="card-img-top" alt="..." >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/N 6.jpg" class="card-img-top" alt="..." >
  <div class="card-body text-center">
    <h5 class="card-title">Lehengea 3</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Lehengea 3">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        
        

    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b1.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Choli</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b2.jpg" class="card-img-top" alt="..."width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Saree lenghea</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Saree lenghea">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b3.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Heavy bride lenghea</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Heavy bride lenghea">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b4.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Designer lenghea</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Designer lenghea">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
          
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b5.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Sarara</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Sarara">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>

          
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b6.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Velvet Sarara</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Velvet Sarara">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
          
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b7.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Bridal Gown</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Bridal Gown">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
          
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b8.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">China bridal Gown</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="China bridal Gown">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/10+ real brides who picked Marwar Couture for their wedding day!.jpeg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Marwar Couture</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/B1.jpeg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Marwar Couture</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/B2.jpeg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Marwar Couture</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/Gold dahlia lehenga set.jpeg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Marwar Couture</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
      
    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/p1.jpeg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title"> A-line Gowns</h5>
    <p class="card-text">Price: Rs.17000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Eleant light Purple Color Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/p2.jpeg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Ball Gowns</h5>
    <p class="card-text">Price: Rs.5000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Eleant light Purple Color Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/p3.jpeg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">party wear lehenga</h5>
    <p class="card-text">Price: Rs.11000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Eleant light Purple Color Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/p6.jpeg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Floral Printed Gowns</h5>
    <p class="card-text">Price: Rs.3000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Eleant light Purple Color Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>

    <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b10.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Eleant light Purple Color Embroidery</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Eleant light Purple Color Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b9.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">China bridal Gown</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="China bridal Gown">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b11.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Peach Color Cotton Silk</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Peach Color Cotton Silk">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b12.jpg" class="card-img-top" alt="..." width="50" height="280" >
  <div class="card-body text-center">
    <h5 class="card-title">Multi Colored Malbari Satin work</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Multi Colored Malbari Satin work">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b13.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Designer Thread Embroidery</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Designer Thread Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b14.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Traditional Lenghea Choli</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Traditional Lenghea Choli">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b15.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">Embroidery Semi Stiched</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Embroidery Semi Stiched">
    <input type="hidden" name="Price" value="9000">
  </div>
</div>
        </form>
        </div>
   
        <div class="col-lg-3">
        <form action="http://localhost:3000/manage_cart.php" method="POST">
      <div class="card" >
  <img src="img/b16.jpg" class="card-img-top" alt="..." width="50" height="300" >
  <div class="card-body text-center">
    <h5 class="card-title">White Net Thread Embroidery</h5>
    <p class="card-text">Price: Rs.9000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="White Net Thread Embroidery">
    <input type="hidden" name="Price" value="9000">
  </div>    
</div>
        </form>
        </div>
        
       
        </div>
        
       




      </div>
    </div>
  </div>
  
  <footer>
    <div class="container  text-center">
      <ul>
        <li><a href="http://localhost:3000/index1.php">Home</a></li>
        <li><a href="http://localhost:3000/service.php/">Services</a></li>
        <li><a href="http://localhost:3000/about.php">About</a></li>
        <li><a href="http://localhost:3000/contact.html">Contact</a></li>
        <li><a href="http://localhost:3000/index2.php">Products</a></li>
      </ul>
      <p><strong>&copy; Nuriya's Clothing</strong></p>
      <p>Address: Hussain Sindhi, near CB School, Valsad, Gujarat | +91 63594 72166</p>
    </div>
  </footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</body>
</html> 
  