<?php
include "connect.php";
$sql="CREATE TABLE IF NOT EXISTS user1(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name1 VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    gender VARCHAR(255),
    password1 VARCHAR(255) NOT NULL ,
    registered_at DATETIME DEFAULT CURRENT_TIMESTAMP())";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("unable to create table");
    }
    echo "tabel created successfully";
    mysqli_close($conn)
    ?>
    