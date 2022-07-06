<?php
include "../../db/db.php";
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$query = "INSERT INTO bosses (name, lastname) VALUES ('$name', '$lastname')";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "Save boss";
} else {
    echo "Try again after";
}