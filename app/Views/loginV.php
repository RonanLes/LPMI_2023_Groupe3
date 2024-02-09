<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      color: #333;
    }

    .login-container form {
      margin-top: 20px;
    }

    .login-container label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }

    .home-button {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: #333;
      border: 1px solid #333;
      padding: 10px 20px;
      border-radius: 3px;
      transition: background-color 0.3s;
    }

    .home-button:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login</h2>

  <form action="index.php?page=login" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
  </form>

  <a href="index.php" class="home-button">Accueil</a>
</div>

</body>
</html>
