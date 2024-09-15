<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <center><h1>Your Selecte your favouriot food item</h1></center>
        <!-- alwayes remember 'name is key' and 'value is value' in associative array -->
        <!-- name = "food[]" this will al placed in an array -->
        <input type="checkbox" name="food[]" value="Chicken-Pizza"> Chicken Pizza <br/> 
        <input type="checkbox" name="food[]" value="Chicken Burger">Chicken Burger <br/>
        <input type="checkbox" name="food[]" value="Chichken-TACO">Chichken TACO <br/>
        
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
    // if (isset($_POST['sumbit'])) //if we clicked the sumbit button then proceed actions
    // {
    //    if(isset($_POST['pizza']))
    //    {
    //     echo "You like Pizza";
    //    } if(empty($_POST['pizza']))
    //    {
    //     echo "You don't like Pizza";
    //    }
       
    //    if(isset($_POST['burger']))
    //    {
    //     echo "You like burger";
    //    } if(empty($_POST['burger']))
    //    {
    //     echo "You don't like burger";
    //    }

       
    //    if(isset($_POST['taco']))
    //    {
    //     echo "You like taco";
    //    } if(empty($_POST['taco']))
    //    {
    //     echo "You don't like taco";
    //    }
    // }


    if(isset($_POST['submit'])) //after selecting 'sibmit' button let's create a foods array
    {
        $foods = $_POST["food"];
        
        foreach($foods as $foodList)
        {
            echo $foodList . "<br>"; // Display each selected food item
        }
    }
?>