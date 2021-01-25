<?php

function CreateDb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bookstrore";
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $sql = "CREATE DATABASE IF NOT EXISTS  $dbname";
    if (mysqli_query($conn, $sql)) {
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        $sql="CREATE TABLE IF NOT EXISTS books(
            id INT(6) not null AUTO_INCREMENT PRIMARY KEY,
            bookname varchar(30) not null,
            authorname varchar(30) not null,
            price float(10) not null

        )";
        if (mysqli_query($conn, $sql)) {
            return $conn;
          } else {
            echo "Error creating table: " . mysqli_error($conn);
          }
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}