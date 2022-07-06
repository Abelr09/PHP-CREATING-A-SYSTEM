<?php
include "../../db/db.php";
$user_id = $_POST["user_id"];
$boss_id = $_POST["boss_id"];
$description = $_POST["description"];

$query = "INSERT INTO tasks (user_id, boss_id, description) VALUE ($user_id, $boss_id,'$description') ";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo "Save task";
} else {
    echo "Try again after";
}