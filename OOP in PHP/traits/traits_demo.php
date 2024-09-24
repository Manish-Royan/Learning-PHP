<?php

trait parentCompany1 {
    function getTotalEmployee ()
    {
        echo 500;
    }
    function getTotalProject(){
        echo 850;
    }
}
trait parentCompany2 {
    function getTotalOffice ()
    {
        echo 50;
    }
}

class Company {
    use parentCompany1;
    use parentCompany2;
}


$compony = new Company();

$compony->getTotalEmployee(); echo "<br/>";
$compony->getTotalProject(); echo "<br/>";
$compony->getTotalOffice();
?>