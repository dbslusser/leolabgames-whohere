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

<?php include("card_submit.php"); ?>


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
                    <form method='post'>
                        <div class="form-group">
                            <label for="cardText">Your Card</label>
                            <input type='text' class="form-control" name='card' id='card' placeholder="your card text" required="true"/><br />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type='email' class="form-control" name='email' id='email' placeholder="your email (if you'd like updates)"/><br />
                        </div>
                        <div class="form-group">
                            <label for="user">User reference</label>
                            <input type='text' class="form-control" name='user' id='user' placeholder="how to reference you (if you'd like your reference on the card"/><br />
                        </div>
                        <div class="form-group">
                            <label for="reference">Ok to reference</label>
                                <input type='hidden' class="form-control" name='reference_ok' id='reference_ok' value="0"/>
                                <input type='checkbox' class="form-control" name='reference_ok' id='reference_ok' value="1" align="left"/>
                        </div>

                        <br/>
                        <button type="submit" value="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <p class="wh-subtle">
            ** email is optional. Feel free to add it if you'd like updates on future expansions and if your submission was used.
            <br>
            ** click 'ok to reference' if you'd like your credit for your submission. We may use it in a future expansion. If used, we'll reference you by your entry in the 'submitted by' box. Feel free to use your name, social handle, nickname, or however you'd like to see yourself in print. :)
        </p>
    </div>

    <!-- footer -->
    <div id="id_footer"></div>

</body>

</html>
