<?php

// connecting to the database ...
$servername = "localhost" ;
$username = "root";
$password = "";

// we had created a database now we want to create table inside that database so 
$database = "db_user";

// creating a connection 
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn){
    die("We are failed to connect with database.");
}
else
{
    echo "You are connected";
}

//creating a table ...
$sql = "CREATE TABLE tb_register (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    dob DATE,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


// executing the SQL query
if (mysqli_query($conn, $sql)) {
    echo "<br> Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// closing the connection
mysqli_close($conn);

?>