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
      <h2>Number</h2>
      <div class="form-group">
        <label for="name">Enter a number to count to :</label><br>
        <input type="text" id="name" name="Number" placeholder="Enter a number" required><br>
      </div><br>
      
      
      <input type="submit" class="submit-btn" value="Enter"><br>
    </form><br>
  </div>
</body>
</html>


<?php
$Num = $_POST["Number"] ?? 0;
for ($i=0; $i <= $Num ; $i++) { 
  echo $i;
}
?>