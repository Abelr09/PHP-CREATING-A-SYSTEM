<?php
include "../../db/db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];

$query = "UPDATE bosses SET name='$name', lastname='$lastname' WHERE id='$id'";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "Updeted boss";
} else {
    echo "Try again after";
}