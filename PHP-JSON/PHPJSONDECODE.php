<?php

$JSON_data ='{"name":"Lulu","age":2,"email":"munmuggi@mail.com"}';

//converting into array

$data_array = json_decode($JSON_data, true); //we must pass 'true' otherwise it return object indtead of array

print_r($data_array);
?>