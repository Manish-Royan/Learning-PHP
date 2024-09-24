<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    /* Definition: Object-Oriented Programming (OOP) in PHP is a paradigm that allows you to organize your code using objects and classes, making it more modular, reusable, and easier to maintain. PHP's OOP features include classes, objects, properties, methods, inheritance, encapsulation, and polymorphism. 
    */
    
    //1. Classes and Objects
        //i.Class: A blueprint for creating objects (a template).
        //ii..Object: An instance of a class.

        //Defining a Class:
        class Car {
            public $make;
            public $model;
        
            public function drive() {
                return "Driving a $this->make $this->model";
            }
        }

        //Creating an Object:
        $myCar = new Car();
        $myCar->make = "Toyota";
        $myCar->model = "Corolla";
        echo $myCar->drive(); // Outputs: Driving a Toyota Corolla



    //2.  Properties and Methods
        //i.Properties: Variables that belong to a class.
        //ii.Methods: Functions that belong to a class.
        class Person {
            public $name;
            private $age;
        
            public function setAge($age) //{finallyO.O, what we pass on 'setAge()'} that will assign to $age to insatance variable at top
            {
                $this->age = $age;
            }
        
            public function getAge() {
                return $this->age;
            }
        }
        
        $person = new Person();
        $person->name = "Alice";
        $person->setAge(30); 
        echo $person->getAge(); // Outputs: 30

        

    //3. Constructor and Destructor
        //i.Constructor: A special method called when an object is instantiated.
        //ii.Destructor: A special method called when an object is destroyed.
        class Animal {
            public $name;
        
            public function __construct($name) {
                $this->name = $name;
            }
        
            public function __destruct() {
                echo "$this->name is being destroyed";
            }
        }
        
        $animal = new Animal("Dog");
        echo $animal->name; // Outputs: Dog
        // When the script ends, "__destruct" is called, printing "Dog is being destroyed"

        

    //4. Inheritance

        //Parent Class:
        class Vehicle {
            public $brand;
        
            public function start() {
                return "Vehicle started";
            }
        }

        //Child Class:
        class Motorcycle extends Vehicle {
            public $type;
        
            public function ride() {
                return "Riding a $this->brand motorcycle";
            }
        }
        
        $bike = new Motorcycle();
        $bike->brand = "Harley";
        echo $bike->ride(); // Outputs: Riding a Harley motorcycle
        
        

    //5. 5. Encapsulation: Encapsulation restricts direct access to some of an object's components, which can be achieved using visibility keywords: public, private, and protected.
    class BankAccount {
        private $balance;
    
        public function deposit($amount) {
            $this->balance += $amount;
        }
    
        public function getBalance() {
            return $this->balance;
        }
    }
    
    $account = new BankAccount();
    $account->deposit(100);
    echo $account->getBalance(); // Outputs: 100

    

    //6. Polymorphism: Polymorphism allows methods to do different things based on the object it is acting upon. It can be achieved using method overriding.
    class Shape {
        public function draw() {
            return "Drawing a shape";
        }
    }
    
    class Circle extends Shape {
        public function draw() {
            return "Drawing a circle";
        }
    }
    
    $shape = new Shape();
    echo $shape->draw(); // Outputs: Drawing a shape
    
    $circle = new Circle();
    echo $circle->draw(); // Outputs: Drawing a circle
    


    //7. Abstract Classes and Interfaces
        //i.Abstract Class: Cannot be instantiated and can have abstract methods that must be implemented by subclasses.
        abstract class Animal {
            abstract public function makeSound();
        }
        
        class Dog extends Animal {
            public function makeSound() {
                return "Bark";
            }
        }
        
        $dog = new Dog();
        echo $dog->makeSound(); // Outputs: Bark
        
        //ii.Interface: Defines a contract that implementing classes must follow.
        interface Movable {
            public function move();
        }
        
        class Car implements Movable {
            public function move() {
                return "Car is moving";
            }
        }
        
        $car = new Car();
        echo $car->move(); // Outputs: Car is moving
        



    /*Summary
        i.Classes and Objects: Define and create objects.
        ii.Properties and Methods: Variables and functions within classes.
        iii.Constructor and Destructor: Special methods for initialization and cleanup.
        iv.Inheritance: Reuse and extend existing classes.
        v.Encapsulation: Restrict access to class components.
        vi.Polymorphism: Methods that behave differently based on the object.
        vii.Abstract Classes and Interfaces: Define templates and contracts for classes.
    */


    ?>
</body>
</html>