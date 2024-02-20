<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
  }

  h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #555;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  .home-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    text-decoration: none;
    cursor: pointer;
    border-radius: 4px;
    margin-top: 10px;
  }

  .home-button:hover {
    background-color: #0056b3;
  }
</style>
</style>
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