<?php
include "../../db/db.php";
$name = $_POST["name"];
$lastname = $_POST["lastname"];

$query = "INSERT INTO users (name, lastname) values ('$name', '$lastname')";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "Save the user";
} else {
    echo "Try again after";
}