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
        <h2 style="color:yellow;" align="center">Have an <b>awesome</b> card idea? Submit it below!</h2>
        <br><br>

        <div class="container">
            <div class="row">
                <div class="Absolute-Center is-Responsive">
                    <div id="logo-container"></div>
                    <div class="col-sm-10 col-md-8 col-md-offset-2">
                        <form method='post' id="id_cardForm">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input class="form-control wh-form-element" type='text' name='card' id='card' placeholder="your card text" required="true"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input class="form-control wh-form-element" type='email' name='email' id='email' placeholder="your email (if you'd like updates)" required="true"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control wh-form-element" type='text' name='user' id='user' placeholder="how to reference you (if you'd like your reference on the card)" required="true"/>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type='hidden' name='reference_ok' id='reference_ok' value="0"/>
                                    <input type="checkbox" name='reference_ok' id='reference_ok' value="1"> Okay to reference
                                </label>
                            </div>
                            <div class="form-group">
                                <br/>
                                <button type="submit" value="submit" class="btn btn-default btn-block wh-form-element">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <p class="wh-subtle margin-top-40"><br>
            ** email is optional. Feel free to add it if you'd like updates on future expansions and if your submission was used.
            <br>
            ** click 'ok to reference' if you'd like your credit for your submission. We may use it in a future expansion. If used, we'll reference you by your entry in the 'user reference' box. Feel free to use your name, social handle, nickname, or however you'd like to see yourself in print. :)
        </p>
    </div>











    <!-- footer -->
    <div id="id_footer"></div>


    <!-- MODAL: results -->
    <div class="modal fade" id="id_modalResults" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title wh-modal-title" id="id_modalResultsHeader">Submission Received</h4>
                </div>
                <div class="modal-body-scroll indent-1 wh-modal-body margin-top-20 margin-bottom-20" id="id_modalResultsBody" align="center">
                    <img src="./media/images/thumbsUpEmoji.jpg" align="center" width="75%" height="75%">
                    <br/>Thanks for sharing!
                </div>
                <div class="modal-footer">
                    <button id="id_modalResultsClose" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
