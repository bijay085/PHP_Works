<?php

$servername = "localhost" ;
$username = "root";
$password = "";

//connection to db
$conn = mysqli_connect($servername, $username, $password);


//creating a db ::::
$sql = "CREATE DATABASE db_user";  //query is written and we need to execute query..
mysqli_query($conn, $sql);

echo "Database is created.";

if(!$conn){
    die("We are failed to connect with database.");
}
else
{
    echo "You are connected";
}

?>