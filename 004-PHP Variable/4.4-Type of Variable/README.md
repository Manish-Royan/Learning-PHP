# Type of Variable

## 1. Dynamic Typing: 
### We can change a variable's type simply by assigning it a new value of a different type.
```PHP
$var = 10;       // $var is an integer
$var = "hello";  // Now $var is a string
```

## 2. Constant Variable -> constant variable can't be changed.
### To declare a constant we first intialised with 'define("const_variableName", "value"); value can be interger or string or any type
```PHP
 define("constant_S", "Hello");
echo "<h3>".constant_S."</h3>";
define("const_num", 5);
echo "<h3>".const_num."</h3>";
```


## 3. Type Juggling:
### PHP automatically converts variables between different types as needed, depending on the context in which they are used. For example, if you use a string in an arithmetic operation, PHP will convert it to a number.
```PHP
$a = "5";
$b = 2;
$result = $a + $b;  // $result is 7 (string "5" is converted to integer)
```

## 4. No Explicit Declarations:
### We don’t need to explicitly declare a variable's type when you create it, which can make coding faster and more flexible.
```PHP
$name = "Alice";  // No type declaration needed
```

## 5.Variable Variables: 
### PHP allows us to use a variable's value as the name of another variable using variable variables. This is achieved by using double dollar signs ($$) followed by the name of the variable containing the target variable's name.
```PHP
$varName = "message";
$$varName = "Hello, World!";  // Creates $message variable with value "Hello, World!"
    
echo $message;  // Outputs: Hello, World!
```

## 6. Assign Multiple Values
```PHP
$x = $y = $z = "Fruit";
```

## 7. Array: 
### A collection of values.
```PHP
$arrayVar = array("apple", "banana", "cherry");
```

## 8. Object:
### An instance of a class.
```PHP
class Car {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }
}

$myCar = new Car("red");
```

## 9.NULL:
### A variable with no value.
```PHP
$nullVar = NULL;
```