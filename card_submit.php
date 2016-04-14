<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

if( $_POST )
{
    echo "ths is a test";
    $con = mysql_connect("localhost","leo","leoasd");

    if (!$con)
    {
        echo "could not connect!!!";
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("user_cards", $con);

    $users_card_text = $_POST['card'];
    $users_email = $_POST['email'];
    $users_submitted_by = $_POST['user'];
    $users_reference = $_POST['reference_ok'];

    $users_card_text = mysql_real_escape_string($users_card_text);
    $users_email = mysql_real_escape_string($users_email);
    $users_submitted_by = mysql_real_escape_string($users_submitted_by);
    $users_reference = mysql_real_escape_string($users_reference);

    $query = "
  INSERT INTO `test`.`user_cards` (`card`, `email`, `user`, `reference_ok`, `timestamp`)
        VALUES ('$users_card_text', '$users_email', '$users_submitted_by', '$users_reference', CURRENT_TIMESTAMP);";

    mysql_query($query);

    echo "<h2>Thank you for your Comment!</h2>";

    mysql_close($con);
}

?>