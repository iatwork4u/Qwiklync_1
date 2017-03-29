<?php
/*
  Author : iatwork4u
*/
   define('DB_SERVER', 'localhost');

   define('DB_USERNAME', 'root');

   define('DB_PASSWORD', '');

   define('DB_DATABASE', 'qwiklync');
   $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

   if(! $db) {
       die('Could not connect: '.mysqli_error());
   }

   echo 'Connected successfully';

   mysqli_close($db);

?>