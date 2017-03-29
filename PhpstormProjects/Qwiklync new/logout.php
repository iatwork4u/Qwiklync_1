<!-- Logout session -->
<?php
/**
 * Created by PhpStorm.
 * User: NITHIN
 * Date: 29/03/17
 * Time: 2:08 PM
 */

session_start();
//if login fails goto login.php page
if(session_destroy()) {
    header("Location: login.php");
}
?>