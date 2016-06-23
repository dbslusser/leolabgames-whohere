<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if( $_POST )
{
    $servername = "localhost";
    $username = "leolab5_usersub";
    $password = "usersub123";
    $dbname = "leolab5_whoHereUserSubmissions";
    $table = "user_cards";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $users_card_text = mysqli_real_escape_string($con, trim($_POST['card']));
    $users_email = mysqli_real_escape_string($con, trim($_POST['email']));
    $users_user = mysqli_real_escape_string($con, trim($_POST['user']));
    $users_reference = mysqli_real_escape_string($con, trim($_POST['reference_ok']));

    $query = "INSERT INTO `$dbname`.`$table` (`id`, `card`, `email`, `user`, `reference_ok`, `timestamp`)
        VALUES (NULL, '$users_card_text', '$users_email', '$users_user', '$users_reference', CURRENT_TIMESTAMP);";

    if ($con->query($query) === TRUE) {
        echo "New record created successfully";
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
