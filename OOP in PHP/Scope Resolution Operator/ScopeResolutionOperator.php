<?php
/* 
- The '::' in PHP is known as the Scope Resolution Operator.
- It is used to access static methods, static properties, and constants of a class, as well as to call a parent class's method from within a child class.
*/

    //i. Accessing Static Methods and Properties: When a method or property is declared as static, you don't need to create an instance of the class to access it. Instead, you can use the :: operator.

    class MyClass {
        public static $myStaticProperty = 'Hello, World!'; //static member/property
    
        public static function myStaticMethod() //static function/method
        {
            return 'This is a static method';
        }
    }
        // Accessing static property
    echo MyClass::$myStaticProperty; // Outputs: Hello, World!
        // Accessing static method
    echo MyClass::myStaticMethod(); // Outputs: This is a static method
    echo "<br/><br/>";




    //ii. Accessing Class Constants: You can also use the :: operator to access constants defined within a class.
    class MyClassConst {
        const MY_CONSTANT = 'Some constant value';
    }
    
    echo MyClassConst::MY_CONSTANT; // Outputs: Some constant value
    echo "<br/><br/>";


    

    //iii. Calling Parent Class Methods: In inheritance, when you want to call a method from the parent class inside a child class, you can use parent:: followed by the method name.
    class ParentClass {
        public function myMethodOfParent() {
            return 'Parent method';
        }
    }
    
    class ChildClass extends ParentClass {
        public function myMethodOfChild() {
            return parent::myMethodOfParent() . ' and Child method';
        }
    }
        //Creatung object of child
    $obj = new ChildClass();
    echo $obj->myMethodOfChild(); // Outputs: Parent method and Child method
    echo "<br/><br/>";
    



    //iv. Late Static Binding: In object-oriented PHP, the :: operator is also used with self::, parent::, and static:: to refer to the class that was originally called, especially in cases involving inheritance. This is known as 'Late Static Binding'.
    class A {
        public static function who() {
            echo __CLASS__; //__CLASS__ -> define which class the method is from
        }
    
        public static function test() {
            static::who(); // Late static binding
        }
    }
    
    class B extends A {
        public static function who() {
            echo __CLASS__;
        }
    }
    A::test(); // Outputs: A
    B::test(); // Outputs: B
    



?>