<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WhoHere</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/images/base-00.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/whohere.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!--&lt;!&ndash; Custom Theme JavaScript &ndash;&gt;-->
    <!--<script src="js/clean-blog.min.js"></script>-->

    <!-- animate.css: http://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#id_navigation').load('navbar.htm');
            $('#id_footer').load('footer.htm');
        });
    </script>

</head>
<?php include("card_submit.php"); ?>

<div class="background1">
<!-- Page Navigation -->
<div id="id_navigation"></div>

<!-- Main Content -->
<br><br>

    <!-- Social Section -->
    <section id="social" class="about-section">
        <div class="row">
            <div class="col-sm-2">
                <small>
                <a class="page-scroll" href="#social">Social</a><br>
                <a class="page-scroll" href="#email">Email</a><br>
                <a class="page-scroll" href="#submit">Card Ideas</a><br>
                </small>
            </div>
            <div class="col-sm-10">
                <h2 style="color:yellow;">Who Here... hastags WhoHere?</h2>
                <p>share your best contact with #whohere</p>
                <p></p><br>
            </div>
        </div>
    </section>
    <br><hr class="divider1"><br>

    <!-- Email Section -->
    <section id="email" class="services-section">
        <div class="row">
            <div class="col-sm-2">
                <a class="page-scroll" href="#social">Social</a><br>
                <a class="page-scroll" href="#email">Email</a><br>
                <a class="page-scroll" href="#submit">Card Ideas</a><br>
            </div>
            <div class="col-sm-10">
                <h2 style="color:yellow;">Who Here...subscribes to the WhoHere email list</h2>
                <p>(for WhoHere updates only. We will never spam you)</p>
                <p></p>
            </div>
        </div>
    </section>
    <br><hr class="divider1"><br>

    <!-- Submit Section -->
    <section id="submit" class="content-section">
        <div class="row">
            <div class="col-sm-2">
                <a class="page-scroll" href="#social">Social</a><br>
                <a class="page-scroll" href="#email">Email</a><br>
                <a class="page-scroll" href="#submit">Card Ideas</a><br>
            </div>
            <div class="col-sm-10">
                <h2 style="color:yellow;">Who Here... has awesome ideas for WhoHere cards?</h2>
                <h2>share them here:</h2>
                <br>
            </div>
        </div>
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
                                <input class="form-control wh-form-element" type='email' name='email' id='email' placeholder="your email (if you'd like updates)"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control wh-form-element" type='text' name='user' id='user' placeholder="how to reference you (if you'd like your reference on the card)"/>
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
            <p class="wh-subtle margin-top-40"><br>
                ** email is optional. Feel free to add it if you'd like updates on future expansions and if your submission was used.
                <br>
                ** click 'ok to reference' if you'd like your credit for your submission. We may use it in a future expansion. If used, we'll reference you by your entry in the 'user reference' box. Feel free to use your name, social handle, nickname, or however you'd like to see yourself in print. :)
            </p>
        </div>
    </section>

<!--
<a class="twitter-timeline" href="https://twitter.com/search?q=%23whohere%20OR%20%23whoheregames%20since%3A2016-05-01" data-widget-id="735336947657379840">Tweets about #whohere OR #whoheregames since:2016-05-01</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->

<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<ul class="juicer-feed" data-feed-id="whohere-juicer"><h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1></ul>


<!-- footer -->
<div id="id_footer"></div>

</body>

</html>