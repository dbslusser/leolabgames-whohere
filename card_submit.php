<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if( $_POST )
{
    $con = mysqli_connect("localhost","leo","leo","test");

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $users_card_text = $_POST['card'];
    $users_email = $_POST['email'];
    $users_submitted_by = $_POST['user'];
    $users_reference = $_POST['reference_ok'];

    $users_card_text = mysql_real_escape_string($users_card_text);
    $users_email = mysql_real_escape_string($users_email);
    $users_submitted_by = mysql_real_escape_string($users_submitted_by);
    $users_reference = mysql_real_escape_string($users_reference);

    $query = "INSERT INTO `test`.`user_cards` (`id`, `card`, `email`, `user`, `reference_ok`, `timestamp`)
        VALUES (NULL, '$users_card_text', '$users_email', '$users_submitted_by', '$users_reference', CURRENT_TIMESTAMP);";

    if ($con->query($query) === TRUE) {
        echo "New record created successfully";
        ?>
        <script language="javascript" type="text/javascript">
            $(document).ready(function(){
                $('#id_modalResults').modal('show');
            });
//            alert("done!");
        </script>
        <?php


    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
