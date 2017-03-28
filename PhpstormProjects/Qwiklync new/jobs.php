<?php
$connect = mysqli_connect("localhost", "test", "test", "test");
$query = "SELECT * from tbl_jobs";
$result = mysqli_query($connect, $query);
//print_r $result;

while($row = mysqli_fetch_array($result))
 {
   $job_id =  $row["job_id"];
 $job_date = $row["job_date"];
$job_loc = $row["job_loc"];
$job_title = $row["job_title"];
$job_desc = $row["job_desc"];
$posted_by = $row["posted_by"];
$company = $row["company"];
 }
 $job_date_real  = strtotime($job_date);
$day   = date('d',$job_date_real);
$year  = date('Y',$job_date_real);
$month = date('M',  $job_date_real);
$day = date('j',  $job_date_real);
echo $row["job_img"];

//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['job_img'] ).'"/>';
 ?>
