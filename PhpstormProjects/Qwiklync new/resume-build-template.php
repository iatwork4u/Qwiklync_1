<!-- inline resume editing php code -->
<?php

if(!empty($_POST))
{
    /* database settings */
    include "db-support/config.php";
    foreach($_POST as $field_name => $val)
    {
        //clean post values
        $field_userid = strip_tags(trim($field_name));
        $val = strip_tags(trim(mysqli_real_escape_string($val)));

        //from the fieldname:user_id we need to get user_id
        $split_data = explode(':', $field_userid);
        $user_id = $split_data[1];
        $field_name = $split_data[0];
        if(!empty($user_id) && !empty($field_name) && !empty($val))
        {
            //update the values
            mysqli_query("UPDATE user_details SET $field_name = '$val' WHERE user_id = $user_id") or mysqli_error();

            echo "Updated";
        } else {
            echo "Invalid Requests";
        }
    }
} else {
    echo "Invalid Requests!!";
}
?>

<!--
Author: iatwork4u
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Qwiklync | Resume Building </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Qwiklync Resume building page">
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
                    Brand
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
                <div id="search_wrapper1">
                    <!--	<div id="search_form" class="clearfix">
                            <h1>Start your job search</h1>
                            <p>
                                <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                                <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                                <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                            </p>
                        </div> -->
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- Page content start -->
        <!-- Resume code start here -->
        <div class="wrapper">
            <div class="sidebar-wrapper">
                <div class="profile-container">
                    <img class="profile img-circle" name="propic" src="resume_build/assets/images/default-user-image.png" alt=""  />
                    <h1 class="name" name="name" contenteditable="true">NAME</h1>
                    <h3 class="tagline" name="designation" contenteditable="true"> DESIGNATION </h3>
                </div><!--//profile-container-->

                <div class="contact-container container-block">
                    <ul class="list-unstyled contact-list">
                        <li class="email" name="email1" contenteditable="true"><i class="fa fa-envelope" contenteditable="true"></i> yourname@email.com</a></li>
                        <li class="phone" name="mobno" contenteditable="true"><i class="fa fa-phone" contenteditable="true"></i> 0123 456 789</a></li>
                        <li class="website" name="website" contenteditable="true"><i class="fa fa-globe" contenteditable="true"></i> www.portfoliosite.com</a></li>
                        <li class="linkedin" name="linkedin" contenteditable="true"><i class="fa fa-linkedin" contenteditable="true"></i>linkedin profile</a></li>
                        <li class="github" name="git" contenteditable="true"><i class="fa fa-github" contenteditable="true"></i>github.com/username</a></li>
                        <!--    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li> -->
                    </ul>
                </div><!--//contact-container-->


                <div class="address-container container-block">
                    <h2 class="container-block-title">Address</h2>
                    <div class="item">
                        <h4 class="degree" name="housename" contenteditable="true">House no/name,</h4>
                        <h5 class="meta" name="streetname" contenteditable="true">Street name </h5>
                        <div class="time" name="place" contenteditable="true">Place - Pincode</div>
                    </div><!--//item-->
                </div><!--//education-container-->

                <div class="education-container container-block">
                    <h2 class="container-block-title">Education</h2>
                    <div class="item">
                        <h4 class="degree" name="degree1" contenteditable="true">DEGREE</h4>
                        <h5 class="meta" name="university1" contenteditable="true">University </h5>
                        <div class="time" name="year1" contenteditable="true">YEAR</div>
                    </div><!--//item-->
                    <div class="item">
                        <h4 class="degree" name="degree2" contenteditable="true">DEGREE</h4>
                        <h5 class="meta" name="university2" contenteditable="true">University </h5>
                        <div class="time" name="year2" contenteditable="true">YEAR</div>
                    </div><!--//item-->
                </div><!--//education-container-->

                <div class="languages-container container-block">
                    <h2 class="container-block-title">Languages</h2>
                    <ul class="list-unstyled interests-list" contenteditable="true">
                        <li name="lang1">LANG 1 <span class="lang-desc"> (READ/WRITE/SPEAK) </span></li>
                        <li name="lang2">LANG 2 <span class="lang-desc"> (READ/WRITE/SPEAK) </span></li>
                        <li name="lang3">LANG 3 <span class="lang-desc"> (READ/WRITE/SPEAK) </span></li>
                    </ul>
                </div><!--//interests-->

                <div class="interests-container container-block">
                    <h2 class="container-block-title">Interests</h2>
                    <ul class="list-unstyled interests-list" contenteditable="true">
                        <li name="hobby1">HOBBY 1</li>
                        <li name="hobby2">HOBBY 2</li>
                        <li name="hobby3">HOBBY 3</li>
                    </ul>
                </div><!--//interests-->

            </div><!--//sidebar-wrapper-->

            <div class="main-wrapper">

                <section class="section summary-section">
                    <h2 class="section-title" contenteditable="false"><i class="fa fa-arrows"></i>OBJECTIVE</h2>
                    <div class="objective" contenteditable="true" name="objective">
                        <p>Summarise your objective here </p>
                    </div><!--//summary-->
                </section><!--//section-->

                <section class="section summary-section">
                    <h2 class="section-title" contenteditable="false"><i class="fa fa-user"></i>Career Profile</h2>
                    <div class="summary" contenteditable="true" name="careerpro">
                        <p>Summarise your career here </p>
                    </div><!--//summary-->
                </section><!--//section-->

                <section class="section experiences-section">
                    <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title" contenteditable="true" name="design1">Designation</h3>
                                <div class="time" contenteditable="true" name="yer1">from - to</div>
                            </div><!--//upper-row-->
                            <div class="company" contenteditable="true" name="comp1">company, location</div>
                        </div><!--//meta-->
                        <div class="details" contenteditable="true" name="desc1">
                            <p>
                                Describe your role here
                            </p>
                        </div><!--//details-->
                    </div><!--//item-->

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title" contenteditable="true" name="design2">Designation</h3>
                                <div class="time" contenteditable="true" name="yer2">from - to</div>
                            </div><!--//upper-row-->
                            <div class="company" contenteditable="true" name="comp2">company, location</div>
                        </div><!--//meta-->
                        <div class="details" contenteditable="true" name="desc2">
                            <p>
                                Describe your role here
                            </p>
                        </div><!--//details-->
                    </div><!--//item-->

                    <div class="item">
                        <div class="meta">
                            <div class="upper-row">
                                <h3 class="job-title" contenteditable="true" name="design3">Designation</h3>
                                <div class="time" contenteditable="true" name="yer3">from - to</div>
                            </div><!--//upper-row-->
                            <div class="company" contenteditable="true" name="comp3">company, location</div>
                        </div><!--//meta-->
                        <div class="details" contenteditable="true" name="desc3">
                            <p>
                                Describe your role here
                            </p>
                        </div><!--//details-->
                    </div><!--//item-->

                </section><!--//section-->

                <section class="section projects-section">
                    <h2 class="section-title" contenteditable="false"><i class="fa fa-archive"></i>Projects</h2>
                    <div class="intro"contenteditable="true" >
                        <p>You can list your side projects or open source libraries in this section. !!! Delete this line after you read this!!!</p>
                    </div><!--//intro-->

                    <div class="item">
                        <span class="project-title" name="protit1" contenteditable="true"><p>Project title</p></span>
                        <span class="project-tagline" name="prodesc1" contenteditable="true">- Description about your project in 2-3 lines</span>
                    </div><!--//item-->


                    <div class="item">
                        <span class="project-title" name="protit2" contenteditable="true"><p>Project title</p></span>
                        <span class="project-tagline" name="prodesc2" contenteditable="true">- Description about your project in 2-3 lines</span>
                    </div><!--//item-->

                    <div class="item">
                        <span class="project-title" name="protit3" contenteditable="true"><p>Project title</p></span>
                        <span class="project-tagline" name="prodesc3" contenteditable="true">- Description about your project in 2-3 lines</span>
                    </div><!--//item-->

                    <div class="item">
                        <span class="project-title" name="protit4" contenteditable="true"><p>Project title</p></span>
                        <span class="project-tagline" name="prodesc4" contenteditable="true">- Description about your project in 2-3 lines</span>
                    </div><!--//item-->

                    <div class="item">
                        <span class="project-title" name="protit5" contenteditable="true"><p>Project title</p></span>
                        <span class="project-tagline" name="prodesc5" contenteditable="true">- Description about your project in 2-3 lines</span>
                    </div><!--//item-->

                </section><!--//section-->

                <section class="skills-section section">
                    <h2 class="section-title" contenteditable="false"><i class="fa fa-rocket"></i>Skills</h2>
                    <div class="skillset" contenteditable="true">
                        <table>

                            <tr>
                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill1">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill2">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill3">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill4">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill5">Skill </h3>
                                    </div><!--//item-->
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill6">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill7">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill8">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill9">Skill </h3>
                                    </div><!--//item-->
                                </td>

                                <td>
                                    <div class="item">
                                        <h3 class="level-title" name="skill10">Skill </h3>
                                    </div><!--//item-->
                                </td>
                            </tr>


                        </table>
                    </div>
                </section><!--//skills-section-->

            </div><!--//main-body-->
        </div>

        <!-- Javascript -->
        <script type="text/javascript" src="resume_build/assets/plugins/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="resume_build/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- custom js -->
        <script type="text/javascript" src="resume_build/assets/js/main.js"></script>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","getuser.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>


        <!-- Adsense Banner in right -->
        <div align="right">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Homepage Leaderboard -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-1234567890123456"
                 data-ad-slot="1234567890"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- Adsense Banner in left -->
        <div align="left">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Homepage Leaderboard -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-1234567890123456"
                 data-ad-slot="1234567890"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- Adsense Banner in center -->
        <div align="center">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Homepage Leaderboard -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-1234567890123456"
                 data-ad-slot="1234567890"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <!-- jquery for resume  -->
        <script>
            $(function(){
                //acknowledgement message
                var message_status = $("#status");
                $("td[contenteditable=true]").blur(function(){
                    var field_userid = $(this).attr("id") ;
                    var value = $(this).text() ;
                    $.post('ajax.php' , field_userid + "=" + value, function(data){
                        if(data != '')
                        {
                            message_status.show();
                            message_status.text(data);

                            //hide the message
                            setTimeout(function(){message_status.hide()},3000);
                        }
                    });
                });
            });
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
