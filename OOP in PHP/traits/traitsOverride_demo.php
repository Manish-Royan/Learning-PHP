<?php

trait parentCompany1 {
    function getTotalEmployee ()
    {
        echo 500;
    }
}
trait parentCompany2 {
    function getTotalEmployee () //both 'parentCompany1-2' have same method 
    {
        echo 700;
    }
}

class Company {
    use parentCompany1;
    
    use parentCompany2 {
        parentCompany1::getTotalEmployee insteadof parentCompany2; //;parentCompany1' will be called instead of ParentCompany2
        parentCompany2::getTotalEmployee as getTotalEmployee2; //calling the method of 'parentCompany2' by changing it's method name
    }
   
}


$compony = new Company();

$compony->getTotalEmployee(); //output: 500 (because parentCOmpany1 will be called)
echo "<br/>";

$compony->getTotalEmployee2(); 
?>