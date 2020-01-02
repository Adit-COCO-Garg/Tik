<?php
session_start();
require 'conn.php';
ob_start();


/*
// Set session variables to be used on profile.php page
$_SESSION['std_id'] = (isset($_POST['std_id']));
$_SESSION['std_name'] = (isset($_POST['std_name']));
*/
$_SESSION['perf_grade'] = (isset($_POST['perf_grade']));
$_SESSION['month'] = (isset($_POST['month']));


// Escape all $_POST variables to protect against SQL injections
$std_id = $mysqli->escape_string($_POST['std_id']);
$perf_grade = $mysqli->escape_string($_POST['perf_grade']);
$month = $mysqli->escape_string($_POST['month']);


//
$sql = "UPDATE 'perfdetails' SET 'perf_grade'='$perf_grade' WHERE 'month'='$month'";
mysqli_query( $mysqli , $sql);
ob_end_flush();

$mysqli->close();