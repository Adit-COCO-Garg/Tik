<?php

require 'conn.php';
 ob_start();
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
 /*
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST['std_id'])){
    echo 'Variable is set and I can use it!';
}
if(isset($_POST['std_name'])){
    echo 'Variable is set and I can use it!';
}
if(isset($_POST['Grade'])){
    echo 'Variable is set and I can use it!';
}
if(isset($_POST['Age'])){
    echo 'Variable is set and I can use it!';
}
if(isset($_POST['Phone'])){
    echo 'Variable is set and I can use it!';
} */
// Set session variables to be used on profile.php page
$_SESSION['std_id'] = (isset($_POST['std_id']));
$_SESSION['std_name'] = (isset($_POST['std_name']));
$_SESSION['Grade'] = (isset($_POST['Grade']));
$_SESSION['Age'] = (isset($_POST['Age']));
$_SESSION['Phone'] = (isset($_POST['Phone']));

// Escape all $_POST variables to protect against SQL injections
$std_id = $mysqli->escape_string(isset($_POST['std_id']));
$std_name = $mysqli->escape_string(isset($_POST['std_name']));
$Grade = $mysqli->escape_string(isset($_POST['Grade']));
$Age = $mysqli->escape_string(isset($_POST['Age']));
$Phone = $mysqli->escape_string(isset($_POST['Phone']));
$sql= "INSERT INTO basicdetails (std_id, std_name, Grade, Age, Phone)  VALUES ('$std_id','$std_name','$Grade','$Age', '$Phone')";
mysqli_query( $mysqli , $sql);
ob_end_flush();

$mysqli->close();