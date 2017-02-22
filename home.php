<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src='https://cdn.firebase.com/js/client/1.1.1/firebase.js'></script>
        <script src='js/connect_Firebase.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" > 
        <link rel="stylesheet" href="css/layout.css" /> 
      
    </head>
    <body>
        <?php include 'header.php'?>
        
       <div class="col-sm-offset-1 col-sm-10">
       
              <h3 class="col-sm-10">List of Announcement</h3>
   
          
     <?php 
      for ($x = 0; $x <= 10; $x++) {
          echo '
            <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img id="imgThumbnail" src="images/screen.png" alt="...">
              <div class="caption">
                <h3 id="annTitle">Thumbnail label</h3>
                <p id="annDate">Date.</p>
                <p id="annType">Post Type</p>
                
                <p><a href="./announcementDetail.php" class="btn btn-primary" role="button">View</a> <a href="#" class="btn btn-default" role="button">Delete</a></p>
              </div>
            </div>
          </div>
        ';
      } 
      ?>
      </div>
           
      
    </body>
    
</html>

