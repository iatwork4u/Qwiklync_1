/* Author: iatwork4u */
<?php

if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
    //mail id of the receiver enter here
	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $_POST["userName"] . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	$message = "Your contact information is received successfully";
	}
}
?>

<html>

<head>

    <title>Qwiklync | Contact Us</title>
<!-- css files linked -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="/css/leftmenu.css" type="text/css" />

    <!-- js files linked -->
    <link rel="script" href="/js/leftmenu.js" />

</head>


<body>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>

            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Buttons</a></li>
                <li><a href="#">Tabs & Accordions</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">FontAwesome</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Panels</a></li>
                <li><a href="#">Widgets</a></li>
                <li><a href="#">Bootstrap Model</a></li>
            </ul>


            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li>New New 1</li>
                <li>New New 2</li>
                <li>New New 3</li>
            </ul>


            <li>
                <a href="#">
                    <i class="fa fa-user fa-lg"></i> Profile
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> Users
                </a>
            </li>
        </ul>
    </div>
</div>





    <form name="frmContact" method="post" action="">
    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>

        <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
            <tr class="tableheader">
                <td colspan="2">Enter Contact Information</td>
            </tr>

            <tr class="tablerow">
                <td>Name<br/><input type="text" name="userName"></td>
                <td>Email<br/><input type="text" name="userEmail"></td>
            </tr>

            <tr class="tablerow">
                <td colspan="2">Subject<br/><input type="text" name="subject" size="73"></td>
            </tr>

            <tr class="tablerow">
                <td colspan="2">Content<br/><textarea name="content" cols="60" rows="6"></textarea></td>
            </tr>

            <tr class="tableheader">
                <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>