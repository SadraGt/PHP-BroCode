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

      
      <input type="submit" class="submit-btn" value="Log in">
    </form>
  </div>
</body>
</html>


<?php


$Users = array(null=>null);
$Users[$_POST["username"]] = $_POST["email"];

foreach ($Users as $Kay => $Value ) {
  echo $Kay . " <br> " . $Value . "<br>";
}

  
?>