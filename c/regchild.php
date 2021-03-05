



<!DOCTYPE html>
<html>
<head>
	<title>COZA - Child Care || Add your Children</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h2 id="heading">Register your kids to ChildCare</h2>
                <p>Fill all form field to go to next step</p>
                <img class="coza" src= "images/pic.png" >
                
                <form id="msform" action="reg_action.php" method="POST" enctype="multipart/form-data">
                    <!-- progressbar -->
                    <ul id="progressbar">
                       
                        <li class="active" id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>Image</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                   
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Child Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 3</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Child's Name: *</label> <input type="text" name="name" id="name" placeholder="Full Name" /> 
                            <label class="fieldlabels">Date of Birth: *</label> <input type="date" name="dob"  /> 
                            <label class="fieldlabels">Gender: *</label> 
                            <select name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                

                            </select>
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Image Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 3</h2>
                                </div>
                            </div> <label class="fieldlabels">Upload Your Child Best Pic:</label>    <input type="hidden" name="size" value="1000000"><input type="file" name="image" id="fileSelect"> <
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
                            <h2 class="purple-text text-center"><strong>Good <br> Almost done!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 col-md-12">
                                    <h5 class="purple-text">Use the submit button below to complete registration</h5>

                                     <input type="submit" name="upload" class="next action-button" value="Submit" />
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
</html>