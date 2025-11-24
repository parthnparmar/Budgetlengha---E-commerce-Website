<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        #main {
            background-color: #fff;
            width: 100%;
            max-width: 350px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin: 0;
            padding-bottom: 15px;
            font-size: 20px;
            border-bottom: 1px solid #ddd;
        }
        .text {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .text:focus {
            outline: none;
            border-color: #888;
        }
        #sub {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #sub:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>Login</h1>
        <form action="" method="post">
            <input type="text" name="username" class="text" required placeholder="Username">
            <input type="password" name="password" class="text" required placeholder="Password">
            <input type="submit" value="Login" id="sub">
        </form>
    </div>
</body>
</html>
