<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php



//i. Heredoc: Similar to double-quoted strings, allowing for multi-line strings and variable interpolation.
/*
`<<<EOD` syntax is used to define a heredoc in PHP. A heredoc is a way to write multi-line strings without the need for escaping quotes or newlines, and it behaves similarly to double-quoted strings.

The syntax for a heredoc starts with `<<<` followed by an identifier (in this case, EOD, we can use another things instead of `EOD` also), then the string content, and finally the same identifier to close the string. The closing identifier must be at the beginning of the line with no spaces or tabs before it.

    * Syntax:
    i.Start with <<<EOD: This tells PHP that you are starting a heredoc.
    ii.String Content: Everything between the start and end identifiers is treated as part of the string.
    iii.End with EOD: This tells PHP that you are ending the heredoc.
*/
$name   = "John";
$string = <<<EOD
Hello, $name
Welcome to the site!
EOD;
echo $string;
    /*
        Outputs:
        Hello, John
        Welcome to the site!
    */

    //Characteristics of Heredoc
        //i.Variable Interpolation: Like double-quoted strings, heredocs allow variable interpolation
        $var = "value";
        $string = <<<EOD
        This string contains a variable: $var.
        EOD;
        echo $string; // Outputs: This string contains a variable: value.

        //ii. No Escaping Needed: You don't need to escape quotes or newlines within a heredoc.
        $string = <<<EOD
        He said, "Hello, World!"
        EOD;
        echo $string; // Outputs: He said, "Hello, World!"

        //iii.Multi-line Support: Heredocs can span multiple lines, making them useful for defining large blocks of text.
        $string = <<<EOD
        Line 1
        Line 2
        Line 3
        EOD;
        echo $string;
        /* Outputs:
            Line 1
            Line 2
            Line 3
        */


 


//ii.Nowdoc: Similar to single-quoted strings, allowing for multi-line strings without variable interpolation.
$name   = 'John';
$string = <<<'Hero'
Hello, $name
Welcome to the site!
Hero;
echo $string;
    /*
        Outputs:
        Hello, $name
        Welcome to the site!
    */

?>
</body>
</html>