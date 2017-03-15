<?PHP
require_once("include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
{
$fgmembersite->RedirectToURL("index.php");
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
	<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
                                <li><a href="login.html">Recruiter Updates</a></li>
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
				<li><a href="register.html"> Register </a></li>
				<li><a href="login.php"> Login </a></li>
				<li><a href="resume.html"> Upload Resume </a></li>
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
<div class="container">
    <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3">
	<!--   	  	<h3>Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<li><a href="#">Department of Health - Western Australia</a></li>
	   	  		<li><a href="#">Australian Nursing Agency currently require experiences</a></li>		
	   	  		<li><a href="#">Russia Nursing Agency currently require experiences</a></li>
	   	  		<li><a href="#">The Government of Western Saudi Arbia</a></li>		
	   	  		<li><a href="#">Department of Health - Western Australia</a></li>
	   	  		<li><a href="#">Australian Nursing Agency currently require experiences</a></li>		
	   	  		<li><a href="#">Russia Nursing Agency currently require experiences</a></li>
	   	  		<li><a href="#">The Scientific Publishing Services in Saudi Arbia</a></li>	
	   	  		<li><a href="#">BPO Private Limited in Canada</a></li>		
	   	  		<li><a href="#">Executive Tracks Associates in Pakistan</a></li>
	   	  		<li><a href="#">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></li>						
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<li><a href="#">Railway Recruitment</a></li>
	   	  		<li><a href="#">Air Force Jobs</a></li>		
	   	  		<li><a href="#">Police Jobs</a></li>
	   	  		<li><a href="#">Intelligence Bureau Jobs</a></li>		
	   	  		<li><a href="#">Army Jobs</a></li>
	   	  		<li><a href="#">Navy Jobs</a></li>		
	   	  		<li><a href="#">BSNL Jobs</a></li>
	   	  		<li><a href="#">Software Jobs</a></li>	
	   	  		<li><a href="#">Research Jobs</a></li>								
	   	  	</ul>
	   	  </div>
	   	  <div class="widget">
	        <h3>Take The Seeking Poll!</h3>
    	        <div class="widget-content"> 
                 <div class="seeking-answer">
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Frequently</span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Interviewing</span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Leaving a familiar workplace</span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote">
		    		  <a class="seeking-vote-button">Vote</a>
		    		</div>
			     </div>
    	       </div> -->
    	</div>
	 </div>
		<!-- Login form -->
    <div id='fg_membersite'>
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
					<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input id="username" type="text" required="required" class="form-control" placeholder="Email / Mobile no" value="<?php echo $fgmembersite->SafeDisplay('username') ?>" maxlength="128">
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
				 			<p><a href="#"> Forgot Password? </a></p>
				 		 </div>
					     <div class="clearfix"> </div>
			        </div>
					<div class="login-btn">
					   <input type="submit" value="Log in">
						<p>Don't have an Account? <a href="register.html"> Register Now!</a></p>

					</div>

					<div class="login-bottom">
				<!-- <p>With your social media account</p>
					 <div class="social-icons">
						<div class="button">
							<a class="tw" href="#"> <i class="fa fa-twitter tw2"> </i><span>Twitter</span>
							<div class="clearfix"> </div></a>
							<a class="fa" href="#"> <i class="fa fa-facebook tw2"> </i><span>Facebook</span>
							<div class="clearfix"> </div></a>
							<a class="go" href="#"><i class="fa fa-google-plus tw2"> </i><span>Google+</span>
							<div class="clearfix"> </div></a>
							<div class="clearfix"> </div>
						</div> -->
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

            frmvalidator.addValidation("username","req","Please provide your username");

            frmvalidator.addValidation("password","req","Please provide the password");

		</script>

    </div>
   </div>
  <div class="clearfix"> </div>
 </div>


<!-- Footer -->
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
					<a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
					<a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
					<a href="mailto:abcd@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
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
		<!--	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p> -->
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