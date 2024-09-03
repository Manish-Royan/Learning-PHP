# PHP Case Sensitivity

PHP is partially **case-sensitive**. Knowing what are case sensitive and what is not is very important to avoid syntax errors. In PHP, **keywords (e.g. `if`, `else`, `while`, `echo`, etc.), classes, functions, and user-defined functions are not case-sensitive**. PHP ***constructs***, ***function names***, ***class*** names are **case-insensitive**, whereas ***variables*** are **case-sensitive**.


If you have a function such as `echo`, you can use it as `ECHO`. It would work properly.

## 
### In the example below, all three `echo` statements below are equal and legal:

```PHP
<!DOCTYPE html>  
<html>  
    <body>  
        <?php  
            echo "Hello world using echo </br>";  
            ECHO "Hello world using ECHO </br>";  
            EcHo "Hello world using EcHo </br>";  
        ?>  
    </body>  
</html>  
```

#### Output:
```
Hello world using echo
Hello world using ECHO
Hello world using EcHo
```

## 
### Note: However; all variable names are case-sensitive!
Look at the example below; only the first statement will display the value of the $color variable! This is because $color, $COLOR, and $coLOR are treated as three different variables:

```PHP
<!DOCTYPE html>
<html>  
    <body>  
        <?php  
            $color = "black";  
            echo "My car is ". $ColoR ."</br>";  
            echo "My dog is ". $color ."</br>";  
            echo "My Phone is ". $COLOR ."</br>";  
        ?>  
    </body>  
</html>  
```

#### Output:
```
Notice: Undefined variable: ColoR in D:\xampp\htdocs\program\p2.php on line 8
My car is
My dog is black

Notice: Undefined variable: COLOR in D:\xampp\htdocs\program\p2.php on line 10
My Phone is
```

#### [NOTE: Only $color variable has printed its value, and other variables $ColoR and $COLOR are declared as undefined variables. An error has occurred in line 5 and line 7.]