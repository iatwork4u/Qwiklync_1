<?PHP
/*
Author: iatwork4u
*/

include("db-support/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $query=mysqli_query("SELECT * FROM users WHERE password ='$password' AND (username = '$email' OR mobno = '$uname') AND pwd='$password' ");

    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $email and $password, table row must be 1 row

    if($count == 1) {
        session_start("username");
        $_SESSION['login_user'] = $username;
//if user is valid goto resume-page.php page
        header("location: resume-page.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!--
Author: iatwork4u
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Qwiklync | Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Qwiklync Login page">
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
    <link href="css/left-menu-bar.css" rel="stylesheet">
    <script src="js/left-menu-bar.js"></script>

</head>
<body>
<!-- left menu bar start -->
<div id="wrapper">
    <div class="overlay"></div>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Qwiklync
                </a>
            </li>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Post <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Select your option</li>
                    <li><a href="job-post.html">Recruiter</a></li>
                    <li><a href="job-post.html">Individual</a></li>
                    <!--	<li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li> -->
                </ul>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="https://twitter.com/Qwiklync">Follow me</a>
            </li>
        </ul>
    </nav>

    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <!-- left menu bar End -->

        <!-- top nav bar start -->
        <nav id= "cont_nav" class="navbar navbar-default" role="navigation"
             style ="background-color: #276090 !important;
				border-color: #276090;
				border-radius: 0px;
				min-height: auto;">
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
                                <li><a href="location.html">Post Jobs</a></li>
                                <li><a href="location.html">Search Jobs</a></li>
                                <!--	<li><a href="location.html">Contract Jobs</a></li>
                                                                <li><a href="location.html">Walkin Jobs</a></li>
                                                                <li><a href="location.html">Jobs by Location</a></li>
                                                                <li><a href="location.html">Jobs by Function</a></li>
                                                                <li><a href="location.html">Jobs by Industry</a></li>
                                                                <li><a href="location.html">Jobs by Company</a></li> -->
                            </ul>
                        </li>


                        <li><a href="register.php"> Register </a></li>
                        <li><a href="login.php"> Login </a></li>
                        <li><a href="upload-resume.html"> Resume </a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!-- Top nav bar End -->

        <!-- Banner start -->
        <div id="main1" class="banner_1">
            <div class="container">

            </div>
        </div>
        <!-- banner end -->

        <!-- Page content start -->
        <div class="container" align="center">
            <div class="single">
                <!-- Login form -->
                <div id='fg_membersite'>
                    <div class="col-md-5">
                        <div class="login-form-section">
                            <div class="login-content">
                                <form id='login' action='' method='post' accept-charset='UTF-8'>
                                    <div class="section-title">
                                        <h3>LogIn to your Account</h3>
                                    </div>
                                    <div class="textbox-wrap">
                                        <div class="input-group">
                                            <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                            <input id="username" type="text" required="required" class="form-control" placeholder="Email / Mobile no" value="" maxlength="128">
                                        </div>
                                    </div>
                                    <div class="textbox-wrap">
                                        <div class="input-group">
                                            <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                            <input id="password" type="password" required="required" class="form-control " placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                                <div class="forgot">
                                    <div class="login-check">
                                        <label class="checkbox1"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                                    </div>
                                    <div class="login-para">
                                        <p><a href="forgot-password.php"> Forgot Password? </a></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="login-btn">
                                    <input type="submit" value="Log in">
                                    <p>Don't have an Account? <a href="register.php"> Register Now!</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- client-side Form Validations:
                Uses the excellent form validation script from JavaScript-coder.com-->

        <script type='text/javascript'>

            var frmvalidator  = new Validator("login");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("username","req","Please provide your Email or Mobile no");

            frmvalidator.addValidation("password","req","Please provide the password");

        </script>

        <!-- Page content end -->

        <!-- Footer start -->
        <div id="main3" class="footer">
            <div class="container">
                <div class="col-md-3 grid_3">
                    <h4>Navigate</h4>
                    <ul class="f_list f_list1">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login.php">Sign In</a></li>
                        <li><a href="register.php">Join Now</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                    <ul class="f_list">
                        <li><a href="features.html">Features</a></li>
                        <li><a href="terms.html">Terms of use</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="job-post.html">Post a Job</a></li>
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
                    <form>
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="button" class="btn red">Subscribe now!</button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <!-- lower footer -->
        <div id="main4" class="footer_bottom">
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
        <!-- Footer End -->

    </div>
</div>

</body>
</html>
