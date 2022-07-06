<?php
include "../../db/db.php";

$query = "SELECT * FROM users ";
$connection = connect();
$response = mysqli_query($connection, $query);
mysqli_close($connection);

?>


<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>

                <th>Lastname</th>
                <th>Opcions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($response)) {
                echo "
        <tr>
        <th>
        $row[1]
        </th>
        <th>
        $row[2]
        </th>
        <th>    <a href = '/proyecto_abel/public/users/edit_user.php?id=$row[0]'>Edit</a>
        </th>
        <th>
                <a href = '/proyecto_abel/controllers/users/delete_user.php?id=$row[0]'>Delete</a>
        </th>
        </tr>
    ";
            }

            ?>
        </tbody>
    </table>
</div>
