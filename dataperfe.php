<?php 
require_once('conn.php');
$var = array();
$sql = "SELECT * FROM `perfedetails` ORDER BY std_id ASC";
$result = mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($result)){
		while ($row = mysqli_fetch_assoc($result))  {
						$var[] = $row;
		}
	}
echo json_encode($var);  