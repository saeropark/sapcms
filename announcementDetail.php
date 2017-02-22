

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/layout.css" /> 
      
    </head>
    <body>
        <?php include'header.php';
         session_start();?> 
        <div class="col-sm-offset-1 col-sm-12">
            <div class="col-sm-offset-1">
              <h1>Event Detail</h1>
            </div>
        
            <div class="container col-sm-offset-1 col-sm-3">
                <img id="imgDetail"  src="images/screen.png">
            </div>
            
            <div class="container">
              <div class="col-sm-8">
                  <h3 class="col-sm-8" id="eventHeading" value="">Event Title</h3>
              </div>
              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-calendar col-sm-1" style="font-size: 150%;"></span>
                  <p id="date">Date</p>
              </div>

              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-time col-sm-1" style="font-size: 150%"></span>
                  <p id="time">Time</p>
              </div>

              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-map-marker col-sm-1" style="font-size: 150%"></span>
                  <p id="location">Location</p>
              </div>

              <div class="col-sm-8">
                  <label class="col-sm-2 control-label">Description</label>
              </div>
          </div>
      </div>
    </body>
</html>