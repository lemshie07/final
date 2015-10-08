<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
$response = array();
mysqli_select_db($conn, "final_database");
foreach($conn->query('SELECT Candidacy,COUNT(*)  
FROM voting_page  
GROUP BY Candidacy Order BY Candidacy') as $row) {  
$response[] = array("candidate" => $row['Candidacy'], "votecount" => $row['COUNT(*)']);
}  
echo json_encode(array("results"=>$response));
?>
