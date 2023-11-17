<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blue;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        
        input[type="checkbox"] {
            margin-bottom: 8px;
        }
        
        button {
            background-color: blue;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        a {
            text-decoration: none;
            color: blue;
            margin-top: 16px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label>
               Remember me  <input type="checkbox" name="remember">
            </label>
            
            <button type="submit">Login</button>
        </form>
        <p>New to our app? <a href="reg.php">Sign Up here</a></p>
    </div>
</body>
</html>
