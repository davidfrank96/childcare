<?php

include('session.php');

$user = $login_session;
//$login_id =$id;

 $id =  $login_id;

 $name = $fname;

  // Create database connection
  include('conn.php');

  

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);





     if(empty($name)){
  echo '<script type="text/javascript">
    
     alert("You forgot the name pls");
 </script>';
  echo "<script>setTimeout(\"location.href = 'regchild.php';\",1500);</script>";

 }elseif(empty($gender)){
     echo '<script type="text/javascript">
  
     alert("Sorry, you didn\'t tell us the gender");
 </script>';
      echo "<script>setTimeout(\"location.href = 'regchild.php';\",1500);</script>";
 }elseif(empty($image)){

      echo '<script type="text/javascript">
    
     alert("Kindly upload an image of your child");
      </script>';
           echo "<script>setTimeout(\"location.href = 'regchild.php';\",1500);</script>";
      }


    // image file directory
    $target = "images/".basename($image);



    $sql_u = "SELECT * FROM children WHERE name='$name' AND Pid = $id";
    $res_u = mysqli_query($db, $sql_u);
     if (mysqli_num_rows($res_u) > 0) {
      // $name_error = "Sorry... username already taken";  

echo '<script type="text/javascript">
    
    alert("Name has been registered by You");
</script>';
 echo "<script>setTimeout(\"location.href = 'regchild.php';\",3000);</script>";
 }else{


    $sql = "INSERT INTO children (image, name, dob, gender, Pid ) VALUES ('$image', '$name', '$dob', '$gender', '$id')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
       echo '<script type="text/javascript">
    
    alert("Successfully Added!");
</script>';
 echo "<script>setTimeout(\"location.href = 'page.php';\",1500);</script>";

    }else{
        echo '<script type="text/javascript">
    
    alert("Something went wrong, Try again!");
</script>';
 echo "<script>setTimeout(\"location.href = 'regchild.php';\",1500);</script>";

    }
  }
  }


  // $result = mysqli_query($db, "SELECT * FROM images");
?>

