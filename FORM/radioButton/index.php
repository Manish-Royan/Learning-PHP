<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> <!-- All radio button should share a common 'name' to make them a single one group - like we named our all radio 'credit_card' -->
        <input type="radio" name="credit_card" value="VISA">VISA <br/><br/>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard <br/><br/>
        <input type="radio" name="credit_card" value="American Express">American Express <br/><br/>

        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>


<?php

if(isset($_POST['confirm'])) {

    $credit_cardValue = null;  //to avoid the warning 'credit_cardValue' undefine when nothing selected

    //Using nestedIf to avoid uneccessary warning
        if(isset($_POST['credit_card'])) {
            //Creating a local variable 
            $credit_cardValue = $_POST['credit_card']; //to check which credit card has been selected
    
            // echo $credit_cardValue;
        }
        switch ($credit_cardValue) {
            case 'VISA':
                echo "You selected VISA";
                break;
            case 'Mastercard':
                echo "You selected Mastercard";
                break;
            case 'American Express':
                echo "You selected American Express";
                break;
            
            default:
            echo "Please make a selection"; //if user clicked submit button without checking any 
                break;
        }
    }
?>