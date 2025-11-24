
        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        #main {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input.text {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input#sub {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input#sub:hover {
            background-color: #4cae4c;
        }
        .login-link {
            color: #007bff;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>User Sign Up</h1>
        <form action="" method="post">
            <input type="text" name="username" class="text" required placeholder="Username"><br><hr>
            <input type="email" name="email" class="text" required placeholder="Email"><br><hr>
            <input type="password" name="password" class="text" required placeholder="Password"><br><hr>
            <input type="submit" value="Sign Up" id="sub">
            <p>Already have an account? <a href="login.php" class="login-link">Login here</a></p>
        </form>
    </div>
</body>
</html>
