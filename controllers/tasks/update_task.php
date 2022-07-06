<?php
include '../../db/db.php';
$id = $_POST['id'];
$user_id = $_POST["user_id"];
$boss_id = $_POST["boss_id"];
$description = $_POST["description"];

$query = "UPDATE FROM tasks SET  user_id='$user_id', boss_id='$boss_id', description='$description' WHERE id='$id'";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);
if ($response) {
    echo 'Update task';
} else {
    echo 'Try again after';
}