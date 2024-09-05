# PHP Variables Scope

The scope of a variable is defined as its range in the program under which it can be accessed. In other words, "The scope of a variable is the portion of the program within which it is defined and can be accessed."

## PHP has three types of variable scopes:

### i. Local variable: 
The variables that are declared within a function are called local variables for that function. These local variables have their scope only in that particular function in which they are declared. This means that **these variables cannot be accessed outside the function**, as they have local scope.

**A variable declaration outside the function with the same name is completely different from the variable declared inside the function**. Let's understand the local variables with the help of an example:

```PHP
<?php  
    function local_var()  
    {  
        $num = 45;  //local variable  
        echo "Local variable declared inside the function is: ". $num;  
    }  
    local_var();  
?>  
```

#### Output:
```
Local variable declared inside the function is: 45
```

```PHP
<?php  
    function mytest()  
    {  
        $lang = "PHP";  
        echo "Web development language: " .$lang;  
    }  
    mytest();  
    //using $lang (local variable) outside the function will generate an error  
    echo $lang;  
?>  
```
#### Output
```
Web development language: PHP
Notice: Undefined variable: lang in D:\xampp\htdocs\program\p3.php on line 28
```

### ii. Global variable:
The global variables are the variables that are declared outside the function. These variables can be accessed anywhere in the program. **To access the global variable within a function, use the `GLOBAL` keyword before the variable**. However, these variables can be directly accessed or used outside the function without any keyword. Therefore there is no need to use any keyword to access a global variable outside the function.

Let's understand the global variables with the help of an example:

```PHP
<?php  
    $name = "HERO";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?>  
```
#### Output:
```
Variable inside the function: HERO
Variable outside the function: HERO
```
#### [NOTE: Without using the `global` keyword, if we try to access a global variable inside the function, it will generate an error that the variable is undefined.]

```PHP
<?php  
    $name = "HERO";        //global variable  
    function global_var()  
    {  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
?>  
```
#### Output
```
Notice: Undefined variable: name in D:\xampp\htdocs\program\p3.php on line 6
Variable inside the function:
```
### Using $GLOBALS instead of global
PHP also stores all global variables in an array called `$GLOBALS[index]`. The *index* holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. Another way to use the global variable inside the function is predefined `$GLOBALS` array.
```PHP
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
```
#### Output:
```
15
```

```PHP
<?php  
    $num1 = 5;      //global variable  
    $num2 = 13;     //global variable  
    function global_var()  
    {  
            $sum = $GLOBALS['num1'] + $GLOBALS['num2'];  
            echo "Sum of global variables is: " .$sum;  
    }  
    global_var();  
?>  
```
#### Output:
```
Sum of global variables is: 18
```

### iii. Priority Scoop:
If two variables, *local* and *global*, have the same name, then the local variable has higher priority than the global variable inside the function.
```PHP
<?php  
    $x = 5;  
    function mytest()  
    {  
        $x = 7;  
        echo "value of x: " .$x;  
    }  
    mytest();  
?>  
```
#### Output:
```
Value of x: 7
```

#### [NOTE: local variable has higher priority than the global variable.]

### iv. Static variable:
Normally, **when a function is completed/executed, all of its variables are deleted**. However, sometimes we want a local variable NOT to be deleted. It is a feature of **PHP** to **delete the variable, once it completes its execution and memory is freed**. Sometimes we need to store a variable even after completion of function execution. Therefore, another important feature of variable scoping is **static variable**. We use the `static` keyword before the variable to define a variable, and this variable is called as *static variable*.

Static variables exist only in a local function, but it does not free its memory after the program execution leaves the scope. Understand it with the help of an example:
```PHP
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 
```
#### Output:
```
0
1
2
```

```PHP
<?php  
    function static_var()  
    {  
        static $num1 = 3;       //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in non-static variable  
        $num1++;  
        //increment in static variable  
        $num2++;  
        echo "Static: " .$num1 ."</br>";  
        echo "Non-static: " .$num2 ."</br>";  
    }  
      
//first function call  
    static_var();  
  
    //second function call  
    static_var();  
?>  
```

#### Output:
```
Static: 4
Non-static: 7
Static: 5
Non-static: 7
```
#### [NOTE: We have to notice that `$num1` regularly increments after each function call, whereas `$num2` does not. This is why because `$num1` is not a static variable, so it freed its memory after the execution of each function call.]