<?php

include "../../db/db.php";

$query = "SELECT * FROM 'tasks' WHERE id= '$id'";
$connection = connect();
$response = mysqli_query($connection,$query);
mysqli_close($connection);
 if($response){
    echo "Saved Task";
 }else{
    echo "Try again later";
 }

