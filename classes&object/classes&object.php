<?php
    //Classes and objects are fundamental concepts in Object-Oriented Programming (OOP) in PHP. They allow you to create reusable, modular code. 

    //1. Classes: A class is a blueprint for creating objects. It defines properties (attributes) and methods (functions) that the objects created from the class will have.

    class Car {
        // Properties
        public $make;
        public $model;
    
        // Methods
        public function drive() {
            return "Driving a $this->make $this->model";
        }
    }

    //2. Objects: An object is an instance of a class. It is created using the new keyword.
    $myCar = new Car();
    $myCar->make = "Toyota";
    $myCar->model = "Corolla";
    echo $myCar->drive(); // Outputs: Driving a Toyota Corolla

    //3.Properties: Properties are variables that belong to a class. They represent the attributes or characteristics of the class.
    class Person {
        public $name;
        public $age;
    }
    
    $person = new Person();
    $person->name = "John";
    $person->age = 30;
    echo $person->name; // Outputs: John
    echo $person->age;  // Outputs: 30

    //4.Methods: Methods are functions that belong to a class. They define the behavior or actions that an object of the class can perform.
    class Animals {
        public function makeSound() {
            return "Some generic sound";
        }
    }
    
    $animal = new Animals();
    echo $animal->makeSound(); // Outputs: Some generic sound

    //5.Constructor and Destructor: 
        //i. Constructor: A special method called when an object is instantiated. It is usually used for initializing properties.
        //ii. Destructor: A special method called when an object is destroyed.
        class Book {
            public $title;
            public $author;
        
            // Constructor
            public function __construct($title, $author) {
                $this->title = $title;
                $this->author = $author;
            }
        
            // Destructor
            public function __destruct() {
                echo "The book '{$this->title}' is being destroyed.";
            }
        }
        
        $book = new Book("1984", "George Orwell");
        echo $book->title; // Outputs: 1984
        // Destructor is called when the script ends or the object is no longer needed
    
    //6.Visibility: Visibility defines the accessibility of properties and methods. PHP supports three visibility keywords:

        //i. public: The property or method can be accessed from anywhere.
        //ii. protected: The property or method can be accessed within the class and by classes derived from that class.
        //iii. private: The property or method can only be accessed within the class.
        class Vehicle {
            public $make;
            protected $model;
            private $year;
        
            public function setYear($year) {
                $this->year = $year;
            }
        
            public function getYear() {
                return $this->year;
            }
        }
        
        $vehicle = new Vehicle();
        $vehicle->make = "Ford";    // Allowed
        // $vehicle->model = "Focus"; // Error: Cannot access protected property
        // $vehicle->year = 2021;     // Error: Cannot access private property
        $vehicle->setYear(2021);     // Allowed
        echo $vehicle->getYear();    // Outputs: 2021

    //7. Inheritance: Inheritance allows a class (child class) to inherit properties and methods from another class (parent class).

        //Parent Class:
        class Animal {
            public function makeSound() {
                return "Some generic sound";
            }
        }

        //. Child Class:
        class Dog extends Animal {
            public function makeSound() {
                return "Bark";
            }
        }
        
        $dog = new Dog();
        echo $dog->makeSound(); // Outputs: Bark

    //8.Polymorphism: Polymorphism allows methods to do different things based on the object it is acting upon. It can be achieved using method overriding.
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

    //9.Abstract Classes and Interfaces: 
        //i. Abstract Class: Cannot be instantiated and can have abstract methods that must be implemented by subclasses.
        abstract class Animalss {
            abstract public function makeSound();
        }
        
        class Dogs extends Animal {
            public function makeSound() {
                return "Bark";
            }
        }
        
        $dog = new Dogs();
        echo $dogs->makeSound(); // Outputs: Bark
        
        //ii. Interface: Defines a contract that implementing classes must follow.
        interface Movable {
            public function move();
        }
        
        class Cars implements Movable {
            public function move() {
                return "Car is moving";
            }
        }
        
        $car = new Cars();
        echo $car->move(); // Outputs: Car is moving

        
        
    
    
        
        
        
        


?>