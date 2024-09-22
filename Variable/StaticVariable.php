<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    //Static variables in PHP are variables that retain their value even after the function in which they are declared has finished executing. They are useful when you need to keep track of information between function calls without using global variables. 

    /* Let's delve into the details of static variables:
        *Static variables are declared inside a function using the `static` keyword.
        *They are initialized only once and retain their value between multiple function calls.
    */

    function counter() {
        static $count = 0; // Static variable
        $count++;
        echo $count . "\n";
    }
    counter(); // Outputs: 1
    counter(); // Outputs: 2
    counter(); // Outputs: 3

    /* In this example:

        *The static variable `$count` is initialized only once.
        *Each time the `counter()` function is called, `$count` retains its value from the previous call and increments by `1`.
    */




    //Use Cases: Static variables are often used in scenarios where you need to preserve state information across function calls without resorting to global variables.
    
    //Some common use cases include:
        //i. Counting Function Calls:
        function callTracker() {
            static $callCount = 0;
            $callCount++;
            return $callCount;
        }
        echo callTracker(); // Outputs: 1
        echo callTracker(); // Outputs: 2
        
        //ii. Caching Calculated Results:
        function factorial($n) {
            static $cache = array(); // Cache results
            if (isset($cache[$n])) {
                return $cache[$n];
            }
            if ($n <= 1) {
                return 1;
            }
            $result = $n * factorial($n - 1);
            $cache[$n] = $result;
            return $result;
        }
        echo factorial(5); // Outputs: 120
        echo factorial(5); // Uses cached result: 120

        //ii. Persistent Configuration Settings:
        function getConfig() {
            static $config = null;
            if ($config === null) {
                // Load configuration settings
                $config = array("setting1" => "value1", "setting2" => "value2");
            }
            return $config;
        }
        $config = getConfig();
        print_r($config); // Outputs: Array ( [setting1] => value1 [setting2] => value2 )
        

        /* Comparison with Global Variables:
            * Scope: Static variables are limited to the function in which they are declared.Global variables can be accessed from anywhere in the script.
            
            * Safety: Static variables reduce the risk of unintended side effects that can occur with global variables, as they are only accessible within their declaring function.
    */
        
    
    ?>
</body>
</html>