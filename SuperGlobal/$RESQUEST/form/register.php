<?php
print_r($_REQUEST);

echo "\nUserName: ";
print_r($_REQUEST['userName']);
echo "<br/>";

echo "UserPassword: ";
print_r($_REQUEST['userPassword']);


//Let's forcefully insert data 
$_REQUEST['dummy'] = "test";

foreach($_REQUEST as $key => $data)
{
    echo"<pre>";
    echo $key .": ".$data;
    echo"</pre>";
}
?>