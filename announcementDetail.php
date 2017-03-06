<?php
  $key = '';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['eventDetail'])) {
     $key = $_POST['eventDetail'];
   }
  }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
        <script src="js/connect_Firebase.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/layout.css" /> 
        <script>
        var ref = firebase.database().ref("Event");
          ref.on("value", gotData, errData);
          
          function gotData(data) {
            var events = data.val();
            //call events based on keys and store as an object
            var key = "<?php echo $key; ?>";
            console.log(key);
            
            var titles = events[key].title;
            var dates = events[key].date;
            var time = events[key].time;
            var location = events[key].location;
            var description = events[key].description;
            console.log(titles, dates, time, location, description, key);
              
             
            document.getElementById('eventHeading').innerHTML = titles;
            document.getElementById('date').innerHTML = dates;
            document.getElementById('time').innerHTML = time;
            document.getElementById('location').innerHTML = location;
            document.getElementById('description').innerHTML = description;
          };
          
          function errData(data) {
            console.log("you hit an error");
          };
          </script>
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
                  <label class="col-sm-2 control-label">Description: </label>
                  <p id ="description">Description</p>
              </div>
          </div>
      </div>
    </body>
</html>