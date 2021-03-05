<?php


include('conn.php');

//$login_session =$user;

//$login_id =$id;





?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pagecss.css">
  <link rel="stylesheet" href="img.css">




  <style type="text/css">
    
    .g {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 210px;
  height: 200px;
}
.box{
 
 border: 1px solid #F0F0F0;
    background-color: #eaa3ce;
    margin: 2px 0px;
}
.demoInputBox {
    padding: 10px;
    border: #F0F0F0 1px solid;
    border-radius: 4px;
    margin: 0px 5px
}
.btnSearch {
    padding: 10px;
    border: #F0F0F0 1px solid;
    border-radius: 4px;
    margin: 0px 5px;
}
.perpage-link {
    padding: 5px 10px;
    border: #C8EEFD 2px solid;
    border-radius: 4px;
    margin: 0px 5px;
    background: #FFF;
    cursor: pointer;
}
.current-page {
    padding: 5px 10px;
    border: #C8EEFD 2px solid;
    border-radius: 4px;
    margin: 0px 5px;
    background: #eaa3ce;
}
.btnDeleteAction {
    background-color: #eaa3ce;
    padding: 2px 5px;
    color: #FFF;
    text-decoration: none;
}


  </style>
</head>
<body>
<svg style="display:none;">
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <rect width="7" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
      <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z"/><rect x="3" y="5" width="9" height="1"/><rect x="3" y="7" width="7" height="1"/><rect x="3" y="9" width="5" height="1"/>
    </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)"/><polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14"/>
    </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z"/>
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85"/>
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97"/><polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07"/><rect x="4.16" y="1.75" width="1" height="7.97"/><polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99"/><rect x="1.28" width="1" height="4.97"/><polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53"/><rect x="12.84" y="11.03" width="1" height="4.97"/><polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47"/>
    </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z"/><path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z"/>
    </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81"/>
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z"/><rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)"/>
  </symbol>
</svg>
<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src="pic.png" alt="Coza">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Heaven On Earth</h3>
      </li>
      <!-- <li>
        <a href="#0">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>Pages</span>
        </a>
      </li> -->
      <li>
        <a href="carecoza.php">
          <svg>
            <use xlink:href="#users"></use>
          </svg>
          <span>Parents</span>
        </a>
      </li>
      <li>
        <a href="que.php">
            <svg>
              <use xlink:href="#trends"></use>
            </svg>
            <span>Queue</span>
          </a>
      </li>
      <li>
        <a href="attendance.php">
          <svg>
            <use xlink:href="#collection"></use>
          </svg>
          <span>Attendance</span>
        </a>
      </li>
       <li>
        <a href="celeb.php">
          <svg>
            <use xlink:href="#appearance"></use>
          </svg>
          <span>Celebrations</span>
        </a>
      </li>
      <li>
        <a href="parents.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>All Parents</span>
        </a>
      </li>
     
     
      <li>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>Collapse</span>
        </button>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content">
  <section class="search-and-user">
    <form>
      <h1>  Parents By Workforce </h1>

      
     
    </form>
    <div class="admin-profile">
      <span class="greeting">Child Care Admin:</span>
      <div class="notifications">
        <span class="badge"></span>
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
  </section>
  <section class="grid">

<?php


?>

   <article style="height:100%; display: block" id="children">

  

<article style="display: block;">
  <h2>Parents from Protocol Department</h2>
     <?php

$sql2 = "SELECT *   FROM parents  WHERE dept = 'Protocol'";
if($result2 = mysqli_query($db, $sql2)){
    if(mysqli_num_rows($result2) > 0){
        echo"<div class='table-responsive'>";  
        echo "<table class='table'>";
            echo "<tr class='thead-dark table-hover'>";
                echo "<th>Name</th>";
                
                echo "<th>Address</th>";

                
                
                echo "<th>Phone Number</th>";

                

              

                echo "<th>Action</th>";
                
                
                
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result2)){
            echo "<tr scope='row'>";
                echo "<td style='padding: 15px;'>" . $row['Pname'] . "</td>";
              
                

                echo "<td style='padding: 15px;'>" . $row['address'] . "</td>";
                
                echo "<td style='padding: 15px;'>" . $row['phone'] . "</td>";?>

               
          

        <td style='padding: 15px;'><a  href='tel:=<?php echo $row['phone']; ?>' title='Call Parent' class='btnDeleteAction'>Call</a></td>
           <?php

           echo "</tr>";
        }
        echo "</table>";
        echo"</div>";
        // Free result set
        mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 

?>

<hr>
<hr>
<hr>
<hr>
<h2>Parent From Child Care Department!</h2>
     <?php

$sql2 = "SELECT *   FROM parents  WHERE dept = 'ChildCare'";
if($result2 = mysqli_query($db, $sql2)){
    if(mysqli_num_rows($result2) > 0){
        echo"<div class='table-responsive'>";  
        echo "<table class='table'>";
            echo "<tr class='thead-dark table-hover'>";
                echo "<th>Name</th>";
                
                echo "<th>Address</th>";

                
                
                echo "<th>Phone Number</th>";

                

              

                echo "<th>Action</th>";
                
                
                
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result2)){
            echo "<tr scope='row'>";
                echo "<td style='padding: 15px;'>" . $row['Pname'] . "</td>";
              
                

                echo "<td style='padding: 15px;'>" . $row['address'] . "</td>";
                
                echo "<td style='padding: 15px;'>" . $row['phone'] . "</td>";?>

               
          

        <td style='padding: 15px;'><a  href='tel:=<?php echo $row['phone']; ?>' title='Call Parent' class='btnDeleteAction'>Call</a></td>
           <?php

           echo "</tr>";
        }
        echo "</table>";
        echo"</div>";
        // Free result set
        mysqli_free_result($result2);
    } else{
        echo "They are yet to register.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 

?>

<hr>
<hr>
<hr>
<hr>
<h2>Parent From Ushering Department!</h2>
     <?php

$sql2 = "SELECT *   FROM parents  WHERE dept = 'Ushering'";
if($result2 = mysqli_query($db, $sql2)){
    if(mysqli_num_rows($result2) > 0){
        echo"<div class='table-responsive'>";  
        echo "<table class='table'>";
            echo "<tr class='thead-dark table-hover'>";
                echo "<th>Name</th>";
                
                echo "<th>Address</th>";

                
                
                echo "<th>Phone Number</th>";

                

              

                echo "<th>Action</th>";
                
                
                
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result2)){
            echo "<tr scope='row'>";
                echo "<td style='padding: 15px;'>" . $row['Pname'] . "</td>";
              
                

                echo "<td style='padding: 15px;'>" . $row['address'] . "</td>";
                
                echo "<td style='padding: 15px;'>" . $row['phone'] . "</td>";?>

               
          

        <td style='padding: 15px;'><a  href='tel:=<?php echo $row['phone']; ?>' title='Call Parent' class='btnDeleteAction'>Call</a></td>
           <?php

           echo "</tr>";
        }
        echo "</table>";
        echo"</div>";
        // Free result set
        mysqli_free_result($result2);
    } else{
        echo "They are yet to register.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 

?>
<hr>
<hr>
<hr>
<hr>
<h2>Parent From Sparkles Department!</h2>
     <?php

$sql2 = "SELECT *   FROM parents  WHERE dept = 'Sparkles'";
if($result2 = mysqli_query($db, $sql2)){
    if(mysqli_num_rows($result2) > 0){
        echo"<div class='table-responsive'>";  
        echo "<table class='table'>";
            echo "<tr class='thead-dark table-hover'>";
                echo "<th>Name</th>";
                
                echo "<th>Address</th>";

                
                
                echo "<th>Phone Number</th>";

                

              

                echo "<th>Action</th>";
                
                
                
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result2)){
            echo "<tr scope='row'>";
                echo "<td style='padding: 15px;'>" . $row['Pname'] . "</td>";
              
                

                echo "<td style='padding: 15px;'>" . $row['address'] . "</td>";
                
                echo "<td style='padding: 15px;'>" . $row['phone'] . "</td>";?>

               
          

        <td style='padding: 15px;'><a  href='tel:=<?php echo $row['phone']; ?>' title='Call Parent' class='btnDeleteAction'>Call</a></td>
           <?php

           echo "</tr>";
        }
        echo "</table>";
        echo"</div>";
        // Free result set
        mysqli_free_result($result2);
    } else{
        echo "They are yet to register.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 

?>
</article>
    
   
   
  </section>
  <footer class="page-footer">
    <small>Coza <span>❤</span> by <a href="" target="_blank">ChildCare</a>
    </small>
  </footer>
</section>




</body>
<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="pagejs.js"></script>

</html>