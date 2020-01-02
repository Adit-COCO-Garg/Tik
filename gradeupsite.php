<?php 
/* Main page with registration */
require 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Update Performance Details</title>
  <?php include 'login-system (1)/css/registercss.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{   
    if (isset($_POST['gradeupdate'])) { //user registering
        
        require 'gradeupdate.php';
        
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#register">Register</a></li>
      
      </ul>
      
          
        <div id="gradeupdate">   
          <h1>Update Performance Details</h1>
          
          <form action="gradeupsite.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                ID<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='std_id' />
            </div>
          <div class="field-wrap">
            <label>
              perf_grade<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='perf_Grade' />
          </div>   
                    <div class="field-wrap">
            <label>
              Month<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='month' />
          </div>  
          <button type="submit" class="button button-block" value="perf_grade" name="perf_grade" />update</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login-system (1)/js/index.js"></script>

</body>
</html>
