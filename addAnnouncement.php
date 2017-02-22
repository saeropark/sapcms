<!doctype html>

<!-- DATE AND TIME FORM FILL CANNOT BE USED ON FIREFOX, OR IE12 AND BELOW -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/newcss.css" /> 
      
    </head>
    <body>
        <?php include 'header.php';
         session_start();
         ?>
   
       <div class="col-lg-offset-2 col-lg-10">
           <h1>Post an Event</h1>
       </div>
        <div class="container col-lg-offset-2 col-lg-10">
        
          <form class="form-horizontal col-lg-8 " action="announcement-process.php"  method="post">

          <!--Post Type: Announcement, Event, Promotion-->
          <div class="form-group">
              <label for="postTypeOption" class="col-sm-2 control-label">Post Type</label>
              <div class="col-sm-10">
                <label class="radio-inline">
                  <input type="radio" name="postType" value="Announcement" required="true"> Announcement
                </label>
                <label class="radio-inline">
                  <input type="radio" name="postType" value="Event"> Event
                </label>
                <label class="radio-inline">
                  <input type="radio" name="postType" value="Promotion"> Promotion
                </label>
              </div>
          </div>
          
          <!--Title-->
          <div class="form-group">
            <label for="lblTitle" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name ="inputTitle" placeholder="Title" required="true">
            </div>
          </div>
          <!--Date-->
          <div class="form-group">
            <label for="lblDate" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-3">
                <input type="date" name="datePicker" class="form-control" required="true">
            </div>
          </div>
          
          <!--Time-->
          <div class="form-group">
            <label for="lblTime" class="col-sm-2 control-label">Time</label>
            <div class="col-sm-3">
                <input type="time" name="timePicker" class="form-control" required="true">
            </div>
          </div>
          
          <!--Location-->
          <div class="form-group">
            <label for="lblPassword" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputLocation" placeholder="Location" required="true">
            </div>
          </div>
          
          <!--Upload File
          <div class="form-group">
            <label for="lblFile" class="col-sm-2 control-label">Upload image</label>
              <div class="col-sm-10">
                <input type="file" id="uploadImage">
              </div>
            <p class="help-block col-sm-offset-2 col-sm-10">Make sure image uploaded is not more than 1mb and in .jpg/jpeg or .png format.</p>
          </div>-->
          
          <!--Description-->
          <div class="form-group">
            <label for="lblDescription" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" name="inputDescription" name="inputDescription" required="true"></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name ="submit" class="btn btn-default">Publish post</button>
            </div>
          </div>

          
        </form>
            

      </div>
        
    </body>
    
</html>
