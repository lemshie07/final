<?php
date_default_timezone_set('UTC');
header('Access-Control-Allow-Origin: *');
include('connection.php');
echo "connected";
mysqli_select_db($conn, $db);
$fullname=$_POST['name'];
$province=$_POST['Province'];
$announced=$_POST['president'];
$vice=$_POST['vicepresident'];
$considering=$_POST['other'];

$sql = "INSERT INTO voting_page (ID,Name,Province,Announced,Announcedvice,Candidacy) VALUES (NULL ,NULL,'".$province."','".$announced."','".$vice."','".$considering."')";
$result = mysqli_query($conn, $sql);


?>