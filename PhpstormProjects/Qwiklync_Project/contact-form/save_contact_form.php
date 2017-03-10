/* Author: iatwork4u */
<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db("phppot_examples",$conn);
	mysqli_query("INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id();
	if(!empty($insert_id)) {
	$message = "Your contact information is saved successfully";
	}
}
?>
<html>

<head>

    <title>Contact Us Form</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>



<body>

    <form name="frmContact" method="post" action="">
    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <!-- Table -->
        <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
            <tr class="tableheader">
                <td colspan="2">Enter Contact Information</td>
            </tr>

            <tr class="tablerow">
                <td> Name <br/> <input type="text" name="userName"></td>
                <td> Email <br/> <input type="text" name="userEmail"></td>
            </tr>

            <tr class="tablerow">
                <td colspan="2"> Subject <br/> <input type="text" name="subject" size="73"></td>
            </tr>

            <tr class="tablerow">
                <td colspan="2"> Content <br/> <textarea name="content" cols="60" rows="6"></textarea></td>
            </tr>

            <tr class="tableheader">
                <td align="center" colspan="2"> <input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>