<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
$response = array();
mysqli_select_db($conn, "final_database");
foreach($conn->query('SELECT Announced,COUNT(*)  
FROM voting_page  
GROUP BY Announced Order BY Announced') as $row) {  
$response[] = array("candidate" => $row['Announced'], "votecount" => $row['COUNT(*)']);
}  
echo json_encode(array("results"=>$response));
?>
