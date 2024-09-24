<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>The Fruit Program</h3>
    <?php
    // Class & Object: Class is a blueprint of object. It consists of both data and functions. An object is an instance of a class whereas, a class creates instances of the same kind of objects.

    // Classes
    class Fruit {
        public $name; // Property
        public $color; // Property

        function set_name($name) // Method
        {
            $this->name = $name; //unlike in JavA USED (.) DOT to access variable, similarly in PHP we use (->) to access varaible
        }
    
        function get_name()
        {
            return $this->name;
        }
    }
    
    // Objects - created using the new keyword
    $apple = new Fruit();
    $banana = new Fruit();
    
    $apple->set_name("Apple"); // Using -> to set the property
    //echo $apple->name; // Using -> to get the property
    $banana->set_name("Banana");
    
    echo $apple->get_name(); // get_name is used to print the name set by set_name method
    echo "<br>";
    echo $banana->get_name(); 

    ?>
</body>
</html>
