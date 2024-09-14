<?php
$file = "file/dummy.txt";
$file_open = fopen($file, "r") or die ("unable to get read file");

echo fread($file_open, filesize($file));

fclose($file_open);
?>