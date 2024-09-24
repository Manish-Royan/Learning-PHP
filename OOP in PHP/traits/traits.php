<?php
/*
- In PHP, traits are a mechanism for code reuse in single inheritance languages such as PHP. They allow developers to include methods from multiple classes, providing a way to reuse code across different classes without resorting to inheritance.

* Why Use Traits?
→Traits are particularly useful when you want to share methods between classes that are not related by inheritance. PHP only allows a class to inherit from one other class (single inheritance), so traits offer a way to overcome this limitation.
*/


//i. Defining a Trait: A trait is similar to a class, but instead of being instantiated like a class, it's used to add functionality to classes.

trait Logger {
    public function log($message) {
        echo "Log message: $message";
    }
}





//ii. Using a Trait in a Class: To use a trait in a class, you include it using the use keyword.

class User {
    use Logger;

    public function createUser($name) {
        // User creation logic here
        $this->log("User $name created.");
    }
}

$user = new User();
$user->createUser("John Doe"); // Outputs: Log message: User John Doe created.

        /* In this example, the `User` class uses the `Logger` trait to gain access to the 
        `log()` method. */




//iii. Traits and Multiple Traits: You can use multiple traits in a single class.

trait Logger1 {
    public function log1($message1) {
        echo "Log: $message1";
    }
}

trait Notifier {
    public function notify($message1) {
        echo "Notify: $message1";
    }
}

class User1 {
    use Logger1, Notifier;

    public function createUser1($name1) {
        $this->log1("User $name1 created.");
        $this->notify("User $name1 created.");
    }
}

$user1 = new User1();
$user1->createUser1("John Doe");
// Outputs:
// Log: User John Doe created.
// Notify: User John Doe created.




//iv. Trait Methods Overriding: If a class uses a trait and also defines a method with the same name as a method in the trait, the class's method will override the trait's method.

trait Logger2 {
    public function log2($message2) {
        echo "Log from trait: $message2";
    }
}

class User2 {
    use Logger2;

    public function log2($message2) {
        echo "Log from class: $message2";
    }
}

$user2 = new User2();
$user2->log2("John Doe"); // Outputs: Log from class: John Doe




//v. Trait Method Conflict Resolution: If two traits used by a class have methods with the same name, PHP will throw a fatal error unless you resolve the conflict.

trait Logger3 {
    public function log3($message3) {
        echo "Log from Logger: $message3";
    }
}

trait FileLogger {
    public function log3($message3) {
        echo "Log from FileLogger: $message3";
    }
}

class User3 {
    use Logger3, FileLogger {
        FileLogger::log insteadof Logger3;
        Logger3::log as logLogger;
    }

    public function createUser3($name3) {
        $this->logLogger("User $name3 created.");
    }
}

$user3 = new User3();
$user3->log3("John Doe"); // Outputs: Log from FileLogger: John Doe
$user3->createUser3("Jane Doe"); // Outputs: Log from Logger: User Jane Doe created.



?>