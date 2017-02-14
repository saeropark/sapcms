<!doctype html>

<!-- DATE AND TIME FORM FILL CANNOT BE USED ON FIREFOX, OR IE12 AND BELOW -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     
        <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
         <script>
           // Initialize Firebase
           // TODO: Replace with your project's customized code snippet
           var config = {
             apiKey: "AIzaSyDCB-XYhPG5_tps1ZPR4lMLs0p1X_uPGpQ",
             authDomain: "asap-c4472.firebaseapp.com",
             databaseURL: "https://asap-c4472.firebaseio.com/",
             storageBucket: "asap-c4472.appspot.com",
             messagingSenderId: "625916539957",
           };
           firebase.initializeApp(config);
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/newcss.css" /> 
      
    </head>
    <body>
        <?php include 'header.php'?>
       <div class="col-lg-offset-2 col-lg-10">
           <h1>Post an Event</h1>
       </div>
        <div class="container col-lg-offset-2 col-lg-10">
        <form class="form-horizontal col-lg-8 " action="announcement-process.php" method="post">
            
          <!--Post Type: Announcement, Event, Promotion-->
          <div class="form-group">
              <label for="postTypeOption" class="col-sm-2 control-label">Post Type</label>
              <div class="col-sm-10">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="announcementRadio" value="Announcment"> Announcement
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="eventRadio" value="Event"> Event
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="promoRadio" value="Promotion"> Promotion
                </label>
              </div>
          </div>
          
          <!--Title-->
          <div class="form-group">
            <label for="lblTitle" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Title">
            </div>
          </div>
          <!--Date-->
          <div class="form-group">
            <label for="lblDate" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-3">
                <input type="date" id="date" class="form-control">
            </div>
          </div>
          
          <!--Time-->
          <div class="form-group">
            <label for="lblTime" class="col-sm-2 control-label">Time</label>
            <div class="col-sm-3">
                <input type="time" id="time" class="form-control">
            </div>
          </div>
          
          <!--Location-->
          <div class="form-group">
            <label for="lblPassword" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Location">
            </div>
          </div>
          
          <!--Upload File-->
          <div class="form-group">
            <label for="lblFile" class="col-sm-2 control-label">Upload image</label>
              <div class="col-sm-10">
                <input type="file" id="exampleInputFile">
              </div>
            <p class="help-block col-sm-offset-2 col-sm-10">Make sure image uploaded is not more than 1mb and in .jpg/jpeg or .png format.</p>
          </div>
          
          <!--Description-->
          <div class="form-group">
            <label for="lblDescription" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="descriptiont"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Publish post</button>
            </div>
          </div>
        </form>
      </div>
    </body>
    
</html>
