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
    <input type="number" name="Number" placeholder="Enter a number">

  </form>

</body>
</html>


<?php

function prime_numbers($x){
  $prime = true;
  if($x == 1 || $x == 0){

    $prime = false;

  }else{

    for ($i=2; $i < $x; $i++) { 
      $z = $x % $i;
      if($z == 0){
        $prime = false;
      }
    }
    
  }
  return $prime;
}

if(prime_numbers($_POST["Number"])){
  echo "{$_POST["Number"]} is prime.";
}else{
  echo "{$_POST["Number"]} is not prime.";
}

  
?>