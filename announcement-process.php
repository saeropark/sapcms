
<?php

  session_start();

//    if ((!isset($_SESSION['addAnnouncement'])) && (!isset($_SESSION['announcement-process'])))
//    {
//            header('Location: index.php');
//    }
//    if (isset($_SESSION['addAnnouncement']))
//    {
//            unset($_SESSION['addAnnouncement']);
//    }
//    if (!isset($_SESSION['announcement-process']))
//    {
//            $_SESSION['announcement-process'] = '';
//    }
//  
//// define variables and set to empty values
// 
//
  $title = "";
  $date = "";
  $time = "";
  $location = "";
  $description = "";
  $postType = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     //$title = $_SESSION['title'];
   if (isset($_POST['inputTitle'])) {
     $title = $_POST['inputTitle'];
     //$_SESSION['title'] = $title;
    // $title = 'Success';
   }
   if (isset($_POST['datePicker'])) {
     $date = $_POST['datePicker'];
     
   }if (isset($_POST['timePicker'])) {
     $time = $_POST['timePicker'];
     
   }if (isset($_POST['inputLocation'])) {
     $location = $_POST['inputLocation'];
     
   }if (isset($_POST['inputDescription'])) {
     $description = $_POST['inputDescription'];
 
   }
   if (isset($_POST['postType'])) {
     $postType = $_POST['postType'];
   }
   
   
   
   
//    $title= test_input($_POST['inputTitle']);
//    $date = test_input($_POST['datePicker']);
//    $time = test_input($_POST['timePicker']);
//    $location = test_input($_POST['inputLocation']);
//    $description = test_input($_POST['inputDescription']);
//    $postType = test_input($_POST['postType']);
  }

//  function test_input($data) {
//    if (isset($data)){
//      $data = trim($data);
//      $data = stripslashes($data);
//      $data = htmlspecialchars($data);
//      return $data;
//    }
//   
//  }
 

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
<!--        <script src="js/connect_Firebase.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/layout.css" /> 
        <script>
        function writeToFireb(type, title, date, time, location, description, timestamp){
        
        var confirmation = confirm("writeToFireb");
         //setup(); 
         var config = {
            apiKey: "AIzaSyDCB-XYhPG5_tps1ZPR4lMLs0p1X_uPGpQ",
            authDomain: "asap-c4472.firebaseapp.com",
            databaseURL: "https://asap-c4472.firebaseio.com/",
            storageBucket: "asap-c4472.appspot.com",
            messagingSenderId: "625916539957",
            };
            
        firebase.initializeApp(config);
            
         var confirmation2 = confirm("setup completed");
         
          var _title = title;
          var _date = date;
          var _time = time;
          var _location = location;
          var _description = description;
          var _timestamp = timestamp;
          var _type = type;
//          var _uDate = uDate;
//          var _cDate = cDate;
//          var _author = author;
          
          
          /*
           * _type will take in Event/Promotion/Announcement
           * we use push because we want to give a unique identifier to each data set.
           */
          
          //pushes uses a unique key. suitable for 100 users submitting something at one time. sequential number is not ideal.
          var asapDb = firebase.database().ref(_type);
          asapDb.push({
                  //_timestamp: {
                  title: _title,
                  date: _date,
                  time: _time,
                  location: _location,
                  description: _description,
                  postType: _type,
                  timestamp: _timestamp,
                  created: {
                    author: 'admin',
                    createdDate: '22feb'
                  },
                  updated: {
                    author: 'admin',
                    updatedDate: '22feb'
                  }
               // }
          }, finished);

      };
      
      function finished(error) {
        if (error) {
          alert("There seems to be a problem! Try submitting again.");
        } else {
          alert("Created successfully");
          window.location.replace('home.php');
        }
      }
      
      function uploadToFirebase() {
            //setup();
           var confirmation = confirm("Confirm to publish?");
           if (confirmation == true) {
             
             var postType = "<?php echo $postType; ?>";
             var title = "<?php echo $title; ?>";
             var date = "<?php echo $date; ?>";
             var time = "<?php echo $time; ?>";
             var location = "<?php echo $location; ?>";
             var description = "<?php echo $description; ?>";
             var timestamp = Date.now();
             
              writeToFireb(postType, title, date, time, location, description, timestamp);
           }
           
           };
      
        </script>
        
        
<!--        
        <script type="text/javascript">
          
     
            
          function uploadToFirebase() {
           var confirmation = confirm("Confirm to publish?");
           if (confirmation == true) {
             
             var postType = "<?php echo $postType; ?>";
             var title = "<?php echo $title; ?>";
             var date = "<?php echo $date; ?>";
             var time = "<?php echo $time; ?>";
             var location = "<?php echo $location; ?>";
             var description = "<?php echo $description; ?>";
             var timestamp = Date.now();
            
           
             
             
//             function writeUserData(type, title, date, time, location, description, timestamp) {
//              var _title = title;
//              var _date = date;
//              var _time = time;
//              var _location = location;
//              var _description = description;
//              var _timestamp = timestamp;
//              var _type = ptype;
//
//
//              var data = {
////                title: title,
////                date: date,
////                time: time,
////                location: location,
////                description: description,
////                timestamp: timestamp,
////                post: postType
////              };
//              title: _title,
//              date: _date,
//              time: _time,
//              location: _location,
//              description: _description,
//              postType: _type,
//              timestamp: _timestamp
//              };
//
//              firebase.database().ref.child('Event').push(_timestamp).push(data);
//          //};
//              };
             //setup();
             writeToFireb(postType, title, date, time, location, description, timestamp);
           };
          };
        </script>-->
      
    </head>
    <body>
        <?php include'header.php';?> 
        <div class="col-sm-offset-1 col-sm-12">
            <div class="col-sm-offset-1">
                <h1>Confirm your details</h1>
            </div>
        
            <div class="container col-sm-offset-1 col-sm-3">
                <img id="imgDetail"  src="images/screen.png">
            </div>
            
            <div class="container">
              <div class="col-sm-8">
                  <h3 class="col-sm-8" id="eventHeading"><?php echo $title; ?></h3>
              </div>

              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-calendar col-sm-1" style="font-size: 150%;"></span>
                  <p id="date"><?php echo $date; ?></p>
              </div>

              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-time col-sm-1" style="font-size: 150%"></span>
                  <p id="time"><?php echo $time; ?></p>
              </div>

              <div class="col-sm-8">
                  <span class="glyphicon glyphicon-map-marker col-sm-1" style="font-size: 150%"></span>
                  <p id="location"><?php echo $location; ?></p>
              </div>
                
              <div class="col-sm-8">
                  <label class="col-sm-2 control-label"><strong>Post Type: </strong></label>
                  <p id="postType"><?php echo $postType; ?></p>
              </div>

              <div class="col-sm-8">
                  <label class="col-sm-2 control-label">Description:</label>
                  <p id="description"><?php echo $description; ?></p>
              </div>
                
                <div class="col-sm-8 inline">
                    <button onclick="history.go(-1);" class="btn btn-default">Back </button>
                    <button onclick="uploadToFirebase()" class="btn btn-primary">Confirm</button>
                </div>
          </div>
      </div>
        
        
        
    </body>
</html>