<?php 
/* Main page with registration */
require 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>registartion Form</title>
  <?php include 'login-system (1)/css/registercss.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{   
    if (isset($_POST['register'])) { //user registering
        
        require 'submit.php';
        
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#register">Register</a></li>
      
      </ul>
      
          
        <div id="register">   
          <h1>Register</h1>
          
          <form action="register.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                ID<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='std_id' />
            </div>
        
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='std_name' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Grade<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='Grade' />
          </div>
          
          <div class="field-wrap">
            <label>
              Age<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='Age'/>
          </div>
               <div class="field-wrap">
            <label>
              Phone<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='Phone'/>
          </div>
          
          <button type="submit" class="button button-block" value="register" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login-system (1)/js/index.js"></script>

</body>
</html>
