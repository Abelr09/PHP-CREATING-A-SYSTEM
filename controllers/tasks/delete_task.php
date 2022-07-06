<?php
include "../../db/db.php";
$id = $_GET["id"];

$query = "DELETE FROM tasks WHERE id = '$id'";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);

if ($response) {
    echo 'Delete task';
} else {
    echo 'Try again after';
}