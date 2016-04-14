<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if( $_POST )
{
    $con = mysqli_connect("localhost","leo","leo","test");

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $users_name = $_POST['name'];
    $users_email = $_POST['email'];
    $users_website = $_POST['website'];
    $users_comment = $_POST['comment'];

    $users_name = mysql_real_escape_string($users_name);
    $users_email = mysql_real_escape_string($users_email);
    $users_website = mysql_real_escape_string($users_website);
    $users_comment = mysql_real_escape_string($users_comment);

    $articleid = $_GET['id'];
    if( ! is_numeric($articleid) )
        die('invalid article id');

    $query = "INSERT INTO `test`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

    if ($con->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

//    echo "<h2>Thank you for your Comment!</h2>";

    $con->close();
}
?>