<?php
include('session.php');

include('conn.php');

//$login_session =$user;
$user = $login_session;
//$login_id =$id;

 $id =  $login_id;

 $name = $fname;


 ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<!-- <meta http-equiv="refresh" content="10"> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-320x460.png" />
<title>Child Care Software</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="text.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="page.php"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Photos</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle_photos">My Children Photos</h2>
      
              <div class="gallery_switch">        
                <a href="#" id="view13" class="switcher active"><img src="images/switch_13_active.png" alt="Grid"></a>
                <a href="#" id="view12" class="switcher"><img src="images/switch_12.png" alt="Grid"></a>
                <a href="#" id="view11" class="switcher"><img src="images/switch_11.png" alt="List"></a>
              </div>
      
      
                <ul id="photoslist" class="photo_gallery_13">

                   <?php
        $result = mysqli_query($db, "SELECT * FROM children where Pid = $id");
    while ($row = mysqli_fetch_array($result)) {
     

       
        echo" <li><a rel='gallery-3' href='../images/".$row['image']."' title=".$row['name']." class='swipebox'><img src='../images/".$row['image']."' alt='My Child's pic/></a></li>";


      
   }
  ?>
  
                <div class="clearleft"></div>
                </ul>
     <div class="clearleft"></div> 
      </div>
      
      
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

  </body>

</html>