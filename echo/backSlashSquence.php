<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
    <?php
    //In PHP, escaping characters is essential when you need to include special characters within a string. Special characters, (such as double quotes, single quotes, backslashes, and others), can disrupt the interpretation of the string if not handled correctly. Escaping ensures these characters are correctly interpreted as literals within the string.

    echo "Hello escape \"sequence\" characters"; //Hello escape "sequence" characters


    /*Example*/

    //i.Double Quotes:
    $string = "She said, \"Hello!\""; // '\character'
    echo $string; // Outputs: She said, "Hello!"

    //ii.Single Quotes:
    $string = 'It\'s a great day!';
    echo $string; // Outputs: It's a great day!

    //iii.Backslash
    $string = "This is a backslash: \\";
    echo $string; // Outputs: This is a backslash: \

    //iv.Dollar Sign:
    $variable = "variable";
    $string = "This is a \$variable.";
    echo $string; // Outputs: This is a $variable.





    ?>
</body>
</html>