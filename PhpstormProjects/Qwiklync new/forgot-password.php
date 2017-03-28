<?php

require_once('forgot_password_support/connect.php');
require('config.php');
require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $sql = "SELECT * FROM `login` WHERE email = '$email'";
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    if($count == 1){
        $r = mysqli_fetch_assoc($res);
        $password = $r['password'];
        $to = $r['email'];

        $subject = "Qwiklync : Your Recovered Password";

        $message = "Please use this password to login " . $password;
        //change the mail address of sender here
        $headers = "From : info@qwiklync.com";
        if(mail($to, $subject, $message, $headers)){
            echo "Your Password has been sent to your email id";
        }else{
            echo "Failed to Recover your password, try again";
        }

    }else{
        echo "User name does not exist in database";
    }
}
?>

<!--
Author: iatwork4u
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Qwiklync | Resume Upload </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Qwiklync">
    <meta name="author" content="Iatwork4u">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!----font-Awesome----->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"> <!-- favicon in the tab -->
    <!-- left menu bar -->
    <link href="css/leftmenu.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Logo --->
            <a class="navbar-brand" href="index.html"><img id="logo" src="images/Qwiklync-logo.png" alt="qwiklync_logo"/></a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="job-post.html">Post Jobs</a></li>
                        <li><a href="jobs.html">Search Jobs</a></li>
                        <!--	<li><a href="location.html">Contract Jobs</a></li>
                            <li><a href="location.html">Walkin Jobs</a></li>
                            <li><a href="location.html">Jobs by Location</a></li>
                            <li><a href="location.html">Jobs by Function</a></li>
                            <li><a href="location.html">Jobs by Industry</a></li>
                            <li><a href="location.html">Jobs by Company</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <!--	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="services.html">Action</a></li>
                                        <li><a href="services.html">Another action</a></li>
                                        <li><a href="services.html">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">One more separated link</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="services.html">Action</a></li>
                                        <li><a href="services.html">Another action</a></li>
                                        <li><a href="services.html">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">One more separated link</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="services.html">Action</a></li>
                                        <li><a href="services.html">Another action</a></li>
                                        <li><a href="services.html">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="services.html">One more separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li> -->
                    <!--    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
                             <ul class="dropdown-menu">
                                <li><a href="login.php">Recruiter Updates</a></li>
                                <li><a href="recruiters.html">Recruiters you are following</a></li>
                                <li><a href="codes.html">Shortcodes</a></li>
                             </ul>
                        </li> -->
                    <!--   <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                           <ul class="dropdown-menu">
                               <li><a href="jobs.html">Walk-ins</a></li>
                               <li><a href="jobs.html">Bpo Jobs</a></li>
                               <li><a href="jobs.html">Teaching Jobs</a></li>
                               <li><a href="jobs.html">Diploma Jobs</a></li>
                               <li><a href="jobs.html">Tech Support</a></li>
                               <li><a href="jobs.html">Finance Jobs</a></li>
                               <li><a href="jobs.html">Part time Jobs</a></li>
                               <li><a href="jobs.html">Health Care</a></li>
                               <li><a href="jobs.html">Hospitality</a></li>
                               <li><a href="jobs.html">Internships</a></li>
                               <li><a href="jobs.html">Research Jobs</a></li>
                               <li><a href="jobs.html">Defence Jobs</a></li>
                           </ul>
                       </li> -->
                <li><a href="register.php"> Register </a></li>
                <li><a href="login.php"> Login </a></li>
                <li><a href="upload-resume.html"> Resume </a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>

<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
             <!--   <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p> -->
            </div>
        </div>
    </div>
</div>

<div class="container" align="center">
    <div class="single">
        <div class="form-container">
            <!-- <h2>Upload Your Resume</h2> -->
            <h2> Forgot Password!!</h2>
            <div class="search_form1">
                <p>Password will be sent to your registered mail id</p>
                <p>Enter your registered mail id</p></br>

                <br action="">
                    <input type="text" class="text" placeholder=" " value="Registered Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"><br>
                    <input type="submit" value="Get Password" id="forgotpassword"> </br>


                <p>Got your password!!! Go to <a href="login.php">Login</a> Page</p>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="col-md-3 grid_3">
            <h4>Navigate</h4>
            <ul class="f_list f_list1">
                <li><a href="index.html">Home</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="login.php">Join Now</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <ul class="f_list">
                <li><a href="features.html">Features</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="jobs.html">Post a Job</a></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Follow us on</h4>
            <div class="social-icons">

                <ul class="nomargin">
                    <a href="https://www.facebook.com/qwiklyn/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                    <a href="https://twitter.com/Qwiklync"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                    <a href="https://plus.google.com/u/0/100640649378538958542?hl=en"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                    <a href="https://www.linkedin.com/company-beta/13197934/?pathWildcard=13197934"><i class="fa fa-linkedin-square fa-3x social-li" id="social"></i></a>
                </ul>

            </div>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Address</h4>
            <p>
                #32, Munirappa Garden,
                Sanjaynagar,
                Bangalore 560094
            </p>
        </div>
        <div class="col-md-3 grid_3">
            <h4>Sign up for our newsletter</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
            <form>
                <input type="text" class="form-control" placeholder="Enter your email">
                <button type="button" class="btn red">Subscribe now!</button>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- lower footer -->
<div class="footer_bottom">
    <div class="container">
        <div class="col-sm-2">
            <!--	<ul class="f_list2">
                  <li><a href="jobs.html">Russia Jobs</a></li>
                  <li><a href="jobs.html">Australia Jobs</a></li>
                  <li><a href="jobs.html">Srilanka Jobs</a></li>
                  <li><a href="jobs.html">Poland Jobs</a></li>
              </ul> -->
        </div>
        <div class="col-sm-2">
            <!--	<ul class="f_list2">
                  <li><a href="jobs.html">New Zealand Jobs</a></li>
                  <li><a href="jobs.html">Pakistan Jobs</a></li>
                  <li><a href="jobs.html">Srilanka Jobs</a></li>
                  <li><a href="jobs.html">Irland Jobs</a></li>
              </ul> -->
        </div>
        <div class="col-sm-2">
            <!--	<ul class="f_list2">
                  <li><a href="jobs.html">Canada Jobs</a></li>
                  <li><a href="jobs.html">Germany Jobs</a></li>
                  <li><a href="jobs.html">China Jobs</a></li>
                  <li><a href="jobs.html">Nepal Jobs</a></li>
              </ul> -->
        </div>
        <div class="col-sm-6 footer_text">
            <!--  <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p> -->
        </div>
        <div class="clearfix"> </div>
        <div class="copy">
            <p>Copyright © 2015 Qwiklync . All Rights Reserved . Design by <a href="#" target="_blank">iatwork4u</a> </p>
        </div>
    </div>
</div>
</body>
</html>