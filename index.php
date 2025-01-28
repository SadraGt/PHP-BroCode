<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>info</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <form action="index.php" method="post">
      <h2>Info</h2>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="username" placeholder="Enter name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      </div>
      
      <input type="submit" class="submit-btn" value="Log in">
    </form>
  </div>
</body>
</html>


<?php
    echo $_POST["username"] . "<br>";
    echo "{$_POST["email"]} <br>";

?>