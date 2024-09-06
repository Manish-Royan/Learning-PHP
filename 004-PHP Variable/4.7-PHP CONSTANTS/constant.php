<?php
/*
PHP constants are name or identifier that can't be changed during the execution of the script.

Constants are similar to the variable except once they defined, they can never be undefined or changed. They remain constant across the entire program. PHP constants follow the same PHP variable rules. 

[NOTE: Unlike variables, constants are automatically global throughout the script.]

*/

// * PHP constants can be defined by 2 ways:

    //i.Using define() function: It defines constant at run time. 
        /*Syntax: define(name, value, case-insensitive) 
            i. name: It specifies the constant name.
            ii. value: It specifies the constant value.
            iii. case-insensitive: Specifies whether a constant is case-insensitive. Default value is false. It means it is case sensitive by default. 
        */

        define("MESSAGE","Hello PHP");  
        echo MESSAGE; //output: Hello PHP

        //Create a constant with case-insensitive name:
            define("MESSAGEs","Hello JavaTpoint PHP",true);//if 'true' then not case sensitive    
            echo MESSAGEs, "</br>";    
            echo messages;  

                /*OUTPUT;
                    Hello JavaTpoint PHP
                    Hello JavaTpoint PHP
                    */
        
            define("MSG","Hello JavaTpoint PHP",false);//case sensitive  
            echo MSG; //output: Hello JavaTpoint PHP
            echo msg;  //Notice: Use of undefined constant message - assumed 'message' in C:\wamp\www\vconstant3.php on line 35 message


    //ii.Using const keyword: PHP introduced a keyword const to create a constant. The const keyword defines constants at compile time. It is a language construct, not a function. The constant defined using const keyword are case-sensitive.

    const Dis="Hello const PHP";  
    echo Dis; //output: Hello const PHP


        //Constant() function: There is another way to print the value of constants using constant() function instead of using the echo statement.
            /* Syntax: constant (name)   */
        
        define("MSGs", "PHP");  
        echo MSGs, "</br>";  //output: PHP
        echo constant("MSGs");  //output: PHP
        //both are similar  

?>