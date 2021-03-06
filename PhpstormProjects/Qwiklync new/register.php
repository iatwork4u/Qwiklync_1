<?php
include_once ("db-support/config.php");
// define variables and set to empty values
$fullnameErr = $emailErr = $genderErr = $countryErr = $websiteErr = $eduErr = $dobErr = $expErr = $mobnoErr = $pswErr = $cpswErr = false;
$fullname = $email = $gender = $mobno = $edu = $exp = $country  =  $desc = $dob = $psw = $cpsw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        $fullnameErr = "Name must contain only alphabets and space";
    } else {
        $fullname = test_input($_POST["fullname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["psw"])) {
        if (strlen($psw) < 6) {
            $pswErr = "Password must be minimum of 6 characters";
        } else
            $psw = test_input($_POST["password"]);
    }
    if ($psw != $cpsw) {
        $cpswErr = "Password and Confirm Password doesn't match";
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["mobno"])) {
        $mobnoErr = "Enter your mobile no";
    } else {
        $mobno = test_input($_POST["mobno"]);
    }

    if (empty($_POST["country"])) {
        $countryErr = "Select your country";
    } else {
        $country = test_input($_POST["country"]);
    }

    if (empty($_POST["edu"])) {
        $eduErr = "Select your Educational Qualification";
    } else {
        $edu = test_input($_POST["edu"]);
    }

    if (empty($_POST["exp"])) {
        $expErr = "Select your Experience";
    } else {
        $exp = test_input($_POST["exp"]);
    }

    if (!empty($_POST["desc"])) {
        $desc = test_input ($_POST["desc"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
$query = "INSERT INTO user VALUES('','{$fullname}','{$email}','{$psw}','{$mobno}', '{$gender}','{$country}', '{$exp}', '{$edu}','{$dob}','{$desc}')";

$result = mysqli_query($db,$query);
if(!$result)
{
    die("Error in registering...Please try again later!");
}else {
    echo " Successfully Registered! ";
}
?>

<!--
Author: iatwork4u
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Qwiklync | Register </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Qwiklync User Register page">
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
        <div id='fg_membersite'>
            <div class="container">
                <div class="single">
                    <div class="form-container">
                        <h2>Register Form</h2>

                        <form id='register' name="register" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  accept-charset='UTF-8'>

                            <div><span class='error'> </span></div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="fullname">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" path="fullname" class="form-control input-sm" id='fullname' name='fullname' placeholder="Enter Full Name">
                                        <span> <?php if(isset($fullnameErr)) echo $fullnameErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="mobno">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="text" path="mobno" id="mobno" class="form-control input-sm" name='mobno' placeholder="Mobile Number in (+91mobileno) format" />
                                        <span> <?php if(isset($mobnoErr)) echo $mobnoErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="gender">Gender</label>
                                    <div class="col-md-9" class="form-control input-sm">
                                        <div class="radios">
                                            <input type="radio" name="gender" id="genmale" value="male" checked> Male &nbsp;
                                            <input type="radio" name="gender" id="genfmale" value="female"> Female &nbsp;
                                            <input type="radio" name="gender" id="genoth" value="other"> Other
                                            <span> <?php if(isset($genderErr)) echo $genderErr;  ?></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                                    <div class="col-md-9">
                                        <input type="date" path="dob" id="dob" class="form-control input-sm" placeholder="Enter Date Of Birth"/>
                                        <span> <?php if(isset($dob)) echo $dobErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="email">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" path="email" class="form-control input-sm" name='email' id='email' placeholder="Email id" />
                                        <span> <?php if(isset($emailErr)) echo $emailErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="psw">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" path="psw" class="form-control input-sm" name='psw' id='psw' placeholder="Password" />
                                        <span> <?php if(isset($pswErr)) echo $pswErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="cpsw">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" path="cpsw" class="form-control input-sm" name='cpsw' id='cpsw' placeholder="Confirm Password" />
                                        <span> <?php if(isset($cpswErr)) echo $cpswErr;  ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="country">Country</label>
                                    <div class="col-md-9">
                                        <select path="country" id="country" class="form-control input-sm" name='country' >
                                            <option value="AF">Select your Country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                        <span> <?php if(isset($countryErr)) echo $countryErr;  ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="country">Work Experience</label>
                                    <div class="col-md-9">
                                        <select path="exp" id="exp" class="form-control input-sm" name='exp' >
                                            <option value="">Select you Work Experience</option>
                                            <option value="">Fresher</option>
                                            <option value="">0</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                            <option value="">9</option>
                                            <option value="">10</option>
                                            <option value="">11</option>
                                            <option value="">12</option>
                                            <option value="">13</option>
                                            <option value="">14</option>
                                            <option value="">15</option>
                                        </select>
                                        <span> <?php if(isset($expErr)) echo $expErr;  ?></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="country">Educational Qualification </label>
                                    <div class="col-md-9">
                                        <select path="edu" id="edu" class="form-control input-sm" name='edu' >
                                            <option value="">Select your Educational Qualification</option>
                                            <option value="">Bsc</option>
                                            <option value="">BE / BTech</option>
                                            <option value="">MCA</option>
                                            <option value="">BCA</option>
                                            <option value="">Diploma</option>
                                            <option value="">Other</option>
                                        </select>
                                        <span> <?php if(isset($eduErr)) echo $eduErr;  ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-3 control-lable" for="desc">Description <span>(optional) (In less than 200 words)</span></label>
                                    <div class="col-md-9 sm_1">
                                        <textarea id="desc" name="desc" cols="77" rows="6" placeholder="Description about youself (Optonal)" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-actions floatRight">
                                    <input type="submit" value="Register" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->

        <script type='text/javascript'>

            var frmvalidator  = new Validator("register");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("fullname","req","Please provide your name");

            frmvalidator.addValidation("email","req","Please provide your email address");

            frmvalidator.addValidation("mobno","req","Please provide your mobile no");

            frmvalidator.addValidation("dob","req","Please provide your Date Of Birth");

            frmvalidator.addValidation("psw","req","Please provide a password");

            frmvalidator.addValidation("cpsw","req","Please provide Confirm password");

            frmvalidator.addValidation("country","req","Please select your country");

            frmvalidator.addValidation("exp","req","Please select your experience");

            frmvalidator.addValidation("edu","req","Please select Educational Qualification")

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
