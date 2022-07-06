<?php
include "../../db/db.php";

$id = $_GET['id'];


$query = "DELETE FROM users WHERE id = $id";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "Delete";
} else {
    echo "Can't delete";
}