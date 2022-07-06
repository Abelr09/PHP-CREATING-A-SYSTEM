<?php
include "./db/db.php";

$connection = connect();
$query = "SELECT id, CONCAT(name, ' ', lastname) AS boss FROM bosses";
$bosses = mysqli_query($connection, $query);
$query = "SELECT id, CONCAT(name, ' ', lastname) AS user FROM users";
$users = mysqli_query($connection, $query);
mysqli_close($connection);

?>

<form action="/proyecto_abel/controllers/tasks/create_task.php" method="POST">
    <form action=""></form>
    <select name="cars" class="custom-select" name="user_id">
        <?php
        while ($user = mysqli_fetch_array($users)) {
            echo "
                    <option value= '$user[0]'>$user[1]</option>
                ";
        }
        ?>

    </select>
    <select name="cars" class="custom-select" name="boss_id">
        <?php
        while ($boss = mysqli_fetch_array($bosses)) {
            echo "
                    <option value= '$boss[0]'>$boss[1]</option>
                ";
        }
        ?>
    </select>
    <input type="text" name="description" placeholder="Description...">
    <input type="submit" class="btn btn-primary" value="Submit">
    <a href="./public/tasks/list_task.php"><i class="far fa-list-alt">List Tasks</i></a>

</form>
