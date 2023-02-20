<?php
include("auth_session.php");
include('./database/conn_db.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link rel="apple-touch-icon" type="image/png" href="./images/icons/fv-flucent.png">
    <meta name="Flucent Technologies Pvt Ltd" content="bgv">

    <link rel="shortcut icon" type="image/x-icon" href="./images/icons/fv-flucent.png">

    <link rel="mask-icon" type="image/x-icon" href="./images/icons/fv-flucent.png" color="#111">


    <title>Background Verification</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="css/form.css">

    <!-- Script -->
    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class=" text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 text-center">
                    <h2 id="heading">Sign Up Your User Account</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">

                            <li class="active" id="personal"><strong>Personal Details</strong></li>
                            <li id="address"><strong>Address</strong></li>
                            <li id="account"><strong>ID Proof</strong></li>
                            <li id="educational"><strong>Educational Details</strong></li>
                            <li id="post"><strong> Employment Details</strong></li>

                            <li id="miscellaneous"><strong>References</strong></li>
                            <li id="payment"><strong>Other Details</strong></li>

                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div> <br>
                        <!-- fieldsets -->
                        <div class="text-center">

                            <!-- field set 1 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7  mx-auto">
                                            <h2 class="fs-title">Personal Details</h2>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="name" class="fieldlabels"> Full Name*</label>
                                                <input type="text" id="name" name="name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="fname" class="fieldlabels">Fathers/Guardians Name*</label>
                                                <input type="text" id="fname" name="fname" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="blood_group" class="fieldlabels">Blood Group*</label>
                                                <input type="text" id="blood_group" name="blood_group" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Contact No*</label>
                                                <input type="text" id="phone" name="phone" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Nationality *</label>
                                                <input type="text" id="nationality" name="nationality" value="" required>
                                            </div>
                                            <div class="col-sm">
                                                <label for="addr" class="fieldlabels">Address *</label>
                                                <input type="text" id="addr" name="addr" value="" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">

                                        <div class="row">

                                            <div>
                                                <label for="dob" class="fieldlabels">Date of Birth*</label><br><br>
                                                <input type="date" id="dob" name="dob" min="23-12-2003" required>
                                            </div>

                                            <div>
                                                <label class="form">Change of Name applicable</label><br><br>
                                                <label class="fieldlabels">Former Name/Maiden Name</label><br>
                                                <input type="text">

                                                <label class="fieldlabels">Date of Name Change</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <input type="button" name="next" class="personal_next action-button" value="Next">

                            </fieldset>

                            <!-- field set 2 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 max mx-auto">
                                            <h2 class="fs-title">Current Address</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="c_address" class="fieldlabels">Current Address<span class="abcd">*</span></label>
                                                <input type="text" id="c_address" name="c_address" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="city" class="fieldlabels">City<span class="abcd">*</span></label>
                                                <input type="text" id="city" name="city" value="">
                                            </div>


                                            <div class="col-sm">
                                                <label for="state" class="fieldlabels">State<span class="abcd">*</span></label>

                                                <br>
                                                <select name="state" id="state">
                                                    <option value="">Select as</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Aasam">Aasam</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Uttrakhand">Uttrakhand</option>
                                                </select>

                                            </div>

                                            <div class="col-sm">

                                                <label for="pincode" class="fieldlabels">Pincode<span class="abcd">*</span></label>


                                                <select name="pincode" id="pincode">
                                                    <option value="">Select as</option>
                                                    <option value="121001">121001</option>
                                                    <option value="121002">121002</option>
                                                    <option value="121003">121003</option>
                                                    <option value="121004">121004</option>
                                                    <option value="121005">121005</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="landlord_name" class="fieldlabels">Landlord Name<span class="abcd">*</span></label>
                                                <input type="text" id="landlord_name" name="landlord_name" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="landlord_phoneno" class="fieldlabels">Landlord PhoneNo<span class="abcd">*</span></label>
                                                <input type="text" id="landlord_phoneno" name="landlord_phoneno" value="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="check" class="fieldlabels">Same as Current Address
                                                    <input type="checkbox" id="check" onchange="autoFilAddress()">
                                                </label>

                                            </div>
                                        </div>
                                    </div>




                                    <!--Permanent Address-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Permanent Address</h2>
                                        </div>

                                    </div><br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_address" class="fieldlabels">Current Address<span class="abcd">*</span></label>
                                                <input type="text" id="p_address" name="p_address" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="p_city" class="fieldlabels">City<span class="abcd">*</span></label>
                                                <input type="text" id="p_city" name="p_city" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="p_state" class="fieldlabels">State<span class="abcd">*</span></label>
                                                <br>
                                                <select name="p_state" id="p_state">
                                                    <option value="">Select as</option>

                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Aasam">Aasam</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Uttrakhand">Uttrakhand</option>
                                                </select>

                                            </div>

                                            <div class="col-sm">
                                                <label for="p_pincode" class="fieldlabels">Pincode<span class="abcd">*</span></label>
                                                <select name="p_pincode" id="p_pincode">

                                                    <option value="">Select as</option>
                                                    <option value="121001">121001</option>
                                                    <option value="121002">121002</option>
                                                    <option value="121003">121003</option>
                                                    <option value="121004">121004</option>
                                                    <option value="121005">121005</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_landlord_name" class="fieldlabels">Landlord Name<span class="abcd">*</span></label>
                                                <input type="text" id="p_landlord_name" name="p_landlord_name" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="p_landlord_phone_no" class="fieldlabels">Landlord PhoneNo<span class="abcd">*</span></label>
                                                <input type="text" id="p_landlord_phone_no" name="p_landlord_phone_no" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next address_next action-button" value="Next">

                            </fieldset>

                            <!-- field set 3 -->
                            <fieldset>
                                <!--Aadhar Card-->
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> Aadhar Card Details</h2>
                                        </div>
                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Aadhar Number*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Name as per Document*</label>
                                                <input type="text" name="Fathers/Guardians Name">
                                            </div>
                                            <div class="col-sm">
                                                <label for="myfile">Document*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <!--Pan Card-->
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">PAN Card Details</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Pan Card Number*</label>
                                                <input type="Name">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name as per Document*</label>
                                                <input type="text" name="Fathers/Guardians Name">
                                            </div>
                                            <div class="col-sm">
                                                <label for="myfile">Document*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <!--Driving Licence-->
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> Driving Licence Details</h2>
                                        </div>

                                    </div><br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">DL Number*</label>
                                                <input type="Name">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name as per Document*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Place of Issue*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">Date of Issue*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels"> Expiry Date*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label for="myfile">Document*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--Passport Details-->

                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Passport Details</h2>
                                        </div>

                                    </div><br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">Passport Number*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Name as per Document*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Date of Issue*</label>
                                                <input type="text">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">Place of Issue*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels"> Expiry Date*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label for="myfile">Document*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>
                                        </div>
                                    </div>



                                </div>








                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                            </fieldset>

                            <!-- field set 4 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Educational Details</h2>
                                        </div>
                                    </div>

                                    <!--High School-->

                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">High School*</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label class="fieldlabels">School Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Registration ID*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">

                                                <label class="fieldlabels">BoardName*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">


                                            <div class="col-sm">
                                                <label class="fieldlabels">School Address*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Year of Passing*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">

                                                <label class="fieldlabels">Marks*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label for="myfile">Document:</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Intermediate-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Intermediate*</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">School Name*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Registration ID*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Board Name*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">School Address*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Year of Passing*</label>
                                                <input type="text">
                                            </div>



                                            <div class="col-sm">
                                                <label class="fieldlabels">Marks*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="myfile">Document:</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>

                                        </div>
                                    </div>



                                    <!--Graduation-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Graduation*</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">College Name*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College ID*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College Address*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Year of Passing*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">University Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Student E-mail ID*</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="myfile">Degree/Marksheet*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>
                                        </div>
                                    </div>






                                    <!--post Graduation-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Post Graduation*</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">College Name</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College ID</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College Address</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Year of Passing*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">University Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Student E-mail ID*</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="myfile">Degree/Marksheet*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>
                                        </div>
                                    </div>


                                    <!--Any Other-->

                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Other Details*</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">College Name*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College ID*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">College Address*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Year of Passing*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">University Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Student E-mail ID*</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="myfile">Degree/Marksheet*</label>
                                                <input type="file" id="myfile" name="myfile" multiple>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                            </fieldset>

                            <!-- field set 5 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> Employement Details</h2>
                                        </div>

                                    </div>

                                    <!--Current Employment-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">(Emp-1)Current Employment</h2>
                                            <h2 class="fs-title">Permanent Employment*</h2>
                                        </div>

                                    </div><br><br>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name Of Company*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Where are you Employed(Registerd Corporate
                                                    Office/Branch
                                                    Office) </label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Address(Where are you
                                                    employed)*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Door No/Street*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">City*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Pin*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Period of Employment*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Employee Code*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Designation*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Remueration*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Department*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Reported to*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Supervisor Designation*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail id*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Reason For leaving*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>





                                    <!--Contractual Employment-->

                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Contractual Employment*</h2>
                                        </div>

                                    </div><br><br>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Name*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Address*</label>

                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Door No*</label>

                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>





                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Street*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">City*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Pin*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Contact Person*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail id*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Designation*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Phone No*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">State you reason for leaving?*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Can a reference be taken now?*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">If No,when can it be taken?*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Previous Employment-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">(Emp-2)Previous Employment</h2>
                                            <h2 class="fs-title">Permanent Employment*</h2>
                                        </div>

                                    </div><br><br>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name Of Company*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Where are you Employed(Registerd
                                                    Corporate
                                                    Office/Branch
                                                    Office) </label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Address(Where are you
                                                    employed)*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label class="fieldlabels">Door No/Street*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Street*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">City*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Period of Employment*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Employee Code*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Designation*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Remueration*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Department*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Reported to*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Supervisor Designation*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail id*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Reason For leaving*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>



                                    <!--Contractual Employment-->

                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Contractual Employment*</h2>
                                        </div>

                                    </div><br><br>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Name*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Address*</label>

                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Door No*</label>

                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Street*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">City*</label>
                                                <input type="text">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Pin*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">State*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company Contact Person*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail id*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Designation*</label>
                                                <input type="text">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Phone No*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                            </fieldset>

                            <!-- field set 6 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> References</h2>
                                            <h2 class="fs-title">Personal References</h2>
                                        </div>

                                    </div><br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name of institution*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Name of Reference*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Designation*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Mobile No*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail ID*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>


                                    <!--Professional Reference-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Professional References</h2>
                                            <h2 class="fs-title">Reference-1*</h2>
                                        </div>

                                    </div><br><br>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company/Designation*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">LandLine*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Mobile No*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail ID*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Reference-2*</h2>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name*</label>
                                                <input type="Name">
                                            </div>


                                            <div class="col-sm">
                                                <label class="fieldlabels">Company/Designation*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">LandLine*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Mobile No*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail ID*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Reference-3*</h2>
                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Name*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Company/Designation*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">LandLine*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Mobile No*</label>
                                                <input type="Name">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">E-mail ID*</label>
                                                <input type="Name">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                            </fieldset>

                            <!-- field set 7 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Other Details</h2>
                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="fieldlabels">Are you currently under service
                                                    agreement/bond with your exiciting employment?Yes/No*</label>
                                                <input type="text">
                                            </div>
                                            <div class="col-sm">
                                                <label class="fieldlabels">Have you ever been chargedor convicted for
                                                    any criminal offense in india or abroad?Yes/No*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                            </fieldset>

                            <!-- field set 8 -->
                            <fieldset>
                                <div class="form-card">

                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="images/success.png" class="fit-image">
                                        </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <!-- <script src="/js/form.js"> </script> -->
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);


            //click on next in personal tab 
            $(".personal_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var name = $("#name").val();
                var fname = $("#fname").val();
                var blood_group = $("#blood_group").val();
                var phone = $("#phone").val();
                var nationality = $("#nationality").val();
                var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;

                // //Name validation
                // if (name == "" || name.length < 3) {
                //     alert(" Please enter the valid Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }

                // //Father Name validation
                // if (fname == "" || fname.length < 3) {
                //     alert(" Please enter the valid Father Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(fname)) {
                //     alert("Father Name should be in character");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(fname)) {
                //     alert("Father Name should be in character");
                //     result = false;
                //     return false;
                // }

                // //Blood Group validation
                // if (blood_group == "") {
                //     alert("Please enter your blood group.");
                //     result = false;
                //     return false;

                // }

                // //Phone validation
                // if (phone == "" || phone.length < 10) {
                //     alert(" Please enter the valid Phone Number that contant 10 digits.");
                //     result = false;
                //     return false;
                // }
                // if (!expPhone.test(phone)) {
                //     alert("Please enter the valid Phone.");
                //     result = false;
                //     return false;
                // }

                // //Nationality validation
                // if (nationality == "" || nationality.length > 40) {
                //     alert(" Please enter the nationality.");
                //     result = false;
                //     return false;
                // }

                // //Address validation
                // if (addr == "") {
                //     alert("Please enter your address.");
                //     result = false;
                //     return false;

                // }

                // // Date of birth validation
                // if (dob == "") {
                //     alert("Please enter your date of birth.");
                //     result = false;
                //     return false;
                // }

                if (result) {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });

                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });

                    setProgressBar(++current);

                } else {
                    return false;
                }
            });

            // check button on same as the current and permanent address
            $('#check').change(function() {
                var check = $('#check').val();
                if ($('#check').is(":checked")) {
                    // it is checked
                    var c_address = $("#c_address").val();
                    var city = $("#city").val();
                    var state = $("#state").val();
                    var pincode = $("#pincode").val();
                    var landlord_name = $("#landlord_name").val();
                    var landlord_phoneno = $("#landlord_phoneno").val();
                    $("#p_address").val(c_address);
                    $("#p_city").val(city);
                    $("#p_state").val(state);
                    $("#p_pincode").val(pincode);
                    $("#p_landlord_name").val(landlord_name);
                    $("#p_landlord_phone_no").val(landlord_phoneno);
                }

            });

            //click on next in address tab
            $(".address_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var c_address = $("#c_address").val();
                var city = $("#city").val();
                var state = $("#state").val();
                var pincode = $("#pincode").val();
                var landlord_name = $("#landlord_name").val();
                var landlord_phoneno = $("#landlord_phoneno").val();

                var p_address = $("#p_address").val();
                var p_city = $("#city").val();
                var p_state = $("#state").val();
                var p_pincode = $("#pincode").val();
                var p_landlord_name = $("#p_landlord_name").val();
                var p_landlord_phone_no = $("#p_landlord_phone_no").val();



                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![_-.])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;
                var expAddress =/^(\d+) ?([A-Za-z](?= ))? (.*?) ([^ ]+?) ?((?<= )APT)? ?((?<= )\d*)?$/;

                //Address validation
                if (c_address == "" || c_address.length < 3) {
                    alert(" Please enter the valid Address.");
                    result = false;
                    return false;
                }
                if (!expAddress.test(c_address)) {
                    alert("Address Name is not right formate.");
                    result = false;
                    return false;
                }

                //City validation
                if (city == "" || city.length < 3) {
                    alert(" Please enter the valid City");
                    result = false;
                    return false;
                }
                if (!isNaN(city)) {
                    alert("Father Name should be in character");
                    result = false;
                    return false;
                }
                // if (!expName.test(fname)) {
                //     alert("Father Name should be in character");
                //     result = false;
                //     return false;
                // }

                // //Blood Group validation
                // if (blood_group == "") {
                //     alert("Please enter your blood group.");
                //     result = false;
                //     return false;

                // }

                // //Phone validation
                // if (phone == "" || phone.length < 10) {
                //     alert(" Please enter the valid Phone Number that contant 10 digits.");
                //     result = false;
                //     return false;
                // }
                // if (!expPhone.test(phone)) {
                //     alert("Please enter the valid Phone.");
                //     result = false;
                //     return false;
                // }

                // //Nationality validation
                // if (nationality == "" || nationality.length > 40 ) {
                //     alert(" Please enter the nationality.");
                //     result = false;
                //     return false;
                // }

                // //Address validation
                // if (addr == "") {
                //     alert("Please enter your address.");
                //     result = false;
                //     return false;

                // }

                // // Date of birth validation
                // if (dob == "") {
                //     alert("Please enter your date of birth.");
                //     result = false;
                //     return false;
                // }


                if (result) {
                    //$(".next").click(function() {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });

                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });

                    setProgressBar(++current);
                    //});

                } else {
                    return false;
                }
            });


            $(".previous").click(function() {
                $(window).scrollTop(0);

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });

                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar").
                css("width", percent + "%");
            }

            $(".submit").click(function() {
                return false;
            });

        });
    </script>





</body>

</html>