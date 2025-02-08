<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>info</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
<!-- PaymentMethod in iran -->
  <form action="index.php" method="post">
    <input type="radio" name="PaymentMethod" value="Shaparak">Shaparak<br>
    <input type="radio" name="PaymentMethod" value="Digipay">Digipay<br>
    <input type="radio" name="PaymentMethod" value="Sadad">Sadad<br>
    <input type="submit" name="Enter" value="Enter">

  </form>

</body>
</html>


<?php
$Value = $_POST["PaymentMethod"] ?? 0;

if (isset($_POST["Enter"])) {
  switch ($Value) {

    case 'Shaparak':
      echo "Shaparak";
      break;
    case 'Digipay':
      echo "Digipay";
      break;
    case 'Sadad':
      echo "Sadad";
      break;
    
    default:
      echo "Error";
      break;
  }
}


  
?>