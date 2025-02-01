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
    <form action="index.php" method="get">
      <h2>Score</h2>
      <div class="form-group">
        <label for="name">grade</label><br>
        <input type="text" id="name" name="Vari" placeholder="Enter Your grade (A,B,C)" required><br>
      </div><br>
      
      
      <input type="submit" class="submit-btn" value="Log in"><br>
    </form><br>
  </div>
</body>
</html>


<?php
$Variable = $_GET["Vari"] ?? 0;

switch ($Variable) {


  case '+A' :
    echo "your Excellent1 ";
    break;

  case 'A':
    echo "your Excellent2 ";
    break;

  case '-A' :
    echo "your Very Good";
    break;

  case '+B' :
    echo "your Good";
    break;

  case 'B':
    echo "your Good";
    break;

  case '-B' :
    echo "your Above Average";
    break;
    
  case '+C' :
    echo "your Average";
    break;

  case 'C':
    echo "your Average";
    break;

  case '-C' :
    echo "your Below Average";
    break;

  case '+D' :
    echo "your Poor";
    break;

  case 'D':
    echo "your Barely Passing";
    break;

  case '-D' :
    echo "your ↕ Fail";
    break;
    
  case 'F':
    echo "your Fail";
    break;
                 
  default:
    echo "Error";
    break;
}
?>