<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Forgot Password - Complain Box</title>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="icon" href="../pictures/icon/complain.png">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- css for navbar -->
        <link rel="stylesheet" type="text/css" href="../myCss/style002.css">

   
  </head>





  <body>
    
    <nav class="navbar navbar-light" style="background-color: #009688;">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../../index.php"><img src="../pictures/icon/complain.png" id="indexLogo-complain-box"></a>
          </div>
        
          <ul class="nav navbar-nav">       
              <li><a href="../../index.php#complainBoxDev" class="nev-custom-css">Complain Box</a></li>
              <li><a href="../../index.php#description-div-custom" class="nev-custom-css" id="ourAppAnc">Our App</a></li>
              <li><a href="../../index.php#purpose-container" class="nev-custom-css">Purpose</a></li>
              <li><a href="../../index.php#developers-container" class="nev-custom-css">Supervisor & Developers</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" class="nev-custom-css"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>


          
        </div>
    </nav><!-- end of nevigation -->





    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default" style="border-color: #26A69A;">
            <div class="panel-body">
              <div id="header-div" style="text-align: center;">
                <img id="logo" style="height: 70px; width: 70px; margin-bottom: 20px;" src="../pictures/icon/complain.png">
              </div>
              <h4 id="header-information" style="text-align: center;">Forgot Password</h4>
              <br><hr>
              
              <form action="../serverPHP/forgotPassword.php" method="POST">
                <div class="form-group" class="tmp">
                  <h4>Enter Admin's valid email address to recover password.</h4>
                  <?php  
                    if(isset($_GET['error']) == true) {
                      if($_GET['error'] == 1) {
                        echo '<p style="color:red;">Wrong admin email provided !!!</p>';
                      }
                  
                    }

                  ?>
                  <input type="email" name="email" class="form-control" placeholder="" required>
                </div>
                
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success btn-lg btn-block btn-sm" value="Recover Password" style="background-color: #009688;">
                </div>
              </form> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> <!-- /container -->

  </body>
</html>