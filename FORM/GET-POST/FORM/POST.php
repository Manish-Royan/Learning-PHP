<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="POST.php" method="post">
        <label>Quantity: </label>
        <input type="text" name="quantity"> <!-- we gonna put how much quantity we gonna order -->
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
 $item = "Chicken Pizza";
 $price = 5.99;
 $quantity_amount = $_POST["quantity"];
 $total = null;

 $total = $quantity_amount * $price;

 echo "You have order {$quantity_amount} x {$item} <br>";
 echo "Your total is {$total}";
?>