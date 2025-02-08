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
    <input type="checkbox" name="pizza" value="Pizza" >pizza<br>
    <input type="checkbox" name="hotdog" value="Hotdog">hotdogs<br>
    <input type="checkbox" name="hamburger" value="Hamburger" >hamburgers<br>
    <input type="submit" name="submit">

  </form>

</body>
</html>


<?php

if (isset($_POST["submit"])){

  if (isset($_POST["pizza"])) {
    echo "you like pizza! <br>";
  }
  if (isset($_POST["hotdog"])) {
    echo "you like hotdog! <br>";
  }
  if (isset($_POST["hamburger"])) {
    echo "you like hamburger! <br>";
  }elseif (empty($_POST["hamburger"])) {
    echo "you don't like hamburger <br>";
  }
  if (empty($_POST["pizza"])){
    echo "you don't like pizza <br>";
  }
  if (empty($_POST["hotdog"])){
    echo "you don't like hotdog <br>";
  }
 
}

  
?>