<?php

echo "Multi dimension array <br>";

$mArr = array(
    array(1,3,4,11),
    array(5,6,0,34),
    array(7,41,24,73)
);

// echo var_dump($mArr) ;

echo $mArr[0][0] . "<br>"; 
echo $mArr[0][1];

echo "<br>Using loop to display all elements ; <br>";

for ($i=0; $i < count($mArr) ; $i++) { 
    echo var_dump($mArr[$i]) . "<br>";

}

echo "<br> printing the contents of array : <br>";
for ($i=0; $i < count($mArr) ; $i++) { 
    for ($j=0; $j <= count($mArr) ; $j++) { 
        # code...
        echo ($mArr[$i][$j]) . " ";
    }
    echo "<br>";

}
?>