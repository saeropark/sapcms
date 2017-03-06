<!doctype html>
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
          ref.orderByChild('timestamp').on("value", gotData, errData);
          
          function gotData(data) {
            var events = data.val();
            
            //call events based on keys and store as an object
            var keys = Object.keys(events);
            console.log(keys);
            var list = "";
            for (var i = 0; i < keys.length; i++) {
              var key = keys[i]; 
              var titles = events[key].title;
              var dates = events[key].date;
              var types = events[key].postType;
              console.log(titles, dates, types, key);
              
              //loop data to display
              var divHtml = '<div class="col-sm-6 col-md-3">' + 
                '<div class="thumbnail">' +
                '<img id="imgThumbnail" src="images/screen.png" alt="...">' +
                '<div class="caption">' +
                  '<h3>' + titles + '</h3>' +
                  '<p>Date: ' + dates + '</p>' +
                  '<p>Type: ' + types + '</p>' +
                '<form class="form-horizontal" action="announcementDetail.php"  method="post">'+
                '<div class="form-group">'+
                '<p><button type="submit" name="eventDetail" class="btn btn-primary" role="button" value='+key+'>View</button>' + //<a href="#" class="btn btn-default" role="button">Delete</a></p>
              '</div>' +
              '</form>'+
              '</div>'+
            '</div>' +
          '</div>'
              
              list += divHtml;
            }
            //write to list
            document.getElementById('perListing').innerHTML = list;
          };
          
          function errData(data) {
            console.log("you hit an error");
          };
          
        </script>
    </head>
    <body>
        <?php include 'header.php'?>
        
       <div class="col-sm-offset-1 col-sm-10">
        <h3 class="col-sm-10">List of Announcement</h3>
        <div id="perListing"> 
        </div>
         
      
    </body>
    
</html>
