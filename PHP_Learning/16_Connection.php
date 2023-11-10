<?php

echo "WElcome to joining of db with php <br>";
/*
There are 2 ways of connection to DB.
1. MYSqli extension
2. PDO  :php data object
PDO is again 2 types : a.procedural and b.object oriented*/

// MySqli extension way ::::: only work with sql.
// connecting to the database ...
$servername = "localhost" ;
$username = "root";
$password = "";

// creating a connection 
$conn = mysqli_connect($servername, $username, $password);


if(!$conn){
    die("We are failed to connect with database.");
}
else
{
    echo "You are connected";
}

?>