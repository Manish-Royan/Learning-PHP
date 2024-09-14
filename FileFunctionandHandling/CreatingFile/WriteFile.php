<?php

$fileName = "file/dummy.txt"; //we defune the file location and fileName.txt
$content = "This is dummy file."; //write the content for dummy.txt file

//Creatung file
$file = fopen($fileName, "w") or die ("unable to create file"); //when we create a file we do "w" for write operation

fwrite($file, $content);
fclose($file);

echo "file created";

?>