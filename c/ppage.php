<?php
include('session.php');

include('conn.php');

//$login_session =$user;
$user = $login_session;
//$login_id =$id;

 $id =  $login_id;

 $name = $fname;



if (isset($_POST['que'])) {
    // Get image name
  $sql1 =  mysqli_query($db, "INSERT INTO queue ( status, Pid) VALUES ('3', '$id')");
  

  if (  $sql1 ){
echo'<script type="text/javascript">
    
    alert("You are placed on queue, please be patient");
</script>';
  }else{
    echo'<script type="text/javascript">
    
    alert("Something is wrong, try again pls");
</script>';
  }
   }




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
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>
<!-- 
    <div class="panel panel-left panel-cover">
              <nav class="list-nav-small">
                <ul>
                  <li class="home-icon-small"><a href="index-2.html" class="close-panel">Home</a></li>
                  <li class="about-icon-small"><a href="about.html" class="close-panel">About</a></li>
                  <li class="features-icon-small"><a href="features.html" class="close-panel">Features</a></li>
                  <li class="photos-icon-small"><a href="photos.html" class="close-panel">Gallery</a></li>
                  <li class="video-icon-small"><a href="videos.html" class="close-panel">Videos</a></li>
                  <li class="blog-icon-small"><a href="blog.html" class="close-panel">Blog</a></li>
                  <li class="contact-icon-small"><a href="contact.html" class="close-panel">Contact</a></li>
                </ul>
              </nav>  
    </div> -->

    <div class="panel panel-right panel-cover">
      <div class="user_login_info">
        <div class="user_thumb">
        <img src="images/pic.png" alt="" title="" />
        </div>
        <h2><?php echo $name;  ?> ,<br> Celebrate you greatly</h2>
      
              <nav class="list-nav-small">
                <ul>
                  <li class="about-icon-small"><a  class="close-panel">Username: <?php  echo $user; ?></a></li>
                  
                  <li class="lock-icon-small"><a href="" class="close-panel">Profile</a></li>
                   <!-- <li class="lock-icon-small"><a href="photos.php" class="close-panel">Account</a></li> -->
                 
                
                  <li class="logout-icon-small"><a href="logout.php" class="close-panel external">Logout</a></li>
                </ul>
              </nav>
                <p><b>Heaven On Earth</b></p>
      </div>
    </div>

    <div class="views">

      <div class="view view-main">

        <div class="pages">

          <div data-page="index" class="page homepage">
            <div class="page-content">
                  
                  <div class="menu_open_icon"><a href="#" data-panel="left" class="open-panel"><img src="images/menu_open_circle.png" alt="" title="" /></a></div>
         <?php
                          $stat = "";
                          $pos = "";
                          $att="";
 $res = mysqli_query($db, "SELECT name, Pid  FROM attendance  where Pid = $id");
  while ($row = mysqli_fetch_array($res)) {
      echo ""; 
        $att =  $row['name'];
      }
 $res1 = mysqli_query($db, "SELECT *  FROM queue  where Pid = $id");
  while ($row = mysqli_fetch_array($res1)) {
      echo "";
      $stat =  $row['status']; 
       $pos =  $row['Qid'];
}   
            if(empty($att)){
         $message = '<h3 class="blink" style="background-color: #f50a0ab5;"><i>You have not registered your children in childcare today</i></h3>';
           }elseif(!empty($att) and ($stat == 1)){

           $message = '<h4  style="background-color: #33e01ad4;">Come and Pick your children</h4>';
           }elseif( !empty($att) and ($stat == 3)){
             $message = '<h4  style="background-color: #0737b3b5;">You are positioned at number '.$pos.' to pick your child</h4>';
           } elseif(!empty($att) and empty($stat)){
             $message ='<h4  style="background-color: #07aeb3b5;">In good hands, pick up when you are ready to leave church</h4>';
           }

            
               echo'   <div class="minimal_intro">
                    <span >Notification</span> <br>

                    </div>';

                    echo '<div class="pick">';

                   echo $message;

                   echo' </div>';
                  
                  
               
                  
                  
                 echo' <nav class="list-nav">
                    <ul>';
                     

                echo'
<form action="page.php" method ="POST">
  <input type="hidden" value="3">';
if (empty($att)){
            
 echo '<li class="about-icon"><a>Kindly go register your children at chidcare</a></li>';

        }elseif( !empty($att) and $stat == "3" ){

          echo '<li class="about-icon"><a>You will soon pick your children</a></li>';
          
          
        }elseif( !empty($att) and $stat == "1" ){

          echo '<li class="about-icon"><a>Thank You, Celebrate You</a></li>';

          
        }elseif( !empty($att)){

echo'<input style="width:80%;
padding:4% 0 4% 0; 
margin:10px 0 0 0; 
font-weight:normal;
text-align:center;
cursor:pointer; 
font-size:20px;
background-color:white;
color:green;
-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;
border: none;
cursor:pointer;"  type="submit" name="que" Value ="Pick Up">';

        }

                   
    
?>

</form>



                      <li class="responsive-icon"><a href="regchild.php" class="external">Add New Child</a></li>
                      <li class="photos-icon"><a  href="photos.php" data-panel="right" class="open-panel">My Children</a></li>
                    <!--   <li class="blog-icon"><a href="blog.html">Blog</a></li>
                      <li class="photos-icon"><a href="photos.html">Photos</a></li>
                      <li class="contact-icon"><a href="contact.html">Contact</a></li>
                    </ul> -->
                  </nav>
                  
                  
            </div>
          </div>
        </div>

        

      </div>
    </div>
    
    
    <!-- Services Popup -->
   
    
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

  </body>

<!-- Mirrored from sindevo.com/minio/minimal/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 09:12:52 GMT -->
</html>