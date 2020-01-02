<?php 
/* AFTER LOGIN HOME PAGE*/
require 'conn.php';

session_start();
$dataPoints = array(
  array("label"=> 'January', "y"=> 2),
  array("label"=> 'Feburary', "y"=> 5),
  array("label"=> 'March', "y"=> 3),
  array("label"=> 'April', "y"=> 6),
  array("label"=> 'May', "y"=> 3),
  array("label"=> 'June', "y"=> 6),
  array("label"=> 'July', "y"=> 7),
  array("label"=> 'August', "y"=> 8),
  array("label"=> 'September', "y"=> 5),
  array("label"=> 'October', "y"=> 4),
  array("label"=> 'November', "y"=> 9),
  array("label"=> 'December', "y"=> 6),
);

/*try{

    $link = new \PDO(   'mysql:host=localhost;dbname=tik;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
  
    $handle = $link->prepare('select x, y from perfedetails_12345'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
    
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->x, "y"=> $row->y));
    }
  $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}*/
?>
<!DOCTYPE html>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Performance Chart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dosis|Lato|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css" href = "Style.css" />
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  //theme: "light2",
  title:{
    text: "Student performance 2017-2018"
  },
  axisX:{
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  axisY:{
    title: "Grade",
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  toolTip:{
    enabled: false
  },
  data: [{
    type: "area",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<p style ="top:0; left:0;z-index: 1000;">tik</p>
<div id="navbar1">
      <ul id=Nvel>
        <li><a href="index.php">Homepage: Basic Details</a></li>
        <li><a href="medicaldetails.php">Medical Details</a></li>
        <li><a href="register.php">Add Student</a></li>
        <li><a href="perfedetails.php">Performance Details</a></li>
        <li><a href="gradeupsite.php">Performance Update</a></li>
        <li><a href="st chart.php">Student Report</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="instructions.html">Help and Instructions</a></li>
        <li><a href="about.php">About and contact</a></li>
      </ul>
</div>

  <div id="container">
<section>
  <h1>Student Performance Profile</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="weirdind">ID</th>
          <th class="weirdind">NAME</th>
          <th class="weirdind">January</th>
          <th class="weirdind">Feburary</th>
          <th class="weirdind">March</th>
          <th class="weirdind">April</th>
          <th class="weirdind">May</th>
          <th class="weirdind">June</th>
          <th class="weirdind">July</th>
          <th class="weirdind">August</th>
          <th class="weirdind">September</th>
          <th class="weirdind">October</th>
          <th class="weirdind">November</th>
          <th class="weirdind">December</th>

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
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </div>





</body>
</html>
<script src="entrystperf.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
