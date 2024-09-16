<?php

    // Defining a Function -> it won't be interprete until it's been called so it will be ignore until it's been called
    function processMARKS($marksArr)
    {
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function avgMARKS($marksArr)
    {
        $sum = 0;
        $i = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

$Student1 = [50, 40, 45, 30];
$sumMark1 = processMARKS($Student1);
$avgMarks1 = avgMARKS($Student1);

$Student2 = [50, 40, 25, 30];
$sumMark2 = processMARKS($Student2);
$avgMarks2 = avgMARKS($Student2);


echo "The total marks of Student1 out of 50 is $sumMark1 and the average is $avgMarks1 <br/>";
echo "The total marks of Student2 out of 50 is $sumMark2 and the average is $avgMarks2";

?>