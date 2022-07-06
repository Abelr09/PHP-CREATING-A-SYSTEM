<?php
include "../../db/db.php";

$id = $_GET["id"];

$query = "SELECT * FROM bosses WHERE id= '$id'";
$connection = connect();
$response = mysqli_query($connection, $query);
$response = mysqli_fetch_array($response);
mysqli_close($connection);

?>

<form action= "/proyecto_abel/controllers/bosses/update_boss.php" method="POST">
    <input type="text" name="id" hidden value="<?php echo $response[0]; ?>">
    <input type="text" name="name" placeholder="Updated" value="<?php echo $response[1]; ?>">
    <input type="text" name="lastname" placeholder="Updated" value="<?php echo $response[2]; ?>">
    <input type="submit" value="Submit">
</form>


