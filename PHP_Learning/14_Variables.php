<?php

echo "There are 2 types varaibles in php.<br> They are <br> 1.Local variable <br> 2.Global Varaible. <br>";

$a= 10; //this is global varaible.

function f()  {
    $a=11; //this is local variable 
    echo $a . "<br>";

    echo "Now we are using global keyword that will indicate gloval variable. <br>";
    global $a;
    echo $a;

    
}

f();
?>