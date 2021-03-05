
<?php
require('conn.php');


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


<?php
session_start();


// $name= $Phone= $email= $address= $package= $username= $password= "";

 if (isset($_POST['reg'])) {
$name = mysqli_real_escape_string($db, $_POST['name']);
$Phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$dept = mysqli_real_escape_string($db, $_POST['dept']);

$username = mysqli_real_escape_string($db, $_POST['uname']);
$password = mysqli_real_escape_string($db, $_POST['pwd']);



    $sql_u = "SELECT * FROM parents WHERE username='$username'";
    $sql_e = "SELECT * FROM parents WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      // $name_error = "Sorry... username already taken";  

echo '<script type="text/javascript">
    
    swal("Sorry!", "The username is taken!", "error");
</script>';
 echo "<script>setTimeout(\"location.href = 'register.php';\",3500);</script>";



    }else if(mysqli_num_rows($res_e) > 0){
      // $email_error = "Sorry... email already taken"; 

      echo '<script type="text/javascript">
    
    swal("Sorry!", "The email is taken!", "error");
</script>';
 echo "<script>setTimeout(\"location.href = 'register.php';\",3500);</script>";
 
    }else{
          $sql = "INSERT INTO  `parents` (`Pname`, `phone`, `email`, `address`, `username`, `dept`,  `password`) VALUES ('$name', '$Phone', '$email', '$address', '$username','$dept', '$password')";

if (mysqli_query($db, $sql)) {
echo '<script type="text/javascript">
    
    swal("Awesome!", "Registration was successful!", "success");
</script>';
 echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";

 } else {
  echo '<script type="text/javascript">
    
    swal("Snap!", "Something went wrong, check internet!", "error");
</script>';
 echo "<script>setTimeout(\"location.href = 'register.php';\",1500);</script>";
     echo "Error: " . $sql . "<br>" . mysqli_error($db);
 }
    }



}
 

?>





</body>
</html>