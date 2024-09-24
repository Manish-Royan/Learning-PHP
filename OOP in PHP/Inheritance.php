<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h3>Inheritance</h3>
    <?php
    //Inheritance: It derives child classes from the parent class, however inherit child can have their own property and method too. 
    // Inheritance has two classes: `parent` and `child` class.
    // i. Parent class - A base class that is inherited by another class
    // ii. Child Class - A subclass that inherits from another class

    // Inheritance: 

    class Fruit
    {
        public $name;
        public $color;


        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // Always use `public` to allow the child class to inherit from the parent class               
        public function intro() // we created method `public` inorder to be inheritated
        {
            echo "A {$this->name} is a fruit and its color is {$this->color}.";
        }
    }

    //Creating another class inorder to inherit the above `parent-class`
    class Cherry extends Fruit
    {
        public function message() //this function is exclusively for 'Cherry'
        {
            echo "is Cheery a fruit or Berry";
        }
    }


    // Instantiate the Cherry class
    $cherry = new Cherry("Cheery", "red");
    echo "<br/>";
    $cherry->message();
    echo "<br/>";
    $cherry->intro();

    /* Summary:
        Child is a sub-class that inherit from another class. A child class can have sub-class and derived class. S child classs is derived all it property and method from the sub-class in addition it can have it own properties and methods. Inheritance class is defined by using the `extends` keyword.
        */
    ?>
</body>

</html>