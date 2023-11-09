<?php

echo "Associative array : <br>";

$arr = array('red', 'blue', 'green');
echo "These are normal arrays. <br>";
for ($i=0; $i < count($arr) ; $i++) { 
    # code...
    echo "The colors are : ". $arr[$i] ."<br>" ;
}

$arr2 = array('ram' => 'red', 'hari' => 'blue', 'shyam' => 'green');

// how to get values 

echo $arr2['ram'];
echo $arr2['shyam'];
echo $arr2['hari'];

foreach ($arr2 as $key => $value) {
    # code...
    echo "<br> The color of $key is $value.";
}


?>