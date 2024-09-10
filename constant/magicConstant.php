<?php
/*
Magic constants are the predefined constants in PHP which get changed on the basis of their use. They start with double underscore (__) and ends with double underscore.

They are similar to other predefined constants but as they change their values with the context, they are called magic constants.

[NOTE: The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.]
*/

// - There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__). All of the constants are resolved at compile-time instead of run time, unlike the regular constant. Magic constants are case-insensitive


    //1. __LINE__ : It returns the current line number of the file, where this constant is used.

    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>";  
    /* OUTPUT:
        Example for __LINE__

        You are at line number 4
    */


    //2. __FILE__ : This magic constant returns the full path of the executed file, where the file is stored. If it is used inside the include, the name of the included file is returned.

    echo "<h3>Example for __FILE__</h3>";    
    //print full path of file with .php extension    
    echo __FILE__ . "<br><br>";  

    /* Output:
        Example for __FILE__

        D:\xampp\htdocs\program\magic.php
    */



    //3.__DIR__ : It returns the full directory path of the executed file. The path returned by this magic constant is equivalent to dirname(__FILE__). This magic constant does not have a trailing slash unless it is a root directory.

    echo "<h3>Example for __DIR__</h3>";    
    //print full path of directory where script will be placed    
    echo __DIR__ . "<br><br>";  
    //below output will equivalent to above one.  
    echo dirname(__FILE__) . "<br><br>";    

    /* Output:

        Example for __DIR__

        D:\xampp\htdocs\program

        D:\xampp\htdocs\program
    */


    //4.  __FUNCTION__ : This magic constant returns the function name, where this constant is used. It will return blank if it is used outside of any function.
    echo "<h3>Example for __FUNCTION__</h3>";    
    //Using magic constant inside function.    
    function test(){    
        //print the function name i.e; test.   
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();    
      
    //Magic constant used outside function gives the blank output.    
    function test_function(){    
        echo 'Hie';    
    }    
    test_function();    
    //give the blank output.   
    echo  __FUNCTION__ . "<br><br>";  

    /* Output:

        Example for __FUNCTION__

        The function name is test

        Hie
    */

    /*ANOTHER SIMPLE EXAMPLE OF __FUNCTION__*/
    function myValue(){
        return __FUNCTION__;
      }
      echo myValue();


    //5. __CLASS__ : It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits.
    echo "<h3>Example for __CLASS__</h3>";    
    class JTP    
    {    
        public function __construct() {    
            ;    
    }    
    function getClassName(){    
        //print name of the class JTP.   
        echo __CLASS__ . "<br><br>";   
        }    
    }    
    $t = new JTP;    
    $t->getClassName();    
      
    //in case of multiple classes   
    class base  
    {    
    function test_first(){    
            //will always print parent class which is base here.    
            echo __CLASS__;   
        }    
    }    
    class child extends base    
    {    
        public function __construct() {    
            ;    
        }    
    }    
    $t = new child;    
    $t->test_first();    

    /*
        Example for __CLASS__

        JTP

        base
    */

?>