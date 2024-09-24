<?php
/*

- Method chaining is a programming technique used in object-oriented programming where multiple methods are called on the same object in a single statement. This is done by having each method return the object itself (usually using $this), allowing subsequent methods to be called on that same object.


* How Method Chaining Works in PHP
→ In PHP, method chaining is typically implemented by returning $this from methods. Here’s a simple example to illustrate the concept.

*/


//Class Definition

class User {
    private $firstName;
    private $lastName;
    private $email;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this; // Return the current object
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this; // Return the current object
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this; // Return the current object
    }

    public function getUserInfo() {
        return "Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
    }
}


//Using Method Chaining

$user = new User();

$userInfo = $user->setFirstName('John')
                 ->setLastName('Doe')
                 ->setEmail('john.doe@example.com')
                 ->getUserInfo();

/*
[Explainition
-> `setFirstName('John')`:
    - Sets the first name to "John".
    - Returns the current `User` object ($this), allowing the next method to be called on it.

-> `setLastName('Doe')`:
    - Sets the last name to "Doe".
    - Returns the current `User` object, continuing the chain.

-> `setEmail('john.doe@example.com')`:
    - Sets the email to "john.doe@example.com".
    - Returns the current `User` object.

-> `getUserInfo()`:
    - Retrieves the user information in a formatted string.
]
*/

echo $userInfo; // Outputs: Name: John Doe, Email: john.doe@example.com
//Finally, the `getUserInfo()` method returns the string containing the user's full name and email, which is then printed.
?>



<?php
/*

* Why Use Method Chaining?
- Conciseness: Allows multiple operations to be performed on an object in a single statement, making the code more compact.
- Readability: The chain of methods can be read from left to right in a logical sequence, which can make the code more intuitive.
- Fluency: Creates a "fluent interface" that allows for smoother and more natural syntax, especially useful in domain-specific languages (DSLs).


* When to Use Method Chaining
Method chaining is particularly useful when:
- You have an object that requires multiple steps of configuration or initialization.
- You want to improve the readability and flow of your code.
- You are working with builder patterns or other situations where sequential method calls are natural.


// Summary: Method chaining in PHP allows multiple methods to be called on the same object in a single statement, improving the conciseness and fluency of your code. It’s implemented by having each method return `$this`, the current object, allowing the chain to continue.
*/
?>