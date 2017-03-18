<?php
/**
 * Created by PhpStorm.
 * User: NITHIN
 * Date: 18/03/17
 * Time: 6:29 PM
 */

$connection = mysqli_connect('localhost', 'root', 'Rvm@i[9)0?~=');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pixelw3p_demo');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}