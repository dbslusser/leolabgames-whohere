<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WhoHere</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/images/question-01.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/whohere.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- animate.css: http://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Social-feed css -->
    <link href="social-feed-gh-pages/css/jquery.socialfeed.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#id_navigation').load('navbar.htm');
            $('#id_footer').load('footer.htm');
        });
    </script>

    <!-- jQuery -->
    <script src="social-feed-gh-pages/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Codebird.js - required for TWITTER -->
    <script src="social-feed-gh-pages/bower_components/codebird-js/codebird.js"></script>
    <!-- doT.js for rendering templates -->
    <script src="social-feed-gh-pages/bower_components/doT/doT.min.js"></script>
    <!-- Moment.js for showing "time ago" -->
    <script src="social-feed-gh-pages/bower_components/moment/min/moment.min.js"></script>
    <!-- Social-feed js -->
    <script src="social-feed-gh-pages/js/jquery.socialfeed.js"></script>
    <script>
        $(document).ready(function() {

            var updateFeed = function() {
                var initialQuery = "@whoheregames, #whohere" //$('#query').val();
                initialQuery = initialQuery.replace(" ", "");
                var queryTags = initialQuery.split(",");
                $('.social-feed-container').socialfeed({
                    // FACEBOOK
                    facebook: {
                        accounts: queryTags,
                        limit: 50,
                        access_token: '150849908413827|a20e87978f1ac491a0c4a721c961b68c'
                    },
                    // GOOGLEPLUS
                    google: {
                        accounts: queryTags,
                        limit: 50,
                        access_token: 'AIzaSyDAelFmJhg6BSUbSLe8UT7s-G53tL4_KRg'
                    },
                    // Twitter
                    twitter: {
                        accounts: queryTags,
                        limit: 50,
                        consumer_key: 'qzRXgkI7enflNJH1lWFvujT2P', // make sure to have your app read-only
                        consumer_secret: '8e7E7gHuTwyDHw9lGQFO73FcUwz9YozT37lEvZulMq8FXaPl8O', // make sure to have your app read-only
                    },
                    // VKONTAKTE
//                vk: {
//                    accounts: queryTags,
//                    limit: 2,
//                    source: 'all'
//                },
                    // INSTAGRAM
                    instagram: {
                        accounts: queryTags,
                        limit: 50,
                        client_id: 'aaddb80fdc0e4f398498ae46e15ca98c',
                        access_token: '77f8b56402c14c9e89245dd79b19ae59'
//                        access_token: '3271638171.1677ed0.edaa2aae507b4886b065138b35dec458'
                    },

                    // GENERAL SETTINGS
                    length: 200,
                    show_media: true,
                    // Moderation function - if returns false, template will have class hidden
                    moderation: function(content) {
                        return (content.text) ? content.text.indexOf('fuck') == -1 : true;
                    },
                    //update_period: 5000,
                    // When all the posts are collected and displayed - this function is evoked
                    callback: function() {
                        console.log('all posts are collected');
                    }
                });
            };

            updateFeed();
            $('#button-update').click(function() {
                //first, get rid of old data/posts.
                $('.social-feed-container').html('');

                //then load new posts
                updateFeed();
            });

        });

        $('#test').find('div').each(function(){
            var innerDivId = $(this).attr('id');
        });
    </script>

</head>

<?php include("card_submit.php"); ?>
<?php include("email_submit.php"); ?>

<body class="background1">
    <!-- Page Navigation -->
    <div id="id_navigation"></div>

    <!-- Main Content -->
    <div class="container margin-bottom-40">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="wh-title-01">Who Here...</h2>
                Wants to be in the know?<br><a href="" data-toggle="modal" data-target="#submitEmailModal"  class="wh-subtitle1">Join the WhoHere? mail list!</a>
            </div>
            <div class="col-sm-6">
                <h2 class="wh-title-01">Who Here...</h2>
                Shares the most?<br>#WhoHere and share your moments :)
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="wh-title-01">Who Here...</h2>
                Likes cool content?<br>Follow us! @WhereHereGames&nbsp;
                <a href="https://www.instagram.com/whoheregames/" target="_blank" title="#whhoere" class="hvr-float-shadow"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
                <a href="https://www.facebook.com/whoheregames" target="_blank" title="#whohere" class="hvr-float-shadow"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>&nbsp;
                <a href="https://twitter.com/whoheregames" target="_blank" title="#whohere" class="hvr-float-shadow"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-6">
                <h2 class="wh-title-01">Who Here...</h2>
                Makes the best WhoHere cards?<br>
                <a href="" data-toggle="modal" data-target="#submitCardModal" class="wh-subtitle1">Submit yours here!</a>
            </div>
        </div>
    </div>

    <!-- social feed -->
    <div class="wh-article-wrapper">
        <article>
            <ul class="social-feed-container flex-container wrap"></ul>
        </article>
    </div>




    <!-- Card submit modal -->
    <div class="modal fade" id="submitCardModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header background1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title"><b>Submit your card!</b></h2>
                </div>
                <div class="modal-body background1">
                    <div class="row">
                        <div class="Absolute-Center is-Responsive">
                            <div id="logo-container"></div>
                            <div class="col-sm-10 col-md-8 col-md-offset-2">
                                <br>
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
                <div class="modal-footer background1">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- MODAL: email list -->
    <div class="modal fade" id="submitEmailModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header background1">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title"><b>Submit your card!</b></h2>
                </div>
                <div class="modal-body background1">
                    <div class="row">
                        <div class="Absolute-Center is-Responsive">
                            <div id="logo-container"></div>
                            <div class="col-sm-10 col-md-8 col-md-offset-2">
                                <br>
                                <form method='post' id="id_emailForm">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input class="form-control wh-form-element" type='email' name='email' id='email' placeholder="your email" required="true"/>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control wh-form-element" type='text' name='user' id='user' placeholder="your name" required="true"/>
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
                        ** email is for updates regarding WhoHere Games only. We will never spam you.
                    </p>
                </div>
                <div class="modal-footer background1">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>





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






    <!-- footer -->
    <div id="id_footer"></div>
</body>

</html>
