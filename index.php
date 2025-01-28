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
      <h2>Circumference, Area, Volume</h2>
      <div class="form-group">
        <label for="name">Radius</label><br>
        <input type="text" id="name" name="Radius" placeholder="Enter Radius" required><br>
      </div><br>
      
      
      <input type="submit" class="submit-btn" value="Log in"><br>
    </form><br>
  </div>
</body>
</html>


<?php
$Radius = $_POST["Radius"] ?? 0 ;
$Circumference = null;
$Area = null;
$Volume = null;
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

$Circumference = round(2 * pi() *$Radius , 2);
$Area = round(pi() * pow($Radius,2) , 2);
$Volume = round(4/3 * pi() *$Radius , 3);

echo "Circumference =  {$Circumference} cm <br>";
echo "Area = {$Area} cm <br>";
echo "Volume = {$Volume} cm <br>";
?>