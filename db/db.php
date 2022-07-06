    <?php
    function connect()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "examen_techi";

        $conection = mysqli_connect($host, $user, $password, $database);
        return $conection;
    }