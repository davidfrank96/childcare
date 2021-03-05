 <?php 


include('session.php');

 include('conn.php');

 
 $id =   $login_id;

if(isset($_POST['update'])){

$name = mysqli_real_escape_string($db, $_POST['name']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$dept = mysqli_real_escape_string($db, $_POST['dept']);


$sql1 = "UPDATE parents SET Pname = '$name', email = '$email', phone = '$phone',  dept = '$dept' WHERE Pid = $id";





if (mysqli_query($db, $sql1)) {
echo '<script type="text/javascript">
    
    alert("Update was successful!!");
</script>';
 echo "<script>setTimeout(\"location.href = 'page.php';\",1500);</script>";

 } else {
  echo '<script type="text/javascript">
    
    alert( "Something went wrong, please check internet!");
</script>';
 // echo "<script>setTimeout(\"location.href = 'profile.php';\",1500);</script>";
     echo "Error: " . $sql1 . "<br>" . mysqli_error($db);
 }


}




 ?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    
html, body {
  align-items: center;
  background: #f2f4f8;
  border: 0;
  display: flex;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 16px;
  height: 100%;
  justify-content: center;
  margin: 0;
  padding: 0;
}

form {
  --background: white;
  --border: rgba(0, 0, 0, 0.125);
  --borderDark: rgba(0, 0, 0, 0.25);
  --borderDarker: rgba(0, 0, 0, 0.5);
  --bgColorH: 0;
  --bgColorS: 0%;
  --bgColorL: 98%;
  --fgColorH: 210;
  --fgColorS: 50%;
  --fgColorL: 38%;
  --shadeDark: 0.3;
  --shadeLight: 0.7;
  --shadeNormal: 0.5;
  --borderRadius: 0.125rem;
  --highlight: #306090;
  background: white;
  border: 1px solid var(--border);
  border-radius: var(--borderRadius);
  box-shadow: 0 1rem 1rem -0.75rem var(--border);
  display: flex;
  flex-direction: column;
  padding: 1rem;
  position: relative;
  overflow: hidden;
}

form .email, form .email a {
  color: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
  font-size: 0.825rem;
  order: 4;
  text-align: center;
  margin-top: 0.25rem;
  outline: 1px dashed transparent;
  outline-offset: 2px;
  display: inline;
}

form a:hover {
  color: hsl(var(--fgColorH), var(--fgColorS), calc(var(--fgColorL) * 0.85));
  transition: color 0.25s;
}

form a:focus {
  color: hsl(var(--fgColorH), var(--fgColorS), calc(var(--fgColorL) * 0.85));
  outline: 1px dashed hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
  outline-offset: 2px;
}

form > div {
  order: 2;
}

label {
  display: flex;
  flex-direction: column;
}

.label-show-password {
  order: 3;
}

label > span {
  color: var(--borderDarker);
  display: block;
  font-size: 0.825rem;
  margin-top: 0.625rem;
  order: 1;
  transition: all 0.25s;
}

label > span.required::after {
  content: "*";
  color: #dd6666;
  margin-left: 0.125rem;
}

label input {
  order: 2;
  outline: none;
}

label input::placeholder {
  color: var(--borderDark);
}

/* trick from https://css-tricks.com/snippets/css/password-input-bullet-alternatives/ */
label input[name="password"] {
  -webkit-text-security: disc;
}

input[name="show-password"]:checked ~ div label input[name="password"] {
  -webkit-text-security: none;
}

label:hover span {
  color: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
}

input[type="checkbox"] + div label:hover span::before,
label:hover input.text {
  border-color: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
}

label input.text:focus,
label input.text:active {
  border-color:  hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
  box-shadow: 0 1px  hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
}

input.text:focus + span,
input.text:active + span {
  color:  hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
}

input, button {
  border: 1px solid var(--border);
  border-radius: var(--borderRadius);
  box-sizing: border-box;
  font-size: 1rem;
  height: 2.25rem;
  line-height: 1.25rem;
  margin-top: 0.25rem;
  order: 2;
  padding: 0.25rem 0.5rem;
  width: 15rem;
  transition: all 0.25s;
}

input[type="submit"], button {
  color: hsl(var(--bgColorH), var(--bgColorS), var(--bgColorL));
  background: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
  font-size: 0.75rem;
  font-weight: bold;
  margin-top: 0.625rem;
  order: 4;
  outline: 1px dashed transparent;
  outline-offset: 2px;
  padding-left: 0;
  text-transform: uppercase;
}

input[type="checkbox"]:focus + label span::before,
input[type="submit"]:focus {
  outline: 1px dashed hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
  outline-offset: 2px;
}

input[type="submit"]:focus {
  background: hsl(var(--fgColorH), var(--fgColorS), calc(var(--fgColorL) * 0.85));
}

input[type="submit"]:hover {
  background: hsl(var(--fgColorH), var(--fgColorS), calc(var(--fgColorL) * 0.85));
}

input[type="submit"]:active {
  background: hsl(var(--fgColorH), calc(var(--fgColorS) * 2), calc(var(--fgColorL) * 1.15));
  transition: all 0.125s;
}

/** Checkbox styling */
.a11y-hidden {
  position: absolute;
  top: -1000em;
  left: -1000em;
}

input[type="checkbox"] + label span {
  padding-left: 1.25rem;
  position: relative;
}

input[type="checkbox"] + label span::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 0.75rem;
  height: 0.75rem;
  border: 1px solid var(--borderDark);
  border-radius: var(--borderRadius);
  transition: all 0.25s;
  outline:1px dashed transparent;
  outline-offset: 2px;
}

input[type="checkbox"]:checked + label span::after {
  content: "";
  display: block;
  position: absolute;
  top: 0.1875rem;
  left: 0.1875rem;
  width: 0.375rem;
  height: 0.375rem;
  border: 1px solid var(--borderDark);
  border-radius: var(--borderRadius);
  transition: all 0.25s;
  outline:1px dashed transparent;
  outline-offset: 2px;
  background: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
}

/** PERSON */
figure {
  --skinH: 30;
  --skinS: 100%;
  --skinL: 87%;
  --hair: rgb(180,70,60);
  background: hsl(var(--fgColorH), calc(var(--fgColorS) * 2), 95%);
  border: 1px solid rgba(0,0,0,0.0625);
  border-radius: 50%;
  height: 0;
  margin: auto auto;
  margin-bottom: 2rem;
  order: 1;
  padding-top: 60%;
  position: relative;
  width: 60%;
  overflow: hidden;
}

figure div {
  position: absolute;
  transform: translate(-50%, -50%);
}

figure .skin {
  background: hsl(var(--skinH), var(--skinS), var(--skinL));
  box-shadow: inset 0 0 3rem hsl(var(--skinH), var(--skinS), calc(var(--skinL) * 0.95));
}

figure .head {
  top: 40%;
  left: 50%;
  width: 60%;
  height: 60%;
  border-radius: 100%;
  box-shadow: 0 -0.175rem 0 0.125rem var(--hair);
}

figure  .ears {
  top: 47%;
  left: 50%;
  white-space: nowrap;
}

figure .ears::before,
figure .ears::after {
  content: "";
  background: hsl(var(--skinH), var(--skinS), var(--skinL));
  border-radius: 50%;
  width: 1rem;
  height: 1rem;
  display: inline-block;
  margin: 0 2.1rem;
}

figure .head .eyes {
  top: 55%;
  left: 50%;
  white-space: nowrap;
}

@-webkit-keyframes blink {
  0%, 90%, 100% {
    height: 10px;
  }
  95% {
    height: 0;
  }
}

@keyframes blink {
  0%, 90%, 100% {
    height: 10px;
  }
  95% {
    height: 0px;
  }
}

figure .head .eyes::before,
figure .head .eyes::after {
  content: "";
  background: var(--borderDarker);
  border-radius: 50%;
  width: 10px;
  height: 10px;
  display: inline-block;
  margin: 0 0.5rem;
  -webkit-animation: blink 5s infinite;
  animation: blink 5s infinite;
  transition: all 0.15s;
}

input[name="show-password"]:checked ~ figure .head .eyes::before,
input[name="show-password"]:checked ~ figure .head .eyes::after {
  height: 0.125rem;
  animation: none;
}

figure .head .mouth {
  border: 0.125rem solid transparent;
  border-bottom: 0.125rem solid var(--borderDarker);
  width: 25%;
  border-radius: 50%;
  transition: all 0.5s
}

form:invalid figure .head .mouth {
  top: 75%;
  left: 50%;
  height: 10%;
}

form:valid figure .head .mouth {
  top: 60%;
  left: 50%;
  width: 40%;
  height: 40%;
}

figure .hair {
  top: 40%;
  left: 50%;
  width: 66.66%;
  height: 66.66%;
  border-radius: 100%;
  overflow: hidden;
}

figure .hair::before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  background: var(--hair);
  border-radius: 50%;
  top: -60%;
  left: -50%;
  box-shadow: 4rem 0 var(--hair);
}

figure .neck {
  width: 10%;
  height: 40%;
  top: 62%;
  left: 50%;
  background: hsl(var(--skinH), var(--skinS), calc(var(--skinL) * 0.94));
  border-radius: 0 0 2rem 2rem;
  box-shadow: 0 0.25rem var(--border);
}

figure .person-body {
  width: 60%;
  height: 100%;
  border-radius: 50%;
  background: red;
  left: 50%;
  top: 126%;
  background: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
}

figure .shirt-1,
figure .shirt-2 {
  width: 12%;
  height: 7%;
  background: hsl(var(--bgColorH), var(--bgColorS), var(--bgColorL));
  top: 76%;
  left: 36.5%;
  transform: skew(-10deg) rotate(15deg)
}

figure .shirt-2 {
  left: 52.5%;
  transform: skew(10deg) rotate(-15deg)
} 
  </style>
</head>
<body>

   <?php

  $id =   $login_id;


$sql = "SELECT * FROM parents  WHERE Pid = $id";
 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result)) {
     
    // echo $row['email'];
   
$username =   $row['username']; 
$phone =   $row['phone']; 
$email =   $row['email']; 
$address =   $row['address'];
$Pname =   $row['Pname'];
 $dept  =   $row['dept']; 







 
 }

    ?>

 <form method="POST" action="profile.php" id="login-form" class="login-form" autocomplete="off" role="main">
  <div>

  <center><button> Your profile</button></center>
  </div>
  <h1 class="a11y-hidden">Update profile</h1>
  
  <div>
      <center> <label class="label-email">
      <span class="">Username: <?php echo $username ?></span>
    </label></center>
    <label class="label-email">
      <input type="text" class="text" name="name"  tabindex="1" value="<?php echo $Pname; ?>" required />
      <span class="required">Name</span>
    </label>

    <label class="label-email">
      <input type="text" class="text" name="phone" placeholder="Email" tabindex="1" value="<?php echo $phone; ?> " required />
      <span class="required">Phone Number</span>
    </label>

    <label class="label-email">
      <input type="email" class="text" name="email" placeholder="Email" tabindex="1"  value="<?php echo $email; ?>"  required />
      <span class="required">Email</span>
    </label>

    <label class="label-email">
      <input type="text" class="text" name="dept" placeholder="Email" tabindex="1"  value="<?php echo $dept; ?>"  required />
      <span class="required">Church Department</span>
    </label> 
  </div>
  <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
   <div class="email">
    <a href="password.php">Change password</a>
  </div>
  <!-- <div>
    <label class="label-password">
      <input type="text" class="text" name="password" placeholder="Password" tabindex="2" required />
      <span class="required">Password</span>
    </label>
  </div> -->
 
  <br>
  <input type="submit" name="update" value="Update" />
<div class="email">
    <a href="page.php">Go to dashboard</a>
  </div>
  
  
  <figure aria-hidden="true">
    <div class="person-body"></div>
    <div class="neck skin"></div>
    <div class="head skin">
      <div class="eyes"></div>
      <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="ears"></div>
    <div class="shirt-1"></div>
    <div class="shirt-2"></div>
  </figure>
</form>
</body>
</html>