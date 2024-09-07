<?php
$employ =[
    [1, "MOMO", "Chair Person", "7500$"],
    [2, "Lulu", "Assistance Head", "1000$"],
    [3, "Lala", "Secretory", "2500$"],
    [4, "COCO", "CEO", "8000$"],

];

foreach ($employ as $D1) //The outer foreach loop iterates through each sub-array (each employee) in the $employ array. Each sub-array is assigned to the variable $D1.
{
    foreach ($D1 as $D2) //The inner foreach loop iterates through each element in the current sub-array ($D1). Each element (employee detail) is assigned to the variable $D2.
    {
        echo $D2 ." "; //The inner loop prints each detail of the current employee, followed by a space
    }
    echo "<br/>";
}


/* Step-by-Step Execution:

- First Iteration of Outer Loop:
    `$D1` = [1, "MOMO", "Chair Person", "7500$"]
    - Inner loop iterates over `$D1`:
        $D2 = 1, prints 1
        $D2 = "MOMO", prints MOMO
        $D2 = "Chair Person", prints Chair Person
        $D2 = "7500$", prints 7500$
        After inner loop, prints <br/> to start a new line.


- Second Iteration of Outer Loop:
    $D1 = [2, "Lulu", "Assistant Head", "1000$"]
    - Inner loop iterates over $D1:
        $D2 = 2, prints 2
        $D2 = "Lulu", prints Lulu
        $D2 = "Assistant Head", prints Assistant Head
        $D2 = "1000$", prints 1000$
        After inner loop, prints <br/> to start a new line.


- Third Iteration of Outer Loop:
    $D1 = [3, "Lala", "Secretary", "2500$"]
    - Inner loop iterates over $D1:
        $D2 = 3, prints 3
        $D2 = "Lala", prints Lala
        $D2 = "Secretary", prints Secretary
        $D2 = "2500$", prints 2500$
    After inner loop, prints <br/> to start a new line.
 
    
- Fourth Iteration of Outer Loop:
    $D1 = [4, "COCO", "CEO", "8000$"]
    - Inner loop iterates over $D1:
        $D2 = 4, prints 4
        $D2 = "COCO", prints COCO
        $D2 = "CEO", prints CEO
        $D2 = "8000$", prints 8000$
    After inner loop, prints <br/> to start a new line.
*/

?>