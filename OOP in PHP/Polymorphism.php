<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Polymorphism</h3>
    
    <?php
    // Polymorphism allows a class to have a variety of functions, simultaneously showing a common interface.
    class Fruit
    {
        public $name;
        public $color;

        public function __construct($name, $color) 
        {
            $this->name = $name; 
            $this->color = $color;
        }

        public function intro()
        {
            echo "A {$this->name} is a fruit and its color is {$this->color}.";
        }
    }

    class Cherry extends Fruit
    {
        public $weight;

        // Overriding the constructor and the intro() function from the 'Fruit' class to add the 'weight' property
        public function __construct($name, $color, $weight) // this function has one extra argument 
        {
            parent::__construct($name, $color); // Calling the parent constructor
            $this->weight = $weight;
        } 

        public function intro()
        {
            echo "A {$this->name} is a fruit, its color is {$this->color}, and it weighs    {$this->weight} grams.";
        }
    }

    // Instantiate the Cherry class
    $cherry = new Cherry("Cherry", "red", 5);
    echo "<br/>";
    $cherry->intro();

    ?>
    
</body>
</html>
