<?php 
/* AFTER LOGIN HOME PAGE*/
require 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Student-Creation</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Dosis|Lato|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
<link rel = "stylesheet" type = "text/css" href = "Style.css" />

</head>


<?php 
require 'submit.php';
?>

<body>

<p style ="top:0; left:0;z-index: 1000;">tik</p>
<div id="navbar1">
      <ul id=Nvel>
        <li><a href="index.php">Homepage: Basic Details</a></li>
        <li><a href="register.php">Add Student</a></li>
        <li><a href="perfedetails.php">Performance Details</a></li>
        <li><a href="gradeupsite.php">Performance Update</a></li>
        <li><a href="st chart.php">Student Report</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="instructions.html">Help and Instructions</a></li>
        <li><a href="helpandbout.html">About and contact</a></li>
      </ul>
</div>


<div id="container">
  <section>
    <h1>Submitted Data</h1>
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="weirdind">ID</th>
          <th class="weirdind">NAME</th>
          <th class="weirdind">GRADE</th>
          <th class="weirdind">AGE</th>
          <th class="weirdind">PHONE</th>
        </tr>
      </thead>
    </table>
  </div>

<div class="tbl-content " >
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody id="output">
       
      </tbody>
    </table>
  </div>
</section>


<section>
<form class="form-inline" action="submit.php" method="post" autocomplete="off">

  <label class="sr-only" for="std_id">ID</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="std_id" id="std_id" placeholder="99999">

  <label class="sr-only" for="std_name">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="std_name" id="std_name" placeholder="Phil Coulson">

  <label class="sr-only" for="Grade">GRADE</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="Grade" id="Grade" placeholder="12 A">

  <label class="sr-only" for="Age">AGE</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="Age" id="Age" placeholder="10">

  <label class="sr-only" for="Phone">PHONE</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="Phone" id="Phone" placeholder="0123456789">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
  </div>
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login-systems (1)/js/index.js"></script>
</body>
</html>
<script src="entry.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>