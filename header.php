
 <div class="container" id="nav">
        <nav class="navbar navbar-inverse col-sm-12">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">ASAP mgmt</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
                <ul class="nav navbar-nav">
                <li <?php if ($currentPage == "index.php") {echo 'class="active"';} ?>><a href="./index.php"><span class="glyphicon glyphicon-home"></span>Index</a></li>
                <li <?php if ($currentPage == "home.php") {echo 'class="active"';} ?>><a href="./home.php"><span class="glyphicon glyphicon-star"></span>Home</a></li>
                <li <?php if ($currentPage == "addAnnouncement.php") {echo 'class="active"';} ?>><a href="./addAnnouncement.php"><span class="glyphicon glyphicon-lock"></span>Add Announcement</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>About Us <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">item 1</a></li>
                        <li><a href="#">item 2</a></li>
                        <li><a href="#">item 3</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        
        </div>
         
         
