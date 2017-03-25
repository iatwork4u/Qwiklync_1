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
echo "Invalid Requests";
}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Qwiklync | Resume/CV Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Qwiklync resume/cv template">
    <meta name="author" content="iatwork4u">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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

    <!-- Global CSS -->
    <link rel="stylesheet" href="resume_build/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="resume_build/assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="resume_build/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
<!-- Resume code start here -->
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile img-circle img-responsive" src="resume_build/assets/images/user.png" alt=""  />
                <h1 class="name" contenteditable="false">NAME</h1>
                <h3 class="tagline" contenteditable="true"> DESIGNATION </h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email" contenteditable="true"><i class="fa fa-envelope" contenteditable="true"></i> yourname@email.com</a></li>
                    <li class="phone" contenteditable="true"><i class="fa fa-phone" contenteditable="true"></i> 0123 456 789</a></li>
                    <li class="website" contenteditable="true"><i class="fa fa-globe" contenteditable="true"></i> www.portfoliosite.com</a></li>
                    <li class="linkedin" contenteditable="true"><i class="fa fa-linkedin" contenteditable="true"></i>linkedin profile</a></li>
                    <li class="github" contenteditable="true"><i class="fa fa-github" contenteditable="true"></i>github.com/username</a></li>
                <!--    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li> -->
                </ul>
            </div><!--//contact-container-->


            <div class="address-container container-block">
                <h2 class="container-block-title">Address</h2>
                <div class="item">
                    <h4 class="degree" contenteditable="true">House no/name,</h4>
                    <h5 class="meta" contenteditable="true">Street name </h5>
                    <div class="time" contenteditable="true">Place - Pincode</div>
                </div><!--//item-->

            </div><!--//education-container-->

            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree" contenteditable="true">DEGREE</h4>
                    <h5 class="meta"contenteditable="true">University </h5>
                    <div class="time" contenteditable="true">YEAR</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree" contenteditable="true">DEGREE</h4>
                    <h5 class="meta" contenteditable="true">University</h5>
                    <div class="time" contenteditable="true">YEAR</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list" contenteditable="true">
                    <li>LANG 1 <span class="lang-desc">(READ/WRITE/SPEAK)</span></li>
                    <li>LANG 2 <span class="lang-desc">(READ/WRITE/SPEAK)</span></li>
                    <li>LANG 3 <span class="lang-desc">(READ/WRITE/SPEAK)</span></li>
                    <li>LANG 4 <span class="lang-desc">(READ/WRITE/SPEAK)</span></li>
                    <li>LANG 5 <span class="lang-desc">(READ/WRITE/SPEAK)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list" contenteditable="true">
                    <li>HOBBY 1</li>
                    <li>HOBBY 2</li>
                    <li>HOBBY 3</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title" contenteditable="false"><i class="fa fa-arrows"></i>OBJECTIVE</h2>
                <div class="objective" contenteditable="true">
                    <p>Summarise your objective here </p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section summary-section">
                <h2 class="section-title" contenteditable="false"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary" contenteditable="true">
                    <p>Summarise your career here </p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title" contenteditable="true">Designation</h3>
                            <div class="time" contenteditable="true">from - to</div>
                        </div><!--//upper-row-->
                        <div class="company" contenteditable="true">company, location</div>
                    </div><!--//meta-->
                    <div class="details" contenteditable="true">
                        <p>
                            Describe your role here
                        </p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title" contenteditable="true">Designation</h3>
                            <div class="time" contenteditable="true">from - to</div>
                        </div><!--//upper-row-->
                        <div class="company" contenteditable="true">company, location</div>
                    </div><!--//meta-->
                    <div class="details" contenteditable="true">
                        <p>
                            Describe your role here
                        </p>
                    </div><!--//details-->
                </div><!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title" contenteditable="true">Designation</h3>
                            <div class="time" contenteditable="true">from - to</div>
                        </div><!--//upper-row-->
                        <div class="company" contenteditable="true">company, location</div>
                    </div><!--//meta-->
                    <div class="details" contenteditable="true">
                        <p>
                            Describe your role here
                        </p>
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class="section projects-section" contenteditable="true">
                <h2 class="section-title" contenteditable="false"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro" contenteditable="true">
                    <p>You can list your side projects or open source libraries in this section.</p>
                </div><!--//intro-->

                <div class="item">
                    <span class="project-title"><a href="">Project title</a></span> -
                    <span class="project-tagline">Description about your project in 2-3 lines</span>
                </div><!--//item-->


                <div class="item">
                    <span class="project-title"><a href="">Project title</a></span> -
                    <span class="project-tagline">Description about your project in 2-3 lines</span>
                </div><!--//item-->

                <div class="item">
                    <span class="project-title"><a href="">Project title</a></span> -
                    <span class="project-tagline">Description about your project in 2-3 lines</span>
                </div><!--//item-->

                <div class="item">
                    <span class="project-title"><a href="">Project title</a></span> -
                    <span class="project-tagline">Description about your project in 2-3 lines</span>
                </div><!--//item-->

                <div class="item">
                    <span class="project-title"><a href="">Project title</a></span> -
                    <span class="project-tagline">Description about your project in 2-3 lines</span>
                </div><!--//item-->

            </section><!--//section-->

            <section class="skills-section section">
                <h2 class="section-title" contenteditable="false"><i class="fa fa-rocket"></i>Skills</h2>
                <div class="skillset" contenteditable="true">
                  <table>

                      <tr>
                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>
                      </tr>

                      <tr>
                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>

                          <td>
                              <div class="item">
                                  <h3 class="level-title">Skill </h3>
                              </div><!--//item-->
                          </td>
                      </tr>


                  </table>
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>

<!-- Footer start here --> <!--
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
                    <li><a href="contact.html">Contact Us</a></li>
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
    </div> -->

    <!-- lower footer --> <!--
    <div class="footer_bottom">
        <div class="container">
            <div class="col-sm-2">
                <!--	<ul class="f_list2">
                      <li><a href="jobs.html">Russia Jobs</a></li>
                      <li><a href="jobs.html">Australia Jobs</a></li>
                      <li><a href="jobs.html">Srilanka Jobs</a></li>
                      <li><a href="jobs.html">Poland Jobs</a></li>
                  </ul>
            </div>
            <div class="col-sm-2">
                <!--	<ul class="f_list2">
                      <li><a href="jobs.html">New Zealand Jobs</a></li>
                      <li><a href="jobs.html">Pakistan Jobs</a></li>
                      <li><a href="jobs.html">Srilanka Jobs</a></li>
                      <li><a href="jobs.html">Irland Jobs</a></li>
                  </ul>
            </div>
            <div class="col-sm-2">
                <!--	<ul class="f_list2">
                      <li><a href="jobs.html">Canada Jobs</a></li>
                      <li><a href="jobs.html">Germany Jobs</a></li>
                      <li><a href="jobs.html">China Jobs</a></li>
                      <li><a href="jobs.html">Nepal Jobs</a></li>
                  </ul>
            </div>
            <div class="col-sm-6 footer_text">
                <!--  <p>"Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto
                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                adipisci velit, sed quia non numqua"</p>
            </div>
            <div class="clearfix"> </div>
            <div class="copy">
                <p>Copyright © 2015 Qwiklync . All Rights Reserved . Design by <a href="#" target="_blank">iatwork4u</a> </p>
            </div>
        </div>
    </div>    -->  <!-- footer ends here -->
 
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

</body>
</html>