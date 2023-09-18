<?php

$connect = mysqli_connect(
    'db', 
    'admin',
    'password', 
    'php_docker' 
);

// if connection fails throw an error
if(!$connect){
    echo 'Connection error: ' . mysqli_connect_error();
}

$query = "SELECT * FROM  blog";

$response = mysqli_query($connect, $query);

echo "<h1> blog </h1>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<h2>".$i['title']."</h2>";
    echo "<p>".$i['content']."</p>";
    echo "posted: ".$i['date'];
    echo "<hr>";
}