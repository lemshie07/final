<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
$response = array();
mysqli_select_db($conn, "final_database");
foreach($conn->query('SELECT Announcedvice,COUNT(*)  
FROM voting_page  
GROUP BY Announcedvice Order BY Announcedvice') as $row) {  
$response[] = array("candidate" => $row['Announcedvice'], "votecount" => $row['COUNT(*)']);
}  
echo json_encode(array("results"=>$response));
?>
