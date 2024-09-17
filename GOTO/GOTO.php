<?php
for ($i=1; $i <= 10; $i++) { 
    if($i == 3) //if condition statisfy then diretly jumped to goto abc;
    {
        goto abc; //'abc' is label
        echo $i; //gets ignored
    }
    echo $i ." ";
}

echo "Hello"; //gets ignored

abc: //defining label
echo " <br>", "This is new code"; //anything after label is executed   
?>