<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>The Fruit Program</h3>
    <?php
    class Fruit
    {
        public $name;
        public $color;

    // Constructor method

        function __construct($name, $color) 
        {

            $this->name = $name; //this is attribute of constructor
            $this->color = $color; // Using $this-> to refer to the object's property
        }

    // Destructor method
        function __destruct() //So, destruct function also similarly starts with two__underscore and keyword 'deconstruct' like: __destruct(args)
        {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    $strawberry = new Fruit("Strawberry", "Pink"); // Creating an object of the Fruit class
?>

</body>
</html>
