<?php
include "../../db/db.php";

$connecti = connect();
$query = "SELECT tasks.id, tasks.description, CONCAT(users.name, ' ', users.lastname) AS user, CONCAT(bosses.name, ' ', bosses.lastname) AS boss FROM tasks INNER JOIN users ON tasks.user_id = users.id INNER JOIN bosses ON tasks.boss_id = bosses.id;";
$response = mysqli_query($connecti, $query);
mysqli_close($connecti);
?>
<div class="container">
    <table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th>Boss</th>
            <th>Description</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($response)) {
            echo "
                <tr>
                <th>$row[2]</th>
                <th>$row[3]</th>
                <th>$row[1]</th>
                <th> <a href = '/proyecto_abel/public/bosses/edit_boss.php?id=$row[0]'>Edit</a></th>;
                <th> <a href = '/proyecto_abel/controllers/bosses/delete_boss.php?id=$row[0]'>Delete</a></th>;
            </tr> 
                ";
        }


        ?>
    </tbody>
</table>
</div>