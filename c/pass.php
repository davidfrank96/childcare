<?php
 include('session.php');
include('conn.php');

 $id =   $login_id;

if (isset($_POST['re_password']))
	{
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$password_query = mysqli_query($db, "select * from parents where Pid=$id ");
	$password_row = mysqli_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($db, "update parents set password='$new_pass' where Pid=$id ");
			echo "<script>alert('Update Sucessfully'); window.location='profile.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='password.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='password.php'</script>";
		}
	}
 
?>