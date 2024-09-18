<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php

        //i. WHILE LOOP
        $var = 1;
        while ($var <= 10)
        {
            echo "Number: $var <br>";
            $var++;
        }

        //ii. DO-WHILE LOOP -> the condition will run once even it's false
        $var = 11; // Suppose we want to display even the condition is false at least once we use DO-WHILE LOOP 
        $var = 11; // Suppose we want to display the number even if the condition is false at least once, we use a DO-WHILE LOOP
        do {
            echo "Number: $var <br>";
            $var++;
        } while ($var <= 10); // Closing the while condition correctly

    

        //iii. For LOOP -> we use it when we know how many time we want to run loop
        for ($var = 1; $var <= 6; $var++)
        {
         echo "Number: $var <br>";
        }


        //iv. Breaking Out of Loops: You can use the break statement to exit a loop prematurely.

        for ($i = 1; $i < 10; $i++) {
            if ($i == 6) {
                break; // Exit the loop when $i is 5
            }
            echo "Iteration: $i\n";
        }

        //v. Continuing to the Next Iteration: The continue statement skips the current iteration and moves to the next one.
        for ($i = 0; $i < 5; $i++) {
            if ($i == 2) {
                continue; // Skip the iteration when $i is 2
            }
            echo "Iteration: $i\n";
        }
        
    ?>
</body>
</html>