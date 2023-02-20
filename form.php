<?php
include("auth_session.php");
include('./database/conn_db.php');

$query = "select cand_name as name,cand_email as email,cand_phone as phone FROM cand_reg ";

$result = mysqli_query($con, $query) or die("Query failed : " . mysqli_error($con));  
$profile = mysqli_fetch_array($result); 

?>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <link rel="apple-touch-icon" type="image/png" href="./images/icons/fv-flucent.png">
    <meta name="Flucent Technologies Pvt Ltd" content="bgv">

    <link rel="shortcut icon" type="image/x-icon" href="./images/icons/fv-flucent.png">
    <link rel="mask-icon" type="image/x-icon" href="./images/icons/fv-flucent.png" color="#111">
    <title>Flucent Technologies -BGV</title>

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
                    <form action="submit.php" method='post' enctype='multipart/form-data' id="msform">
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
                                                <input type="text" id="name" name="name" value="<?= $profile['name']?>">
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
                                                <label class="fieldlabels">Contact No *</label>
                                                <input type="text" id="phone" name="phone" value="<?= $profile['phone']?>">
                                            </div>

                                            <div class="col-sm">
                                                <label class="fieldlabels">Nationality *</label>
                                                <input type="text" id="nationality" name="nationality" value="" required>
                                            </div>
                                            <!-- <div class="col-sm">
                                                <label for="addr" class="fieldlabels">Address *</label>
                                                <input type="text" id="addr" name="addr" value="" required>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="container">

                                        <div class="row">

                                            <div>
                                                <label for="dob" class="fieldlabels">Date of Birth*</label><br><br>
                                                <input type="date" id="dob" name="dob" min="23-12-2003" required>
                                            </div>

                                            <div>
                                                <label class="form">Change of Name if applicable</label><br><br>
                                                <label class="fieldlabels">Former Name/Maiden Name</label><br>
                                                <input type="text">

                                                <label class="fieldlabels">Date of Name Change</label>
                                                <input type="text">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <input type="button" name="next" class="next personal_next action-button" value="Next">
                            </fieldset>

                            <!-- field set 2 -->
                            <fieldset>
                                <div class="form-card">

                                    <!-- current address -->
                                    <div class="row">
                                        <div class="col-7 max mx-auto">
                                            <h2 class="fs-title">Current Address</h2>
                                        </div>

                                    </div><br><br>                                   
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="c_door_no" class="fieldlabels">Door/Flat/House No<span class="abcd">*</span></label>
                                                <input type="text" id="c_door_no" name="c_door_no" value="">

                                            </div>
                                            <div class="col-sm">
                                                <label for="c_colony" class="fieldlabels">Colony/Street/Apartment<span class="abcd">*</span></label>
                                                <input type="text" id="c_colony" name="c_colony" value="">

                                            </div>
                                            <div class="col-sm">
                                                <label for="c_landmark" class="fieldlabels">Landmark<span class="abcd">*</span></label>
                                                <input type="text" id="c_landmark" name="c_landmark" value="">
                                            </div>                                          

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                        
                                            <div class="col-sm">
                                                <label for="c_city" class="fieldlabels">City<span class="abcd">*</span></label>
                                                <input type="text" id="c_city" name="c_city" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="c_state" class="fieldlabels">State<span class="abcd">*</span></label>

                                                <br>
                                                <select name="c_state" id="c_state">
                                                    <option value="">Select as</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Aasam">Aasam</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Uttrakhand">Uttrakhand</option>
                                                </select>

                                            </div>

                                            <div class="col-sm">
                                                <label for="c_pincode" class="fieldlabels">Pincode<span class="abcd">*</span></label>
                                                <input type="text" id="c_pincode" name="c_pincode" value="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="landlord_name" class="fieldlabels">Landlord Name(if you are rented)</label>
                                                <input type="text" id="landlord_name" name="landlord_name" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="landlord_phoneno" class="fieldlabels">Landlord PhoneNo</label>
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
                                                <label for="p_door_no" class="fieldlabels">Door/Flat/House No<span class="abcd">*</span></label>
                                                <input type="text" id="p_door_no" name="p_door_no" value="">

                                            </div>
                                            <div class="col-sm">
                                                <label for="p_colony" class="fieldlabels">Colony/Street/Apartment<span class="abcd">*</span></label>
                                                <input type="text" id="p_colony" name="p_colony" value="">

                                            </div>
                                            <div class="col-sm">
                                                <label for="p_landmark" class="fieldlabels">Landmark<span class="abcd">*</span></label>
                                                <input type="text" id="p_landmark" name="p_landmark" value="">

                                            </div>                                          

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                        
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

                                                <input type="text" id="p_pincode" name="p_pincode" value="">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="address_next action-button" value="Next">

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
                                                <label for="aadhar_no" class="fieldlabels">Aadhar No<span class="abcd">*</span></label>
                                                <input type="text" id="aadhar_no" name="aadhar_no" value="">
                                            </div>


                                            <div class="col-sm">
                                                <label for="aadhar_name_as_per_document" class="fieldlabels">Name as per
                                                    Document<span class="abcd">*</span></label>
                                                <input type="text" id="aadhar_name_as_per_document" name="aadhar_name_as_per_document" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label for="aadhar_myfile1" class="fieldlabels">Front Side<span class="abcd">*</span></label>
                                                <input type="file" id="aadhar_myfile1" name="aadhar_myfile1" multiple>
                                            </div>
                                            <div class="col-sm">
                                                <label for="aadhar_myfile2" class="fieldlabels">Back Side<span class="abcd">*</span></label>
                                                <input type="file" id="aadhar_myfile2" name="aadhar_myfile2" multiple>
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
                                                <label for="pan_card_number" class="fieldlabels">Pan Card Number<span class="abcd">*</span></label>
                                                <input type="text" id="pan_card_number" name="pan_card_number" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="pan_name_as_per_document" class="fieldlabels">Name as per
                                                    document<span class="abcd">*</span></label>
                                                <input type="text" id="pan_name_as_per_document" name="pan_name_as_per_document" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="pan_myfile">Document<span class="abcd">*</span></label>
                                                <input type="file" id="pan_myfile" name="pan_myfile" multiple>
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
                                                <label for="dl_number" class="fieldlabels">DL Number
                                                </label>
                                                <input type="text" id="dl_number" name="dl_number" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="dl_name_as_per_document" class="fieldlabels">Name as per
                                                    Document</label>
                                                <input type="text" id="dl_name_as_per_document" name="dl_name_as_per_document" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="dl_place_of_issue" class="fieldlabels">Place of issue
                                                </label>
                                                <input type="text" id="dl_place_of_issue" name="dl_place_of_issue" value="">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label for="dl_date_of_issue" class="fieldlabels">Date of issue
                                                </label>
                                                <input type="text" id="dl_date_of_issue" name="dl_date_of_issue" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="dl_expiry_date" class="fieldlabels">Expiry Date
                                                </label>
                                                <input type="text" id="dl_expiry_date" name="dl_expiry_date" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="dl_myfile">Document</label>
                                                <input type="file" id="dl_myfile" name="dl_myfile" multiple>
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
                                                <label for="passport_no" class="fieldlabels">Passport Number
                                                </label>
                                                <input type="text" id="passport_no" name="passport_no" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="pass_name_as_per_document" class="fieldlabels">Name as per
                                                    Document</label>
                                                <input type="text" id="pass_name_as_per_document" name="pass_name_as_per_document" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="pass_date_of_issue" class="fieldlabels">Date of issue
                                                </label>
                                                <input type="text" id="pass_date_of_issue" name="pass_date_of_issue" value="">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="pass_place_of_issue" class="fieldlabels">Place of issue
                                                </label>
                                                <input type="text" id="pass_place_of_issue" name="pass_place_of_issue" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="pass_expiry_date" class="fieldlabels">Expiry Date
                                                </label>
                                                <input type="text" id="pass_Expiry_date" name="pass_expiry_date" value="">

                                            </div>

                                            <div class="col-sm">
                                                <label for="pass_myfile">Document</label>
                                                <input type="file" id="pass_myfile" name="pass_myfile" multiple>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next account_next action-button" value="Next">

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
                                            <h2 class="fs-title">High School</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label for="school_name" class="fieldlabels">School Name<span class="star">*</span></label>
                                                <input type="text" id="school_name" name="school_name" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="registration_id" class="fieldlabels">Roll No<span class="star">*</span></label>
                                                <input type="text" id="registration_id" name="registration_id" value="">

                                            </div>

                                            <div class="col-sm">
                                                <label for="board_name" class="fieldlabels">Board Name<span class="star">*</span></label>
                                                <input type="text" id="board_name" name="board_name" value="">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label for="school_address" class="fieldlabels">School Address<span class="star">*</span></label>
                                                <input type="text" id="school_address" name="school_address" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="year_of_passing" class="fieldlabels">Year of Passing<span class="star">*</span></label>
                                                <input type="date" id="year_of_passing" name="year_of_passing" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="h_marks" class="fieldlabels">Marks in percentage<span class="star">*</span></label>
                                                <input type="text" id="h_marks" name="h_marks" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm">
                                                <label for="h_myfile" class="fieldlabels">Marksheet<span class="abcd">*</span></label>
                                                <input type="file" id="h_myfile" name="h_myfile" multiple>
                                            </div>


                                        </div>
                                    </div>

                                    <!--Intermediate-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Intermediate</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">

                                                <label for="i_sname" class="fieldlabels">School Name</label>
                                                <input type="text" id="i_sname" name="i_sname" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="i_r_id" class="fieldlabels">Roll No</label>
                                                <input type="text" id="i_r_id" name="i_r_id" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="i_board_name" class="fieldlabels">Board Name</label>
                                                <input type="text" id="i_board_name" name="i_board_name" value="">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="i_school_address" class="fieldlabels">School Address</label>
                                                <input type="text" id="i_school_address" name="i_school_address" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="i_year_of_passing" class="fieldlabels">Year of Passing</label>
                                                <input type="date" id="i_year_of_passing" name="i_year_of_passing" value="">


                                            </div>



                                            <div class="col-sm">
                                                <label for="i_marks" class="fieldlabels">Marks in percentage</label>
                                                <input type="text" id="i_marks" name="i_marks" value="">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="i_myfile" class="fieldlabels">Marksheet</label>
                                                <input type="file" id="i_myfile" name="i_myfile" multiple>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Graduation-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Graduation</h2>
                                        </div>

                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="g_course_name" class="fieldlabels">Course Name</label>
                                                <input type="text" id="g_course_name" name="g_course_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_specilization" class="fieldlabels">Specialization</label>
                                                <input type="text" id="g_specilization" name="g_specilization" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_year_starting" class="fieldlabels">Year of Starting</label>
                                                <input type="date" id="g_year_starting" name="g_year_starting" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="g_year_ending" class="fieldlabels">Year of Ending</label>
                                                <input type="date" id="g_year_ending" name="g_year_ending" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_college_name" class="fieldlabels">College Name</label>
                                                <input type="text" id="g_college_name" name="g_college_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_college_id" class="fieldlabels">Enrollment No/Roll No</label>
                                                <input type="text" id="g_college_id" name="g_college_id" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="g_college_address" class="fieldlabels">College Address</label>
                                                <input type="text" id="g_college_address" name="g_college_address" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_college_uname" class="fieldlabels">University Name</label>
                                                <input type="text" id="g_college_uname" name="g_college_uname" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_student_marks" class="fieldlabels">Marks in percentage</label>
                                                <input type="text" id="g_student_marks" name="g_student_marks" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="g_student_degree" class="fieldlabels">Degree</label>
                                                <input type="file" id="g_student_degree" name="g_student_degree" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="g_student_marksheet" class="fieldlabels">Marksheet</label>
                                                <input type="file" id="g_student_marksheet" name="g_student_marksheet" multiple>
                                            </div>
                                        </div>
                                    </div>

                                    <!--post Graduation-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Post Graduation</h2>
                                        </div>

                                    </div><br><br>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_course_name" class="fieldlabels">Course Name</label>
                                                <input type="text" id="p_course_name" name="p_course_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_specilization" class="fieldlabels">Specialization</label>
                                                <input type="text" id="p_specilization" name="p_specilization" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_year_starting" class="fieldlabels">Year of Starting</label>
                                                <input type="date" id="p_year_starting" name="p_year_starting" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_year_ending" class="fieldlabels">Year of Ending</label>
                                                <input type="date" id="p_year_ending" name="p_year_ending" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_college_name" class="fieldlabels">College Name</label>
                                                <input type="text" id="p_college_name" name="p_college_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_college_id" class="fieldlabels">Enrollment No/Roll No</label>
                                                <input type="text" id="p_college_id" name="p_college_id" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_college_address" class="fieldlabels">College Address</label>
                                                <input type="text" id="p_college_address" name="p_college_address" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_college_uname" class="fieldlabels">University Name</label>
                                                <input type="text" id="p_college_uname" name="p_college_uname" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_student_marks" class="fieldlabels">Marks in percentage</label>
                                                <input type="text" id="p_student_marks" name="p_student_marks" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="p_student_degree" class="fieldlabels">Degree</label>
                                                <input type="file" id="p_student_degree" name="p_student_degree" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="p_student_marksheet" class="fieldlabels">Marksheet</label>
                                                <input type="file" id="p_student_marksheet" name="p_student_marksheet" multiple>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Any Other-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Other Degree/Diploma</h2>
                                        </div>
                                    </div><br><br>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="ao_course_name" class="fieldlabels">Course Name</label>
                                                <input type="text" id="ao_course_name" name="ao_course_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_specilization" class="fieldlabels">Specialization</label>
                                                <input type="text" id="ao_specilization" name="ao_specilization" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_year_starting" class="fieldlabels">Year of Starting</label>
                                                <input type="date" id="ao_year_starting" name="ao_year_starting" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="ao_year_ending" class="fieldlabels">Year of Ending</label>
                                                <input type="date" id="ao_year_ending" name="ao_year_ending" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_college_name" class="fieldlabels">College Name</label>
                                                <input type="text" id="ao_college_name" name="ao_college_name" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_college_id" class="fieldlabels">Enrollment No/Roll No</label>
                                                <input type="text" id="ao_college_id" name="ao_college_id" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="ao_college_address" class="fieldlabels">College Address</label>
                                                <input type="text" id="ao_college_address" name="ao_college_address" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_college_uname" class="fieldlabels">University Name</label>
                                                <input type="text" id="ao_college_uname" name="ao_college_uname" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_student_marks" class="fieldlabels">Marks in percentage</label>
                                                <input type="text" id="ao_student_marks" name="ao_student_marks" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="ao_student_degree" class="fieldlabels">Degree</label>
                                                <input type="file" id="ao_student_degree" name="ao_student_degree" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="ao_student_marksheet" class="fieldlabels">Marksheet</label>
                                                <input type="file" id="ao_student_marksheet" name="ao_student_marksheet" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="next educational_next action-button" value="Next">

                            </fieldset>

                            <!-- field set 5 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> Employement Details</h2>
                                        </div>
                                    </div>

                                    <!--Current Employment 1-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">(Emp-1)Current Employment</h2>
                                        </div>

                                    </div><br><br>
                                    <!-- Permanent Employment -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_name_1" class="fieldlabels">Name of Company</label>
                                                <input type="text" id="curr_com_name_1" name="curr_com_name_1" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_addr_1" class="fieldlabels">Company Address - </label>
                                                <label for="curr_com_addr_1" class="fieldlabels">Door No/Street</label>
                                                <input type="text" id="curr_com_addr_1" name="curr_com_addr_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_city_1" class="fieldlabels">City</label>
                                                <input type="text" id="curr_com_city_1" name="curr_com_city_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_pincode_1" class="fieldlabels">Pincode</label>
                                                <input type="text" id="curr_com_pincode_1" name="curr_com_pincode_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_state_1" class="fieldlabels">State</label>
                                                <input type="text" id="curr_com_state_1" name="curr_com_state_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_emp_start_date_1" class="fieldlabels">Start date of employment</label>
                                                <input type="date" id="curr_com_emp_start_date_1" name="curr_com_emp_start_date_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_emp_end_date_1" class="fieldlabels">End date of employment</label>
                                                <input type="date" id="curr_com_emp_end_date_1" name="curr_com_emp_end_date_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_emp_code_1" class="fieldlabels">Employee code</label>
                                                <input type="text" id="curr_com_emp_code_1" name="curr_com_emp_code_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_desig_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="curr_com_desig_1" name="curr_com_desig_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_dept_1" class="fieldlabels">Department</label>
                                                <input type="text" id="curr_com_dept_1" name="curr_com_dept_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_ctc_1" class="fieldlabels">CTC</label>
                                                <input type="text" id="curr_com_ctc_1" name="curr_com_ctc_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_salary_1" class="fieldlabels">Salary in hand</label>
                                                <input type="text" id="curr_com_salary_1" name="curr_com_salary_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Supervisor</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- Supervisor Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_sup_name_1" class="fieldlabels">Name of Supervisor</label>
                                                <input type="text" id="curr_com_sup_name_1" name="curr_com_sup_name_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_supervisor_designation_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="curr_com_supervisor_designation_1" name="curr_com_supervisor_designation_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_supervisor_email_1" class="fieldlabels">Official email</label>
                                                <input type="email" id="curr_com_supervisor_email_1" name="curr_com_supervisor_email_1" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="curr_com_supervisor_phone_number" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="curr_com_supervisor_phone_number" name="curr_com_supervisor_phone_number" value="">
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Hr details</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- hr Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="curr_com_hr_name_1" class="fieldlabels">Name of Hr</label>
                                                <input type="text" id="curr_com_hr_name_1" name="curr_com_hr_name_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_hr_designation_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="curr_com_hr_designation_1" name="curr_com_hr_designation_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="curr_com_hr_official_email_1" class="fieldlabels">Official email</label>
                                                <input type="email" id="curr_com_hr_official_email_1" name="curr_com_hr_official_email_1" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="curr_com_hr_phone_1" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="curr_com_hr_phone_1" name="curr_com_hr_phone_1" value="">
                                            </div>
                                            
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">(Emp-2)Previous Employment</h2>
                                        </div>

                                    </div><br><br>
                                    <!-- (Emp-2)Previous Employment -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_name_1" class="fieldlabels">Name of Company</label>
                                                <input type="text" id="prev_com_name_1" name="prev_com_name_1" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_addr_1" class="fieldlabels">Company Address - </label>
                                                <label for="prev_com_addr_1" class="fieldlabels">Door No/Street</label>
                                                <input type="text" id="prev_com_addr_1" name="prev_com_addr_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_city_1" class="fieldlabels">City</label>
                                                <input type="text" id="prev_com_city_1" name="prev_com_city_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_pincode_1" class="fieldlabels">Pincode</label>
                                                <input type="text" id="prev_com_pincode_1" name="prev_com_pincode_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_state_1" class="fieldlabels">State</label>
                                                <input type="text" id="prev_com_state_1" name="prev_com_state_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_emp_start_date_1" class="fieldlabels">Start date of employment</label>
                                                <input type="date" id="prev_com_emp_start_date_1" name="prev_com_emp_start_date_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_emp_end_date_1" class="fieldlabels">End date of employment</label>
                                                <input type="date" id="prev_com_emp_end_date_1" name="prev_com_emp_end_date_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_emp_code_1" class="fieldlabels">Employee code</label>
                                                <input type="text" id="prev_com_emp_code_1" name="prev_com_emp_code_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_desig_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_desig_1" name="prev_com_desig_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_dept_1" class="fieldlabels">Department</label>
                                                <input type="text" id="prev_com_dept_1" name="prev_com_dept_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_ctc_1" class="fieldlabels">CTC</label>
                                                <input type="text" id="prev_com_ctc_1" name="prev_com_ctc_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_salary_1" class="fieldlabels">Salary in hand</label>
                                                <input type="text" id="prev_com_salary_1" name="prev_com_salary_1" value="">
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Supervisor</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- Supervisor Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_sup_name_1" class="fieldlabels">Name of Supervisor</label>
                                                <input type="text" id="prev_com_sup_name_1" name="prev_com_sup_name_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_designation_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_supervisor_designation_1" name="prev_com_supervisor_designation_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_email_1" class="fieldlabels">Official email</label>
                                                <input type="email" id="prev_com_supervisor_email_1" name="prev_com_supervisor_email_1" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_phone_number_1" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="prev_com_supervisor_phone_number_1" name="prev_com_supervisor_phone_number_1" value="">
                                            </div>
                                            
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Hr details</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- HR Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_hr_name_1" class="fieldlabels">Name of Hr</label>
                                                <input type="text" id="prev_com_hr_name_1" name="prev_com_hr_name_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_hr_designation_1" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_hr_designation_1" name="prev_com_hr_designation_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_hr_official_email_1" class="fieldlabels">Official email</label>
                                                <input type="email" id="prev_com_hr_official_email_1" name="prev_com_hr_official_email_1" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="prev_com_hr_phone_1" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="prev_com_hr_phone_1" name="prev_com_hr_phone_1" value="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">(Emp-3)Previous Employment</h2>
                                        </div>

                                    </div><br><br>
                                    <!-- (Emp-3)Previous Employment -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_name_2" class="fieldlabels">Name of Company</label>
                                                <input type="text" id="prev_com_name_2" name="prev_com_name_2" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_addr_2" class="fieldlabels">Company Address - </label>
                                                <label for="prev_com_addr_2" class="fieldlabels">Door No/Street</label>
                                                <input type="text" id="prev_com_addr_2" name="prev_com_addr_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_city_2" class="fieldlabels">City</label>
                                                <input type="text" id="prev_com_city_2" name="prev_com_city_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_pincode_2" class="fieldlabels">Pincode</label>
                                                <input type="text" id="prev_com_pincode_2" name="prev_com_pincode_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_state_2" class="fieldlabels">State</label>
                                                <input type="text" id="prev_com_state_2" name="prev_com_state_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_emp_start_date_2" class="fieldlabels">Start date of employment</label>
                                                <input type="date" id="prev_com_emp_start_date_2" name="prev_com_emp_start_date_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_emp_end_date_2" class="fieldlabels">End date of employment</label>
                                                <input type="date" id="prev_com_emp_end_date_2" name="prev_com_emp_end_date_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_emp_code_2" class="fieldlabels">Employee code</label>
                                                <input type="text" id="prev_com_emp_code_2" name="prev_com_emp_code_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_desig_2" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_desig_2" name="prev_com_desig_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_dept_2" class="fieldlabels">Department</label>
                                                <input type="text" id="prev_com_dept_2" name="prev_com_dept_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_ctc_2" class="fieldlabels">CTC</label>
                                                <input type="text" id="prev_com_ctc_2" name="prev_com_ctc_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_salary_2" class="fieldlabels">Salary in hand</label>
                                                <input type="text" id="prev_com_salary_2" name="prev_com_salary_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Supervisor</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- Supervisor Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_sup_name_2" class="fieldlabels">Name of Supervisor</label>
                                                <input type="text" id="prev_com_sup_name_2" name="prev_com_sup_name_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_designation_2" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_supervisor_designation_2" name="prev_com_supervisor_designation_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_email_2" class="fieldlabels">Official email</label>
                                                <input type="email" id="prev_com_supervisor_email_2" name="prev_com_supervisor_email_2" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="prev_com_supervisor_phone_number_2" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="prev_com_supervisor_phone_number_2" name="prev_com_supervisor_phone_number_2" value="">
                                            </div>                                            
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title-1">Hr details</h2>
                                        </div>
                                    </div><br><br>
                                    <!-- HR Details -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="prev_com_hr_name_2" class="fieldlabels">Name of Hr</label>
                                                <input type="text" id="prev_com_hr_name_2" name="prev_com_hr_name_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_hr_designation_2" class="fieldlabels">Designation</label>
                                                <input type="text" id="prev_com_hr_designation_2" name="prev_com_hr_designation_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="prev_com_hr_official_email_2" class="fieldlabels">Official email</label>
                                                <input type="email" id="prev_com_hr_official_email_2" name="prev_com_hr_official_email_2" value="">
                                            </div>                                    
                                            <div class="col-sm">
                                                <label for="prev_com_hr_phone_2" class="fieldlabels">Phone number</label>
                                                <input type="tel" id="prev_com_hr_phone_2" name="prev_com_hr_phone_2" value="">
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="post_next action-button" value="Next">

                            </fieldset>

                            <!-- field set 6 -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title"> References</h2>
                                            <h2 class="fs-title">Personal References</h2>
                                            <h2 class="fs-title">Reference-1</h2>
                                        </div>

                                    </div><br><br>
                                    <!--Personal References 1-->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_name_1" class="fieldlabels">Name of
                                                    Reference<span class="star">*</span></label>
                                                <input type="text" id="cand_personal_ref_name_1" name="cand_personal_ref_name_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_phone_1" class="fieldlabels">Mobile No<span class="star">*</span></label>
                                                <input type="text" id="cand_personal_ref_phone_1" name="cand_personal_ref_phone_1" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_personal_ref_email_1" class="fieldlabels">E-mail ID<span class="star">*</span></label>
                                                <input type="text" id="cand_personal_ref_email_1" name="cand_personal_ref_email_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_adress_1" class="fieldlabels">Address<span class="star">*</span></label>
                                                <input type="text" id="cand_personal_ref_adress_1" name="cand_personal_ref_adress_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_relation_1" class="fieldlabels">Relation<span class="star">*</span></label>
                                                <input type="text" id="cand_personal_ref_relation_1" name="cand_personal_ref_relation_1" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <!--Personal References 2-->
                                    <div class="col-7 mx-auto">
                                        <h2 class="fs-title">Reference-2</h2>
                                    </div><br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_name_2" class="fieldlabels">Name of
                                                    Reference</label>
                                                <input type="text" id="cand_personal_ref_name_2" name="cand_personal_ref_name_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_phone_2" class="fieldlabels">Mobile No</label>
                                                <input type="text" id="cand_personal_ref_phone_2" name="cand_personal_ref_phone_2" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_personal_ref_email_2" class="fieldlabels">E-mail ID</label>
                                                <input type="text" id="cand_personal_ref_email_2" name="cand_personal_ref_email_2" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_personal_ref_address_2" class="fieldlabels">Address</label>
                                                <input type="text" id="cand_personal_ref_address_2" name="cand_personal_ref_address_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_personal_relation_2" class="fieldlabels">Relation</label>
                                                <input type="text" id="cand_personal_relation_2" name="cand_personal_relation_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Professional Reference 1-->
                                    <div class="row">
                                        <div class="col-7 mx-auto">
                                            <h2 class="fs-title">Professional References</h2>
                                            <h2 class="fs-title">Reference-1</h2>
                                        </div>

                                    </div><br><br>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_name_1" class="fieldlabels">Name<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_name_1" name="cand_professional_ref_name_1" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_name_1" class="fieldlabels">Company Name<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_com_name_1" name="cand_professional_ref_com_name_1" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_addr_1" class="fieldlabels">Company Address<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_com_addr_1" name="cand_professional_ref_com_addr_1" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_des_1" class="fieldlabels">Designation<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_des_1" name="cand_professional_ref_des_1" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_email_1" class="fieldlabels">E-mail ID<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_email_1" name="cand_professional_ref_email_1" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_phone_1" class="fieldlabels">Mobile No<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_phone_1" name="cand_professional_ref_phone_1" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Reference-2</h2>
                                        </div>

                                    </div>

                                    <!--Professional Reference 2-->

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_name_2" class="fieldlabels">Name<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_name_2" name="cand_professional_ref_name_2" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_name_2" class="fieldlabels">Company Name<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_com_name_2" name="cand_professional_ref_com_name_2" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_addr_2" class="fieldlabels">Company Address<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_com_addr_2" name="cand_professional_ref_com_addr_2" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_des_2" class="fieldlabels">Designation<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_des_2" name="cand_professional_ref_des_2" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_email_2" class="fieldlabels">E-mail ID<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_email_2" name="cand_professional_ref_email_2" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_phone_2" class="fieldlabels">Mobile No<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_phone_2" name="cand_professional_ref_phone_2" value="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-7 mx-auto">

                                            <h2 class="fs-title">Reference-3</h2>
                                        </div>

                                    </div>

                                    <!--Professional Reference 3-->

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_name_3" class="fieldlabels">Name</label>
                                                <input type="text" id="cand_professional_ref_name_3" name="cand_professional_ref_name_3" value="">


                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_name_3" class="fieldlabels">Company Name</label>
                                                <input type="text" id="cand_professional_ref_com_name_3" name="cand_professional_ref_com_name_3" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_com_addr_3" class="fieldlabels">Company Address</label>
                                                <input type="text" id="cand_professional_ref_com_addr_3" name="cand_professional_ref_com_addr_3" value="">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_des_3" class="fieldlabels">Designation</label>
                                                <input type="text" id="cand_professional_ref_des_3" name="cand_professional_ref_des_3" value="">
                                            </div>

                                            <div class="col-sm">
                                                <label for="cand_professional_ref_email_3" class="fieldlabels">E-mail ID</label>
                                                <input type="text" id="cand_professional_ref_email_3" name="cand_professional_ref_email_3" value="">
                                            </div>
                                            <div class="col-sm">
                                                <label for="cand_professional_ref_phone_3" class="fieldlabels">Mobile No<span class="star">*</span></label>
                                                <input type="text" id="cand_professional_ref_phone_3" name="cand_professional_ref_phone_3" value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="button" name="next" class="references_next action-button" value="Next">

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
                                                <label for="details" class="fieldlabels">Have you ever been charged or
                                                    convicted for
                                                    any criminal offense in india or abroad?<span class="star">*</span></label>
                                                    <select name="details" id="details">
                                                    <option value="" disabled >Select your option</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                                <input type="submit" name="next" class="other_next action-button" value="Next">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="/js/form.js"> </script> -->

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            //click next button on personal tab
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
                // var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
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

            // check button on same as the current and permanent address
            $('#check').change(function() {
                var check = $('#check').val();
                if ($('#check').is(":checked")) {
                    // it is checked
                    var c_address = $("#c_address").val();
                    var c_door_no =$("#c_door_no").val();
                    var c_colony =$("#c_colony").val();
                    var c_landmark= $("#c_landmark").val();                   
                    var c_city = $("#c_city").val();
                    var c_state = $("#c_state").val();
                    var c_pincode = $("#c_pincode").val();
                    var landlord_name = $("#landlord_name").val();
                    var landlord_phoneno = $("#landlord_phoneno").val();

                    $("#p_address").val(c_address);
                    $("#p_door_no").val(c_door_no);
                    $("#p_colony").val(c_colony);
                    $("#p_landmark").val(c_landmark);
                    $("#p_city").val(c_city);
                    $("#p_state").val(c_state);
                    $("#p_pincode").val(c_pincode);
                    
                }

            });

            //click next button on address tab
            $(".address_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var c_address = $("#c_address").val();
                var c_door_no =$("#c_door_no").val();
                var c_colony =$("#c_colony").val();
                var c_landmark= $("#c_landmark").val();                   
                var c_city = $("#city").val();
                var c_state = $("#state").val();
                var c_pincode = $("#pincode").val();
                var landlord_name = $("#landlord_name").val();
                var landlord_phoneno = $("#landlord_phoneno").val();


                var p_address = $("#p_address").val();
                var p_city = $("#p_city").val();
                var p_state = $("#p_state").val();
                var p_pincode = $("#p_pincode").val();
                var p_landlord_name = $("#p_landlord_name").val();
                var p_landlord_phone_no = $("#p_landlord_phone_no").val();





                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expCity = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expState =/^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expPin = /^[1-9]\d{5}$/;
                var expPhone = /^[1-9]\d{9}$/;


                // //Address validation
                // if (c_address == "" || c_address.length < 3) {
                //     alert(" Please enter the valid Address.");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(c_address)) {
                //     alert("Address Name is not right formate.");
                //     result = false;
                //     return false;
                // }

                // //City validation
                // if (city == "" || city.length < 3) {
                //     alert(" Please enter the valid City");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(city)) {
                //     alert("Father Name should be in character");
                //     result = false;
                //     return false;
                // }
                // if (!expCity.test(city)) {
                //     alert("Enter your valid city.");
                //     result = false;
                //     return false;
                // }


                // //State validation
                // if (state == "" || state.length < 3) {
                //     alert(" Please enter the valid State");
                //     result = false;
                //     return false;
                // }
                // if (!expState.test(state)) {
                //     alert("Enter your valid state.");
                //     result = false;
                //     return false;
                // }

                // //Pincode validation
                // if (pincode == "" || pincode.length > 6) {
                //     alert(" Please enter the valid Pincode.");
                //     result = false;
                //     return false;
                // }
                // if (!expPin.test(pincode)) {
                //     alert("Please enter the valid Pincode.");
                //     result = false;
                //     return false;
                // }

                // //Landlord Name validation
                // if (landlord_name == "") {
                //     alert("Please enter your Landlord Name.");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(landlord_name)) {
                //     alert("Landlord Name is not valid.");
                //     result = false;
                //     return false;
                // }

                // //Phone Number validation
                // if (landlord_phoneno == "" || landlord_phoneno.length < 10) {
                //     alert(" Please enter the valid Phone Number.");
                //     result = false;
                //     return false;
                // }
                // if (!expPhone.test(landlord_phoneno)) {
                //     alert("Please enter the valid Phone Number.");
                //     result = false;
                //     return false;
                // }

                // //P_Address validation
                // if (p_address == "" || p_address.length < 3) {
                //     alert(" Please enter the valid Permanent Address.");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(p_address)) {
                //     alert("Permanent Address Name is not right formate.");
                //     result = false;
                //     return false;
                // }

                // //P City validation
                // if (p_city == "" || p_city.length < 3) {
                //     alert(" Please enter the valid Permanent City");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(p_city)) {
                //     alert("Permanent City should be in character");
                //     result = false;
                //     return false;
                // }
                // if (!expCity.test(p_city)) {
                //     alert("Enter your valid Permanent city.");
                //     result = false;
                //     return false;
                // }


                // //p State validation
                // if (p_state == "" || p_state.length < 3) {
                //     alert(" Please enter the valid Permanent State");
                //     result = false;
                //     return false;
                // }
                // if (!expState.test(p_state)) {
                //     alert("Enter your valid Permanent state.");
                //     result = false;
                //     return false;
                // }

                // //Pincode validation
                // if (p_pincode == "" || p_pincode.length > 6) {
                //     alert(" Please enter the valid Pincode.");
                //     result = false;
                //     return false;
                // }
                // if (!expPin.test(p_pincode)) {
                //     alert("Please enter the valid Permanent Pincode.");
                //     result = false;
                //     return false;
                // }

                // //Landlord Name validation
                // if (p_landlord_name == "") {
                //     alert("Please enter your Permanent landlord Name.");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(p_landlord_name)) {
                //     alert("Permanent landlord Name is not valid.");
                //     result = false;
                //     return false;
                // }

                // //Phone number validation
                // if (p_landlord_phone_no == "" || p_landlord_phone_no.length < 10) {
                //     alert(" Please enter the valid Permanent landlord Phone Number.");
                //     result = false;
                //     return false;
                // }
                // if (!expPhone.test(p_landlord_phone_no)) {
                //     alert("Please enter the valid Phone Number.");
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

            //click next button on account tab
            $(".account_next").click(function() {
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
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
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

            //click next button on educational tab
            $(".educational_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var school_name = $("#school_name").val();
                var registration_id = $("#registration_id").val();
                var board_name = $("#board_name").val();
                var school_address = $("#school_address").val();
                var year_of_passing = $("#year_of_passing").val();
                var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;

                //School Name validation
                // if (school_name == "" || school_name.length < 3) {
                //     alert(" Please enter the valid School Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(name)) {
                //     alert("Name should be in characters");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }

                //  Registration no validation
                // if (registration_id == 0 || registration_id.length > 10) {
                //     alert("registration id should be 10 digits");
                //     result = false;
                //     return false;
                // }

                // //Board Name validation

                // if (board_name == "character") {
                //     alert("It should be character");
                //     result = false;
                //     return false;
                // }

                // //School Address validation
                // if (school_address == "character") {
                //     alert("");
                //     result = false;
                //     return false;
                // }

                //year Validation
                // var str = "24/01/1999";
                // var year_of_passing = str.match(/\/(\d{4})/)[1];
                // var currYear = new Date().toString().match(/(\d{4})/)[1];
                // if (year_of_passing >= 1999 && year_of_passing <= currYear) {
                //     alert(year + ' is valid.');
                // } else {
                //     alert(year + ' is an invalid year !');
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

            //click next button on Employee details tab
            $(".post_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var school_name = $("#school_name").val();
                var registration_id = $("#registration_id").val();
                var board_name = $("#board_name").val();
                var school_address = $("#school_address").val();
                var year_of_passing = $("#year_of_passing").val();
                var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;

                //School Name validation
                // if (school_name == "" || school_name.length < 3) {
                //     alert(" Please enter the valid School Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(name)) {
                //     alert("Name should be in characters");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }

                //  Registration no validation
                // if (registration_id == 0 || registration_id.length > 10) {
                //     alert("registration id should be 10 digits");
                //     result = false;
                //     return false;
                // }

                // //Board Name validation

                // if (board_name == "character") {
                //     alert("It should be character");
                //     result = false;
                //     return false;
                // }

                // //School Address validation
                // if (school_address == "character") {
                //     alert("");
                //     result = false;
                //     return false;
                // }

                //year Validation
                // var str = "24/01/1999";
                // var year_of_passing = str.match(/\/(\d{4})/)[1];
                // var currYear = new Date().toString().match(/(\d{4})/)[1];
                // if (year_of_passing >= 1999 && year_of_passing <= currYear) {
                //     alert(year + ' is valid.');
                // } else {
                //     alert(year + ' is an invalid year !');
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

            //click next button on References next details tab
            $(".references_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var school_name = $("#school_name").val();
                var registration_id = $("#registration_id").val();
                var board_name = $("#board_name").val();
                var school_address = $("#school_address").val();
                var year_of_passing = $("#year_of_passing").val();
                var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;

                //School Name validation
                // if (school_name == "" || school_name.length < 3) {
                //     alert(" Please enter the valid School Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(name)) {
                //     alert("Name should be in characters");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }

                //  Registration no validation
                // if (registration_id == 0 || registration_id.length > 10) {
                //     alert("registration id should be 10 digits");
                //     result = false;
                //     return false;
                // }

                // //Board Name validation

                // if (board_name == "character") {
                //     alert("It should be character");
                //     result = false;
                //     return false;
                // }

                // //School Address validation
                // if (school_address == "character") {
                //     alert("");
                //     result = false;
                //     return false;
                // }

                //year Validation
                // var str = "24/01/1999";
                // var year_of_passing = str.match(/\/(\d{4})/)[1];
                // var currYear = new Date().toString().match(/(\d{4})/)[1];
                // if (year_of_passing >= 1999 && year_of_passing <= currYear) {
                //     alert(year + ' is valid.');
                // } else {
                //     alert(year + ' is an invalid year !');
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
            
            //click next button on Other Details next details tab
            $(".other_next").click(function() {
                $(window).scrollTop(0);
                //Result
                var result = true;

                //Variable declaration
                var school_name = $("#school_name").val();
                var registration_id = $("#registration_id").val();
                var board_name = $("#board_name").val();
                var school_address = $("#school_address").val();
                var year_of_passing = $("#year_of_passing").val();
                var addr = $("#addr").val();
                var dob = $("#dob").val();




                //Regular Expression
                var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|~<>;:[\]'’,\-. ]))(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&(){}|<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|<>;:[\]'’,\-\.\s])){2,})?)*)$/;
                var expEmail = /^(?![.-])((?![.-][.-])[a-zA-Z\d.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
                var expPhone = /^[1-9]\d{9}$/;

                //School Name validation
                // if (school_name == "" || school_name.length < 3) {
                //     alert(" Please enter the valid School Name");
                //     result = false;
                //     return false;
                // }
                // if (!isNaN(name)) {
                //     alert("Name should be in characters");
                //     result = false;
                //     return false;
                // }
                // if (!expName.test(name)) {
                //     alert("Name should be in character");
                //     result = false;
                //     return false;
                // }

                //  Registration no validation
                // if (registration_id == 0 || registration_id.length > 10) {
                //     alert("registration id should be 10 digits");
                //     result = false;
                //     return false;
                // }

                // //Board Name validation

                // if (board_name == "character") {
                //     alert("It should be character");
                //     result = false;
                //     return false;
                // }

                // //School Address validation
                // if (school_address == "character") {
                //     alert("");
                //     result = false;
                //     return false;
                // }

                //year Validation
                // var str = "24/01/1999";
                // var year_of_passing = str.match(/\/(\d{4})/)[1];
                // var currYear = new Date().toString().match(/(\d{4})/)[1];
                // if (year_of_passing >= 1999 && year_of_passing <= currYear) {
                //     alert(year + ' is valid.');
                // } else {
                //     alert(year + ' is an invalid year !');
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
                    $( "form" ).first().submit();
                    
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
           
            //Previous Button
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

            //Progress Bar
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar").
                css("width", percent + "%");
            }

            //submit button
            $( "form" ).submit(function( event ) {
                return true;
                event.preventDefault();
            });

        });
    </script>



</body>

</html>