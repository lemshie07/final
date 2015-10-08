<?php
require 'connection.php';
$sql = "SELECT voting_page.Province, count(voting_page.Province), tbl_province.fld_long, tbl_province.fld_lat FROM `voting_page` INNER JOIN tbl_province on voting_page.Province = tbl_province.fld_province group by voting_page.Province";
$result = mysqli_query($conn, $sql);

$posts = array();

while($row=mysqli_fetch_array($result)) 
{ 
	$province=$row['fld_province'];
	$bilang=$row['count(voting_page.Province)'];
	$long=$row['fld_long'];
	$lat=$row['fld_lat'];

	$posts[] = array(
	'province'=> $province,
	'bilang'=> $bilang,
	'long'=> $long,
	'lat'=> $lat);
}

echo json_encode($posts);

?>

