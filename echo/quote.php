<!DOCTYPE html>
<html>
<body>

<?php
/*
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
*/

//When using double quotes, variables can be inserted to the string.
$txt1 = "Learn PHP";
echo "<h2>$txt1</h2>"; //output: Learn PHP


//When using single quotes, variables have to be inserted using the (.) operator, like this:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
echo '<h2>' . $txt1 . '</h2>'; //to access variable we must use (.)
echo '<h2>  $txt1 </h2>'; //single qoute doesn't regonise vairable -> output: $txt1
echo '<p>Study PHP at ' . $txt2 . '</p>';


//The two echo statements below will not produce the same result:
$name = 'Linus';
echo '<h1>Hello $name</h1>'; //invalid
echo "<h1>Hello $name</h1>"; //valid


?>

</body>
</html>


