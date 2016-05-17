<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if( $_POST )
{
    $servername = "localhost";
    $username = "leo";
    $password = "leo";
    $dbname = "test";
    $table = "email_list";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $users_email = mysqli_real_escape_string($con, trim($_POST['email']));
    $users_user = mysqli_real_escape_string($con, trim($_POST['user']));

    $query = "INSERT INTO `$dbname`.`$table` (`id`, `email`, `user`, `timestamp`)
        VALUES (NULL, '$users_email', '$users_user', CURRENT_TIMESTAMP);";

    if ($con->query($query) === TRUE) {
        echo "email received!";
        ?>
        <script language="javascript" type="text/javascript">
            $(document).ready(function(){
                $('#id_modalResults').modal('show');
            });
        </script>
        <?php


    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
