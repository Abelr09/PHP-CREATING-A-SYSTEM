<?php
include "../../db/db.php";
$id = $_GET["id"];

$query = "DELETE FROM bosses WHERE id = '$id'";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "The boss was deleted successfully";
} else {
    echo "Try again after";
}