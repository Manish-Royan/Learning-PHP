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

            //Remember when you write a construct function always initiate or prefixed it with (__) Two_ undersore and `construct` keyword (pass property as attribute to constructor)
            function __construct($name, $color) //we will be using constructor function as a setName() and setColor() fuction by default during the object cration itself.
            {
                // this->name = $name; // I forget that we used '$' in `this` kwyword too 
              
                $this->name = $name; //this is attribute of constructor
                $this->color = $color; // Using $this-> to refer to the object's property
            }

            function get_Name() {
                return $this->name;
            }

            function get_Color() {
                return $this->color;
            }
        }

        //Let's create object to invoke the constructor
        $strawberry = new Fruit("Strawberry", "Pink");
        $Blueberry = new Fruit("Blueberry", "Blue");

        // echo $strawberry->get_Name;// i forgot that to call a method we should give `()` at end
        // echo $strawberry->get_Name() +" "+ $strawberry->get_Color(); //this will give error

        echo $strawberry->get_Name() ." ". $strawberry->get_Color();// we use (.) instead of (+) unlike other programming language to concat
        echo "<br/>";
        echo $Blueberry->get_Name() ." ". $Blueberry->get_Color();
        echo "<br/>";
    ?>
</body>
</html>
