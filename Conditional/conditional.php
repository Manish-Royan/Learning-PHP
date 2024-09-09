<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
  <?php
    // if condition
    $var = 8;
      if ( $var > 7)
    {
      echo $var;
    } else {
     echo "condition didn't meet.";
    }

    // compare
    $var = 6;
    if ( $var % 2 == 0)
    {
      echo "true" ;
    } else {
      echo "condition didn't meet.";
    }

    // logical && (check if both condition is true
    $var = 6;
    if ( $var % 2 == 0 && $var % 3 == 0)
    {
      echo "Divisible by both" ;
    } else {
      echo "condition didn't meet.";
    }

    // elseif
    $var = 6;
    if ( $var % 2 == 0 && $var % 3 == 0)
    {
      echo "Divisible by both" ;
    } elseif ($var % 2 == 0) {
      echo "Divisible by 2";
    } elseif ($var % 3 == 0) {
      echo "Divisible by 3";}
    else {
      echo "Not divisible by both.";
    }

    // switch statement
    // let's create a variabel
    $level = 3;
    switch ($level)
    {
      case 1: 
        echo "You are playing level 1";
      break;
      
      case 2: 
        echo "You are playing level 2";
      break;
      
      case 3: 
        echo "You are playing level 3";
      break;
      
      default: "You exceed level!!!";
    }



  ?>
</body>
</html>