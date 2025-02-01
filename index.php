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
        <label for="name">Age</label><br>
        <input type="text" id="name" name="Age" placeholder="Enter Your age" required><br>
      </div><br>
      
      
      <input type="submit" class="submit-btn" value="Log in"><br>
    </form><br>
  </div>
</body>
</html>


<?php
$Age = $_POST["Age"] ?? 0 ;
$Y = 18 - $Age;
if ($Age >= 18) {
  echo "your welcom";
}elseif ($Age <= 0) {
  echo "Error";
}else {
  echo "Try again in  $Y  years.";
}

?>