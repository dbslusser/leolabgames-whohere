<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WhoHere - connect</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
<!--    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
<!--    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#id_navigation').load('navbar.htm');
            $('#id_footer').load('footer.htm');
        });
    </script>

</head>

<?php //include("card_submit.php"); ?>
<?
if( $_POST )
{
    $con = mysql_connect("localhost","leolab5_test","test123");

    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("comments", $con);

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

    $query = "
  INSERT INTO `leolab5_mysite`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

    mysql_query($query);

    echo "<h2>Thank you for your Comment!</h2>";

    mysql_close($con);
}
?>



<body class="background1">
<!-- Page Navigation -->
<div id="id_navigation"></div>

<!-- Main Content -->
<br>
<div class="container background1">
    <div class="site-heading">
        <h2 style="color:yellow;">Have an <b>awesome</b> card idea? Submit it below!</h2>
        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form>
                        <div class="form-group">
                            <label for="cardText">Your Card</label>
                            <input type="text" required="true" class="form-control" id="id_input_card_text" placeholder="card text">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email address</label>
<!--                            <input type="email" class="form-control" id="id_user_email" placeholder="Email">-->
                            <input type="text" class="form-control" id="id_user_email" placeholder="Email">

                        </div>
                        <div class="form-group">
                            <label for="submittedBy">Submitted by</label>
                            <input type="text" class="form-control" id="id_submitted_by" placeholder="how to refer you">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> ok to reference
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <p class="wh-subtle">
            ** email is optional. Feel free to add it if you'd like updates on future expantions and if your submission was used.
            <br>
            ** click 'ok to reference' if you'd like your credit for your submission. We may use it in a future expantion. If used, we'll reference you by your entry in the 'submitted by' box. Feel free to use your name, social handle, nickname, or however you'd like to see yourself in print. :)
        </p>
    </div>

    <!-- footer -->
    <div id="id_footer"></div>

</body>

</html>
