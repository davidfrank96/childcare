<!DOCTYPE html>
<html>

  <head>
    <title>Sign Up into Child Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="regcss.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>


    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
            <h2 id="heading">Sign Up to Child Care</h2>
            <p>Celebrate you, kindly fill all fields</p>
            <form id="msform" method="POST" action="reg.php">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="account"><strong>Personal Details</strong></li>
                <li id="personal"><strong>Profile</strong></li>
              
                <li id="confirm"><strong>Finish</strong></li>
              </ul>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div> <br> <!-- fieldsets -->

              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Personal Information:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 1 - 3</h2>
                    </div>
                  </div> <label class="fieldlabels">Name: *</label> <input type="text" name="name" placeholder="Full Name" /> <label class="fieldlabels">Email: *</label> <input type="text" name="email" placeholder="Email Address" /> <label class="fieldlabels">Phone No.: *</label> <input type="text" name="phone" placeholder="Contact No." /> <label class="fieldlabels">Address: *</label> <input type="text" name="address" placeholder="Address" />
                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              </fieldset>



              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Account Information: <span  id='message'></span></h2>
                      <!--  <h4></h4> -->
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 2 - 3</h2>
                    </div>
                  </div> <label class="fieldlabels">Department *</label>
                  <select name="dept">
                    <option value="Nil">Choose Category</option>
                    <option value="Nil">NOT A WORKER</option>
                    <option value="Prinicipal">Prinicipal</option>
                    <option value="Protocol">Protocol</option>
                    <option value="ChildCare">Child Care</option>
                    <option value="ChildCare">Child Care</option>
                    <option value="Sparkles">Sparkles</option>
                    <option value="Avalanche">Avalanche</option>
                    <option value="HH">H and H</option>


                  </select>
                    <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" id="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password"  id="confirm_password" name="cpwd" placeholder="Confirm Password" />
                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              </fieldset>
              
              
              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Finish:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Step 3 - 3</h2>
                    </div>
                  </div> <br><br>
                  <h2 class="purple-text text-center"><strong>Good Job<br> Almost Done! !</strong></h2> <br>
                  <div class="row justify-content-center">
                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                  </div> <br><br>
                  <div class="row justify-content-center">
                    <div class="col-7 text-center">
                      <h5 class="purple-text text-center">Press the submit button to complete registration</h5>
                      <input type="submit" name="reg" class="next action-button" value="Submit" />
                    </div>
                  </div>
                </div>
              </fieldset>

            </form>
          </div>
        </div>
      </div>
    </div>

  </body>

  <script type="text/javascript" src="regjs.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script type="text/javascript">
           $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password Matched').css('color', 'green');
  } else 
    $('#message').html('Not Matching yet!').css('color', 'red');
});
       </script>

</html>
