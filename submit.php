<?php

include("auth_session.php");
include('./database/conn_db.php');
extract($_REQUEST);


//extract the data from name

$email = $_SESSION['email'];

// Allow certain file formats 
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

// // Field-1 personal details
// $name=$_POST["name"];
// $fname=$_POST["fname"];
// $blood_group=$_POST["blood_group"];
// $phone=$_POST["phone"];
// $nationality=$_POST["nationality"];
// $dob=$_POST["dob"];
// if(!isset($_POST["formerName"])){
//     $formerName=null;
// }
// else{
//     $formerName= $_POST["formerName"];
// }
// if(!isset($_POST["dateName"])){
//     $dateName=null;
// }
// else{
//     $dateName=$_POST["dateName"];
// }

// // Field-2  Current Address
// $c_door_no=$_POST["c_door_no"];
// $c_colony=$_POST["c_colony"];
// $c_landmark=$_POST["c_landmark"];
// $c_city=$_POST["c_city"];
// $c_state=$_POST["c_state"];
// $c_pincode=$_POST["c_pincode"];
// if(!isset($_POST["landlord_name"])){
//     $landlord_name=null;
// }
// else{
//     $landlord_name= $_POST["landlord_name"];
// }
// if(!isset($_POST["landlord_phoneno"])){
//     $landlord_phoneno=null;
// }
// else{
//     $landlord_phoneno=$_POST["landlord_phoneno"];
// }

// // Field-2  Permanent Address
// $p_door_no=$_POST["p_door_no"];
// $p_colony=$_POST["p_colony"];
// $p_landmark=$_POST["p_landmark"];
// $p_city=$_POST["p_city"];
// $p_state=$_POST["p_state"];
// $p_pincode=$_POST["p_pincode"];


// //Field-3

// // Aadhar Details
// $aadhar_no=$_POST["aadhar_no"];
// $aadhar_name_as_per_document=$_POST["aadhar_name_as_per_document"];
// // submited Aadhar first image info 
// $aadhar_myfile1_name = $_FILES['aadhar_myfile1']['name'];
// $aadhar_myfile1_tmp_name = $_FILES['aadhar_myfile1']['tmp_name'];
// $aadhar_myfile1_size = $_FILES['aadhar_myfile1']['size'];
// $aadhar_myfile1_fileType = pathinfo($aadhar_myfile1_name, PATHINFO_EXTENSION);
// $aadhar_myfile1_error = $_FILES['aadhar_myfile1']['error'];
// $aadhar_myfile1_ex_lc = strtolower($aadhar_myfile1_fileType);
// $aadhar_myfile1_contant=file_get_contents($_FILES['aadhar_myfile1']['tmp_name']);
// // submited Aadhar 2nd image info
// $aadhar_myfile2_name = $_FILES['aadhar_myfile2']['name'];
// $aadhar_myfile2_tmp_name = $_FILES['aadhar_myfile2']['tmp_name'];
// $aadhar_myfile2_size = $_FILES['aadhar_myfile2']['size'];
// $aadhar_myfile2_fileType = pathinfo($aadhar_myfile2_name, PATHINFO_EXTENSION);
// $aadhar_myfile2_error = $_FILES['aadhar_myfile2']['error'];
// $aadhar_myfile2_ex_lc = strtolower($aadhar_myfile2_fileType);
// $aadhar_myfile2_contant=file_get_contents($_FILES['aadhar_myfile2']['tmp_name']);

// // Pancard Details
// $pan_card_number=$_POST["pan_card_number"];
// $pan_name_as_per_document=$_POST["pan_name_as_per_document"];
// // submited pan card image info
// $pan_myfile_name = $_FILES['pan_myfile']['name'];
// $pan_myfile_tmp_name = $_FILES['pan_myfile']['tmp_name'];
// $pan_myfile_size = $_FILES['pan_myfile']['size'];
// $pan_myfile_fileType = pathinfo($pan_myfile_name, PATHINFO_EXTENSION);
// $pan_myfile_error = $_FILES['pan_myfile']['error'];
// $pan_myfile_ex_lc = strtolower($pan_myfile_fileType);
// $pan_myfile_contant=file_get_contents($_FILES['pan_myfile']['tmp_name']);

// //Driving Licence Details
// if(!isset($_POST["dl_number"])){
//     $dl_number=null;
// }
// else{
//     $dl_number= $_POST["dl_number"];
// }
// if(!isset($_POST["dl_name_as_per_document"])){
//     $dl_name_as_per_document=null;
// }
// else{
//     $dl_name_as_per_document= $_POST["dl_name_as_per_document"];
// }
// if(!isset($_POST["dl_place_of_issue"])){
//     $dl_place_of_issue=null;
// }
// else{
//     $dl_place_of_issue= $_POST["dl_place_of_issue"];
// }
// if(!isset($_POST["dl_date_of_issue"])){
//     $dl_date_of_issue=null;
// }
// else{
//     $dl_date_of_issue= $_POST["dl_date_of_issue"];
// }
// if(!isset($_POST["dl_expiry_date"])){
//     $dl_expiry_date=null;
// }
// else{
//     $dl_expiry_date= $_POST["dl_expiry_date"];
// }
// // Driving Licence photo info
// if(!isset($_FILES['dl_myfile']['name'])){
//     $dl_myfile_name=null;
//     $dl_myfile_tmp_name =null;
//     $dl_myfile_size =null;
//     $dl_myfile_fileType =null;
//     $dl_myfile_error =null;
//     $dl_myfile_ex_lc =null;
//     $dl_myfile_contant=null;
// }
// else{
//     $dl_myfile_name = $_FILES['dl_myfile']['name'];
//     $dl_myfile_tmp_name = $_FILES['dl_myfile']['tmp_name'];
//     $dl_myfile_size = $_FILES['dl_myfile']['size'];
//     $dl_myfile_fileType = pathinfo($dl_myfile_name, PATHINFO_EXTENSION);
//     $dl_myfile_error = $_FILES['dl_myfile']['error'];
//     $dl_myfile_ex_lc = strtolower($dl_myfile_fileType);  
// }

// // Passport Details
// if(!isset($_POST["passport_no"])){
//     $passport_no=null;
// }
// else{
//     $passport_no= $_POST["passport_no"];
// }
// if(!isset($_POST["pass_name_as_per_document"])){
//     $pass_name_as_per_document=null;
// }
// else{
//     $pass_name_as_per_document= $_POST["pass_name_as_per_document"];
// }
// if(!isset($_POST["pass_date_of_issue"])){
//     $pass_date_of_issue=null;
// }
// else{
//     $pass_date_of_issue= $_POST["pass_date_of_issue"];
// }
// if(!isset($_POST["pass_place_of_issue"])){
//     $pass_place_of_issue=null;
// }
// else{
//     $pass_place_of_issue= $_POST["pass_place_of_issue"];
// }
// if(!isset($_POST["pass_Expiry_date"])){
//     $pass_Expiry_date=null;
// }
// else{
//     $pass_Expiry_date= $_POST["pass_Expiry_date"];
// }
// //Passport Photoes info
// if(!isset($_FILES['pass_myfile']['name'])){
//     $dl_myfile_name=null;
//     $pass_myfile_tmp_name =null;
//     $pass_myfile_size = null;
//     $pass_myfile_fileType = null;
//     $pass_myfile_error = null;
//     $pass_myfile_ex_lc = null;
//     $pass_myfile_contant=null;
// }
// else{
//     $pass_myfile_name = $_FILES['pass_myfile']['name'];
//     $pass_myfile_tmp_name = $_FILES['pass_myfile']['tmp_name'];
//     $pass_myfile_size = $_FILES['pass_myfile']['size'];
//     $pass_myfile_fileType = pathinfo($pass_myfile_name, PATHINFO_EXTENSION);
//     $pass_myfile_error = $_FILES['pass_myfile']['error'];
//     $pass_myfile_ex_lc = strtolower($pass_myfile_fileType);
// }

// // Field-4
// // high school
// $school_name=$_POST["school_name"];
// $registration_id=$_POST["registration_id"];
// $board_name=$_POST["board_name"];
// $school_address=$_POST["school_address"];
// $year_of_passing=$_POST["year_of_passing"];
// $h_marks=$_POST["h_marks"];
// // submited  image info
// $h_myfile_name = $_FILES['h_myfile']['name'];
// $h_myfile_tmp_name = $_FILES['h_myfile']['tmp_name'];
// $h_myfile_size = $_FILES['h_myfile']['size'];
// $h_myfile_fileType = pathinfo($h_myfile_name, PATHINFO_EXTENSION);
// $h_myfile_error = $_FILES['h_myfile']['error'];
// $h_myfile_ex_lc = strtolower($h_myfile_fileType);


// Intermediate
// if(!isset($_POST["i_sname"])){
//     $i_sname=null;
// }
// else{
//     $i_sname= $_POST["i_sname"];
// }
// if(!isset($_POST["i_r_id"])){
//     $i_r_id=null;
// }
// else{
//     $i_r_id= $_POST["i_r_id"];
// }
// if(!isset($_POST["i_board_name"])){
//     $i_board_name=null;
// }
// else{
//     $i_board_name= $_POST["i_board_name"];
// }
// if(!isset($_POST["i_school_address"])){
//     $i_school_address=null;
// }
// else{
//     $i_school_address= $_POST["i_school_address"];
// }
// if(!isset($_POST["i_year_of_passing"])){
//     $i_year_of_passing=null;
// }
// else{
//     $i_year_of_passing= $_POST["i_year_of_passing"];
// }
// if(!isset($_POST["i_marks"])){
//     $i_marks=null;
// }
// else{
//     $i_marks= $_POST["i_marks"];
// }
// // Submited Intermediate info
// if(!isset($_FILES['i_myfile']['name'])){
//     $i_myfile_name =null;
//     $i_myfile_tmp_name = null;
//     $i_myfile_size = null;
//     $i_myfile_fileType = null;
//     $i_myfile_error = null;
//     $i_myfile_ex_lc = null;
// }
// else{
//     $i_myfile_name = $_FILES['i_myfile']['name'];
//     $i_myfile_tmp_name = $_FILES['i_myfile']['tmp_name'];
//     $i_myfile_size = $_FILES['i_myfile']['size'];
//     $i_myfile_fileType = pathinfo($i_myfile_name, PATHINFO_EXTENSION);
//     $i_myfile_error = $_FILES['i_myfile']['error'];
//     $i_myfile_ex_lc = strtolower($i_myfile_fileType);
// }

// // Graduation Information
// if(!isset($_POST["g_course_name"])){
//     $g_course_name=null;
// }
// else{
//     $g_course_name= $_POST["g_course_name"];
// }
// if(!isset($_POST["g_specilization"])){
//     $g_specilization=null;
// }
// else{
//     $g_specilization= $_POST["g_specilization"];
// }
// if(!isset($_POST["g_year_starting"])){
//     $g_year_starting=null;
// }
// else{
//     $g_year_starting= $_POST["g_year_starting"];
// }
// if(!isset($_POST["g_year_ending"])){
//     $g_year_ending=null;
// }
// else{
//     $g_year_ending= $_POST["g_year_ending"];
// }
// if(!isset($_POST["g_college_name"])){
//     $g_college_name=null;
// }
// else{
//     $g_college_name= $_POST["g_college_name"];
// }
// if(!isset($_POST["g_college_id"])){
//     $g_college_id=null;
// }
// else{
//     $g_college_id= $_POST["g_college_id"];
// }
// if(!isset($_POST["g_college_address"])){
//     $g_college_address=null;
// }
// else{
//     $g_college_address= $_POST["g_college_address"];
// }
// if(!isset($_POST["g_college_uname"])){
//     $g_college_uname=null;
// }
// else{
//     $g_college_uname= $_POST["g_college_uname"];
// }
// if(!isset($_POST["g_student_marks"])){
//     $g_student_marks=null;
// }
// else{
//     $g_student_marks= $_POST["g_student_marks"];
// }
// if(!isset($_FILES['g_student_degree']['name'])){
//     $g_student_degree_name = null;
//     $g_student_degree_tmp_name = null;
//     $g_student_degree_size = null;
//     $g_student_degree_fileType = null;
//     $g_student_degree_error = null;
//     $g_student_degree_ex_lc = null;
// }
// else{
//     $g_student_degree_name = $_FILES['g_student_degree']['name'];
//     $g_student_degree_tmp_name = $_FILES['g_student_degree']['tmp_name'];
//     $g_student_degree_size = $_FILES['g_student_degree']['size'];
//     $g_student_degree_fileType = pathinfo($g_student_degree_name, PATHINFO_EXTENSION);
//     $g_student_degree_error = $_FILES['g_student_degree']['error'];
//     $g_student_degree_ex_lc = strtolower($g_student_degree_fileType);
// }
// if(!isset($_FILES['g_student_marksheet']['name'])){
//     $g_student_marksheet_name = null;
//     $g_student_marksheet_tmp_name = null;
//     $g_student_marksheet_size = null;
//     $g_student_marksheet_fileType = null;
//     $g_student_marksheet_error = null;
//     $g_student_marksheet_ex_lc = null;
// }
// else{
//     $g_student_marksheet_name = $_FILES['g_student_marksheet']['name'];
//     $g_student_marksheet_tmp_name = $_FILES['g_student_marksheet']['tmp_name'];
//     $g_student_marksheet_size = $_FILES['g_student_marksheet']['size'];
//     $g_student_marksheet_fileType = pathinfo($g_student_marksheet_name, PATHINFO_EXTENSION);
//     $g_student_marksheet_error = $_FILES['g_student_marksheet']['error'];
//     $g_student_marksheet_ex_lc = strtolower($g_student_marksheet_fileType);
// }

// // Post Graduation Information
// if(!isset($_POST["p_course_name"])){
//     $p_course_name=null;
// }
// else{
//     $p_course_name= $_POST["p_course_name"];
// }
// if(!isset($_POST["p_specilization"])){
//     $p_specilization=null;
// }
// else{
//     $p_specilization= $_POST["p_specilization"];
// }
// if(!isset($_POST["p_year_starting"])){
//     $p_year_starting=null;
// }
// else{
//     $p_year_starting= $_POST["p_year_starting"];
// }
// if(!isset($_POST["p_year_ending"])){
//     $p_year_ending=null;
// }
// else{
//     $p_year_ending= $_POST["p_year_ending"];
// }
// if(!isset($_POST["p_college_name"])){
//     $p_college_name=null;
// }
// else{
//     $p_college_name= $_POST["p_college_name"];
// }
// if(!isset($_POST["p_college_id"])){
//     $p_college_id=null;
// }
// else{
//     $p_college_id= $_POST["p_college_id"];
// }
// if(!isset($_POST["p_college_address"])){
//     $p_college_address=null;
// }
// else{
//     $p_college_address= $_POST["p_college_address"];
// }
// if(!isset($_POST["p_college_uname"])){
//     $p_college_uname=null;
// }
// else{
//     $p_college_uname= $_POST["p_student_marks"];
// }
// if(!isset($_POST["p_student_marks"])){
//     $p_student_marks=null;
// }
// else{
//     $p_student_marks= $_POST["p_student_marks"];
// }
// if(!isset($_FILES['p_student_degree']['name'])){
//     $p_student_degree_name = null;
//     $p_student_degree_tmp_name = null;
//     $p_student_degree_size = null;
//     $p_student_degree_fileType =null;
//     $p_student_degree_error = null;
//     $p_student_degree_ex_lc = null;
// }
// else{
//     $p_student_degree_name = $_FILES['p_student_degree']['name'];
//     $p_student_degree_tmp_name = $_FILES['p_student_degree']['tmp_name'];
//     $p_student_degree_size = $_FILES['p_student_degree']['size'];
//     $p_student_degree_fileType = pathinfo($p_student_degree_name, PATHINFO_EXTENSION);
//     $p_student_degree_error = $_FILES['p_student_degree']['error'];
//     $p_student_degree_ex_lc = strtolower($p_student_degree_fileType);
// }
// if(!isset($_FILES['p_student_marksheet']['name'])){
//     $p_student_marksheet_name = null;
//     $p_student_marksheet_tmp_name = null;
//     $p_student_marksheet_size = null;
//     $p_student_marksheet_fileType = null;
//     $p_student_marksheet_error = null;
//     $p_student_marksheet_ex_lc = null;
// }
// else{
//     $p_student_marksheet_name = $_FILES['p_student_marksheet']['name'];
//     $p_student_marksheet_tmp_name = $_FILES['p_student_marksheet']['tmp_name'];
//     $p_student_marksheet_size = $_FILES['p_student_marksheet']['size'];
//     $p_student_marksheet_fileType = pathinfo($p_student_marksheet_name, PATHINFO_EXTENSION);
//     $p_student_marksheet_error = $_FILES['p_student_marksheet']['error'];
//     $p_student_marksheet_ex_lc = strtolower($p_student_marksheet_fileType);
// }

// // Other /Deploma
// if(!isset($_POST["ao_course_name"])){
//     $ao_course_name=null;
// }
// else{
//     $ao_course_name= $_POST["ao_course_name"];
// }
// if(!isset($_POST["ao_specilization"])){
//     $ao_specilization=null;
// }
// else{
//     $ao_specilization= $_POST["ao_specilization"];
// }
// if(!isset($_POST["ao_year_starting"])){
//     $ao_year_starting=null;
// }
// else{
//     $ao_year_starting= $_POST["ao_year_starting"];
// }
// if(!isset($_POST["ao_year_ending"])){
//     $ao_year_ending=null;
// }
// else{
//     $ao_year_ending= $_POST["ao_year_ending"];
// }
// if(!isset($_POST["ao_college_name"])){
//     $ao_college_name=null;
// }
// else{
//     $ao_college_name= $_POST["ao_college_name"];
// }
// if(!isset($_POST["ao_college_id"])){
//     $ao_college_id=null;
// }
// else{
//     $ao_college_id= $_POST["ao_college_id"];
// }
// if(!isset($_POST["ao_college_address"])){
//     $ao_college_address=null;
// }
// else{
//     $ao_college_address= $_POST["ao_college_address"];
// }
// if(!isset($_POST["ao_college_uname"])){
//     $ao_college_uname=null;
// }
// else{
//     $ao_college_uname= $_POST["ao_college_uname"];
// }
// if(!isset($_POST["ao_student_marks"])){
//     $ao_student_marks=null;
// }
// else{
//     $ao_student_marks= $_POST["ao_student_marks"];
// }
// if (!isset($_FILES['ao_student_degree']['name'])) {
//     $ao_student_degree_name = null;
//     $ao_student_degree_tmp_name = null;
//     $ao_student_degree_size = null;
//     $ao_student_degree_fileType = null;
//     $ao_student_degree_error = null;
//     $ao_student_degree_ex_lc = null;
// } else {
//     $ao_student_degree_name = $_FILES['ao_student_degree']['name'];
//     $ao_student_degree_tmp_name = $_FILES['ao_student_degree']['tmp_name'];
//     $ao_student_degree_size = $_FILES['ao_student_degree']['size'];
//     $ao_student_degree_fileType = pathinfo($ao_student_degree_name, PATHINFO_EXTENSION);
//     $ao_student_degree_error = $_FILES['ao_student_degree']['error'];
//     $ao_student_degree_ex_lc = strtolower($ao_student_degree_fileType);
// }
// if (!isset($_FILES['ao_student_marksheet']['name'])) {
//     $ao_student_degree_name = null;
//     $ao_student_degree_tmp_name = null;
//     $ao_student_degree_size = null;
//     $ao_student_degree_fileType = null;
//     $ao_student_degree_error = null;
//     $ao_student_degree_ex_lc = null;
// } else {
//     $ao_student_marksheet_name = $_FILES['ao_student_marksheet']['name'];
//     $ao_student_marksheet_tmp_name = $_FILES['ao_student_marksheet']['tmp_name'];
//     $ao_student_marksheet_size = $_FILES['ao_student_marksheet']['size'];
//     $ao_student_marksheet_fileType = pathinfo($ao_student_marksheet_name, PATHINFO_EXTENSION);
//     $ao_student_marksheet_error = $_FILES['ao_student_marksheet']['error'];
//     $ao_student_marksheet_ex_lc = strtolower($ao_student_marksheet_fileType);
// }

// //Field Set-5
// //Employee 1 
// $curr_com_name_1=$_POST["curr_com_name_1"];
// $curr_com_addr_1=$_POST["curr_com_addr_1"];
// $curr_com_city_1=$_POST["curr_com_city_1"];
// $curr_com_pincode_1=$_POST["curr_com_pincode_1"];
// $curr_com_state_1=$_POST["curr_com_state_1"];
// $curr_com_emp_start_date_1=$_POST["curr_com_emp_start_date_1"];
// $curr_com_emp_end_date_1=$_POST["curr_com_emp_end_date_1"];
// $curr_com_emp_code_1=$_POST["curr_com_emp_code_1"];
// $curr_com_desig_1=$_POST["curr_com_desig_1"];
// $curr_com_dept_1=$_POST["curr_com_dept_1"];
// $curr_com_ctc_1=$_POST["curr_com_ctc_1"];
// $curr_com_salary_1=$_POST["curr_com_salary_1"];
// $curr_com_sup_name_1=$_POST["curr_com_sup_name_1"];
// $curr_com_supervisor_designation_1=$_POST["curr_com_supervisor_designation_1"];
// $curr_com_supervisor_email_1=$_POST["curr_com_supervisor_email_1"];
// $curr_com_supervisor_phone_number=$_POST["curr_com_supervisor_phone_number"];
// $curr_com_hr_name_1=$_POST["curr_com_hr_name_1"];
// $curr_com_hr_designation_1=$_POST["curr_com_hr_designation_1"];
// $curr_com_hr_official_email_1=$_POST["curr_com_hr_official_email_1"];
// $curr_com_hr_phone_1=$_POST["curr_com_hr_phone_1"];

//Employee 2 
// $prev_com_name_1=$_POST["prev_com_name_1"];
// $prev_com_addr_1=$_POST["prev_com_addr_1"];
// $prev_com_city_1=$_POST["prev_com_city_1"];
// $prev_com_pincode_1=$_POST["prev_com_pincode_1"];
// $prev_com_state_1=$_POST["prev_com_state_1"];
// $prev_com_emp_start_date_1=$_POST["prev_com_emp_start_date_1"];
// $prev_com_emp_end_date_1=$_POST["prev_com_emp_end_date_1"];
// $prev_com_emp_code_1=$_POST["prev_com_emp_code_1"];
// $prev_com_desig_1=$_POST["prev_com_desig_1"];
// $prev_com_dept_1=$_POST["prev_com_dept_1"];
// $prev_com_ctc_1=$_POST["prev_com_ctc_1"];
// $prev_com_salary_1=$_POST["prev_com_salary_1"];
// $prev_com_sup_name_1=$_POST["prev_com_sup_name_1"];
// $prev_com_supervisor_designation_1=$_POST["prev_com_supervisor_designation_1"];
// $prev_com_supervisor_email_1=$_POST["prev_com_supervisor_email_1"];
// $prev_com_supervisor_phone_number_1=$_POST["prev_com_supervisor_phone_number_1"];
// $prev_com_hr_name_1=$_POST["prev_com_hr_name_1"];
// $prev_com_hr_designation_1=$_POST["prev_com_hr_designation_1"];
// $prev_com_hr_official_email_1=$_POST["prev_com_hr_official_email_1"];
// $prev_com_hr_phone_1=$_POST["prev_com_hr_phone_1"];

// //Employee 3 
// $prev_com_name_2=$_POST["prev_com_name_2"];
// $prev_com_addr_2=$_POST["prev_com_addr_2"];
// $prev_com_city_2=$_POST["prev_com_city_2"];
// $prev_com_pincode_2=$_POST["prev_com_pincode_2"];
// $prev_com_state_2=$_POST["prev_com_state_2"];
// $prev_com_emp_start_date_2=$_POST["prev_com_emp_start_date_2"];
// $prev_com_emp_end_date_2=$_POST["prev_com_emp_end_date_2"];
// $prev_com_emp_code_2=$_POST["prev_com_emp_code_2"];
// $prev_com_desig_2=$_POST["prev_com_desig_2"];
// $prev_com_dept_2=$_POST["prev_com_dept_2"];
// $prev_com_ctc_2=$_POST["prev_com_ctc_2"];
// $prev_com_salary_2=$_POST["prev_com_salary_2"];
// $prev_com_sup_name_2=$_POST["prev_com_sup_name_2"];
// $prev_com_supervisor_designation_2=$_POST["prev_com_supervisor_designation_2"];
// $prev_com_supervisor_email_2=$_POST["prev_com_supervisor_email_2"];
// $prev_com_supervisor_phone_number_2=$_POST["prev_com_supervisor_phone_number_2"];
// $prev_com_hr_name_2=$_POST["prev_com_hr_name_2"];
// $prev_com_hr_designation_2=$_POST["prev_com_hr_designation_2"];
// $prev_com_hr_official_email_2=$_POST["prev_com_hr_official_email_2"];
// $prev_com_hr_phone_2=$_POST["prev_com_hr_phone_2"];

// // Field Set-6
// //Personal Reference 1
// $cand_personal_ref_name_1=$_POST["cand_personal_ref_name_1"];
// $cand_personal_ref_phone_1=$_POST["cand_personal_ref_phone_1"];
// $cand_personal_ref_email_1=$_POST["cand_personal_ref_email_1"];
// $cand_personal_ref_adress_1=$_POST["cand_personal_ref_adress_1"];
// $cand_personal_ref_relation_1=$_POST["cand_personal_ref_relation_1"];

// //Personal Reference 2
// if(!isset($_POST["cand_personal_ref_name_2"])){
//     $cand_personal_ref_name_2=null;
// }
// else{
//     $cand_personal_ref_name_2= $_POST["cand_personal_ref_name_2"];
// }
// if(!isset($_POST["cand_personal_ref_phone_2"])){
//     $cand_personal_ref_phone_2=null;
// }
// else{
//     $cand_personal_ref_phone_2= $_POST["cand_personal_ref_phone_2"];
// }
// if(!isset($_POST["cand_personal_ref_email_2"])){
//     $cand_personal_ref_email_2=null;
// }
// else{
//     $cand_personal_ref_email_2= $_POST["cand_personal_ref_email_2"];
// }
// if(!isset($_POST["cand_personal_ref_address_2"])){
//     $cand_personal_ref_address_2=null;
// }
// else{
//     $cand_personal_ref_address_2= $_POST["cand_personal_ref_address_2"];
// }
// if(!isset($_POST["cand_personal_relation_2"])){
//     $cand_personal_relation_2=null;
// }
// else{
//     $cand_personal_relation_2= $_POST["cand_personal_relation_2"];
// }

// //Professional References 1
// $cand_professional_ref_name_1=$_POST["cand_professional_ref_name_1"];
// $cand_professional_ref_com_name_1=$_POST["cand_professional_ref_com_name_1"];
// $cand_professional_ref_com_addr_1=$_POST["cand_professional_ref_com_addr_1"];
// $cand_professional_ref_des_1=$_POST["cand_professional_ref_des_1"];
// $cand_professional_ref_email_1=$_POST["cand_professional_ref_email_1"];
// $cand_professional_ref_phone_1=$_POST["cand_professional_ref_phone_1"];

// //Professional References 2
// $cand_professional_ref_name_2=$_POST["cand_professional_ref_name_2"];
// $cand_professional_ref_com_name_2=$_POST["cand_professional_ref_com_name_2"];
// $cand_professional_ref_com_addr_2=$_POST["cand_professional_ref_com_addr_2"];
// $cand_professional_ref_des_2=$_POST["cand_professional_ref_des_2"];
// $cand_professional_ref_email_2=$_POST["cand_professional_ref_email_2"];
// $cand_professional_ref_phone_2=$_POST["cand_professional_ref_phone_2"];

// //Professional References 3
// if(!isset($_POST["cand_professional_ref_name_3"])){
//     $cand_professional_ref_name_3=null;
// }
// else{
//     $cand_professional_ref_name_3= $_POST["cand_professional_ref_name_3"];
// }
// if(!isset($_POST["cand_professional_ref_com_name_3"])){
//     $cand_professional_ref_com_name_3=null;
// }
// else{
//     $cand_professional_ref_com_name_3= $_POST["cand_professional_ref_com_name_3"];
// }
// if(!isset($_POST["cand_professional_ref_com_addr_3"])){
//     $cand_professional_ref_com_addr_3=null;
// }
// else{
//     $cand_professional_ref_com_addr_3= $_POST["cand_professional_ref_com_addr_3"];
// }
// if(!isset($_POST["cand_professional_ref_des_3"])){
//     $cand_professional_ref_des_3=null;
// }
// else{
//     $cand_professional_ref_des_3= $_POST["cand_professional_ref_des_3"];
// }
// if(!isset($_POST["cand_professional_ref_email_3"])){
//     $cand_professional_ref_email_3=null;
// }
// else{
//     $cand_professional_ref_email_3= $_POST["cand_professional_ref_email_3"];
// }
// if(!isset($_POST["cand_professional_ref_phone_3"])){
//     $cand_professional_ref_phone_3=null;
// }
// else{
//     $cand_professional_ref_phone_3= $_POST["cand_professional_ref_phone_3"];
// }

// // Field Set-7
// $details=$_POST["details"];

// //Field Set-6
// echo "129.".$Per_ref_institution."<br>";
// echo "130.".$per_ref_reference."<br>";
// echo "131.".$per_ref_designation."<br>";
// echo "132.".$pro_ref_mobileNo."<br>";
// echo "133.".$pro_ref_email."<br>";
// echo "134.".$pro_ref_name1."<br>";
// echo "135.".$pro_ref_comp_design1."<br>";
// echo "136.".$landline1."<br>";
// echo "137.".$pro_ref_moblieNo1."<br>";
// echo "138.".$pro_ref_email1."<br>";
// echo "139.".$pro_ref_name2."<br>";
// echo "140.".$pro_ref_landLine2."<br>";
// echo "141.".$pro_ref_mobileNo2."<br>";
// echo "142.".$pro_ref_email2."<br>";
// echo "143.".$pro_ref_name3."<br>";
// echo "144.".$pro_ref_com_des3."<br>";
// echo "145.".$pro_ref_landLine."<br>";
// echo "146.".$pro_ref_mobileNo3."<br>";
// echo "147.".$pro_ref_email3."<br>";

// // Field Set-7
// echo "148.".$other."<br>";
// echo "149.".$details."<br>";

// sql query

// //personal table 
// $query_personal = "insert into `cand_personal`
//         (cand_name, cand_father_name, cand_blood_group, cand_phone_name, cand_natioality, cand_dob,cand_former_name,cand_name_change_date,cand_personal_email) 
//          values ('$name', '$fname', '$blood_group', $phone, '$nationality', '$dob', '$formerName', " . ($dateName==NULL ? "NULL" : "'$dateName'") . ",'$email')";

// $result_personal = mysqli_query($con, $query_personal) or die("Query failed :" . mysqli_error($con));
// if($result_personal){
//     echo 'Personal details are submited';
// }

// // Current Address Table
// $query_curr_address = "insert into `cand_curr_address`
//         (cand_per_house_no, cand_curr_street_name, cand_curr_landmark, cand_curr_city, cand_curr_state, cand_curr_pincode,cand_landlord_name,cand_landlord_phone,cand_address_email) 
//          values ('$c_door_no', '$c_colony', '$c_landmark', '$c_city', '$c_state', '$c_pincode'," . ($landlord_name==NULL ? "NULL" : "'$landlord_name'") . "," . ($landlord_phoneno==NULL ? "NULL" : "'$landlord_phoneno'") . ",'$email')";

// $result_curr_address = mysqli_query($con, $query_curr_address) or die("Query failed :" . mysqli_error($con));
// if($result_curr_address){
//     echo 'Current Address details are submited.';
// }

// // Permanent Address Table
// $query_per_address = "insert into `cand_per_address`
//         (cand_per_house_no, cand_per_street, cand_per_landmark, cand_per_city, cand_per_state, cand_per_pincode,cand_per_email) 
//          values ('$p_door_no', '$p_colony', '$p_landmark', '$p_city','$p_state','$p_pincode','$email')";

// $result_per_address = mysqli_query($con, $query_per_address) or die("Query failed :" . mysqli_error($con));
// if($result_per_address){
//     echo 'Permanent Address details are submited.';
// }

// // Id Proof table
// if (!empty($aadhar_myfile1_name) && !empty($aadhar_myfile2_name) && !empty($pan_myfile_name) && in_array($aadhar_myfile1_ex_lc, $allowTypes)
//      && in_array($aadhar_myfile2_ex_lc, $allowTypes)  ) {
//     if ($aadhar_myfile1_size <= 1000000 && $aadhar_myfile2_size <= 1000000 && $pan_myfile_size<=1000000  ) {

//         $new_aadhar_myfile1_name = uniqid("IMG-Aadhar1-", true) . '.' . $aadhar_myfile1_ex_lc;
//         $new_aadhar_myfile2_name = uniqid("IMG-Aadhar2-", true) . '.' . $aadhar_myfile2_ex_lc;
//         $new_pan_myfile_name = uniqid("IMG-Pan-", true) . '.' . $pan_myfile_ex_lc;
//         if($dl_myfile_ex_lc != null){
//             $new_dl_myfile_name = uniqid("IMG-DL-", true) . '.' . $dl_myfile_ex_lc;
//         }
//         else{
//             $new_dl_myfile_name=null; 
//         }
//         if($pass_myfile_ex_lc != null){
//             $new_pass_myfile_name = uniqid("IMG-Pass-", true) . '.' . $pass_myfile_ex_lc;
//         }
//         else{
//             $new_pass_myfile_name=null;
//         }

//         $aadhar_myfile1_upload_path = 'uploads/'. $new_aadhar_myfile1_name;
//         $aadhar_myfile2_upload_path = 'uploads/'. $new_aadhar_myfile2_name;
//         $pan_myfile_upload_path = 'uploads/'. $new_pan_myfile_name;
//         if($new_dl_myfile_name !=null){
//             $dl_myfile_upload_path ='uploads/'. $new_dl_myfile_name;
//         }
//         else{ 
//             $dl_myfile_upload_path = null; 
//         }
//         if($new_pass_myfile_name != null){
//             $pass_myfile_upload_path ='uploads/'. $new_pass_myfile_name;
//         }
//         else{ 
//             $pass_myfile_upload_path = null; 
//         }


//         move_uploaded_file($aadhar_myfile1_tmp_name, $aadhar_myfile1_upload_path);
//         move_uploaded_file($aadhar_myfile2_tmp_name, $aadhar_myfile2_upload_path);
//         move_uploaded_file($pan_myfile_tmp_name, $pan_myfile_upload_path);
//         if($dl_myfile_upload_path != null){
//             move_uploaded_file($dl_myfile_tmp_name, $dl_myfile_upload_path);
//         }
//         if($pass_myfile_upload_path != null){
//             move_uploaded_file($pass_myfile_tmp_name, $pass_myfile_upload_path);
//         }
        
//         // Insert into Database
//         $query_id_proof="INSERT INTO `cand_id_proof`(cand_aadhar_number,cand_name_as_aadhar,cand_aadhar_photo_front,cand_aadhar_photo_back,
//                                           cand_pancard_number,cand_name_as_pancard,cand_pancard_photo,
//                                           cand_dl_no,cand_name_as_dl,cand_dl_place_issue,cand_dl_date_issue,cand_dl_expiry_date,cand_dl_photo_front,
//                                           cand_passport_no,cand_name_as_passport,cand_passport_date_issue,cand_passport_place_issue,cand_passport_expiry_date,cand_passport_photo,
//                                           cand_id_email) 
//                             VALUES($aadhar_no,'$aadhar_name_as_per_document','$new_aadhar_myfile1_name','$new_aadhar_myfile2_name',
//                                 '$pan_card_number','$pan_name_as_per_document','$new_pan_myfile_name',
//                                 '$dl_number','$dl_name_as_per_document','$dl_place_of_issue'," . ($dl_date_of_issue==NULL ? "NULL" : "'$dl_date_of_issue'") . "," . ($dl_expiry_date==NULL ? "NULL" : "'$dl_expiry_date'") . ",'$new_dl_myfile_name',
//                                 '$passport_no','$pass_name_as_per_document', " . ($pass_date_of_issue==NULL ? "NULL" : "'$pass_date_of_issue'") . ",'$pass_place_of_issue'," . ($pass_Expiry_date==NULL ? "NULL" : "'$pass_Expiry_date'") . ",'$new_pass_myfile_name',
//                                 '$email')";
        
//         $result_id_proof = mysqli_query($con, $query_id_proof) or die("Query failed :" . mysqli_error($con));
//         if($result_id_proof){
//             echo 'Your Id details are submited';
//         }
//     }
// }

//Educational Deatails
//high school table
// if (!empty($h_myfile_name) && in_array($h_myfile_ex_lc, $allowTypes)) {

//     if ($h_myfile_size <= 1000000 ) {
//         $new_h_myfile_name = uniqid("IMG-HighSchool-", true) . '.' . $h_myfile_ex_lc;
//         $h_myfile_upload_path = 'uploads/'. $new_h_myfile_name;
//         move_uploaded_file($h_myfile_tmp_name, $h_myfile_upload_path);
//         $query_high_school = "insert into `cand_highschool_details`
//             (cand_highschool_name, cand_highschool_rollno, cand_highschool_board_name,cand_highschool_address, cand_highschool_yop, cand_highschool_marks_per,cand_highschool_marksheet,cand_highschool_email) 
//             values ('$school_name', '$registration_id', '$board_name', '$school_address', '$year_of_passing','$h_marks','$new_h_myfile_name','$email')";

//         $result_high_school = mysqli_query($con, $query_high_school) or die("Query failed :" . mysqli_error($con));
//         if($result_high_school){
//             echo 'High School details are submited';
//         }
//         else{
//             echo 'High School details are not submited'; 
//         }
//     }
//     else{
//         echo "file size is more";
//     }
// }

//Intermediate table
// if (!empty($i_myfile_name) && in_array($i_myfile_ex_lc, $allowTypes)) {
    
//     if ($i_myfile_size <= 1000000 ) {
//         $new_i_myfile_name = uniqid("IMG-Intermediate-", true) . '.' . $i_myfile_ex_lc;
//         $i_myfile_upload_path = 'uploads/'. $new_i_myfile_name;
//         move_uploaded_file($i_myfile_tmp_name, $i_myfile_upload_path);

//         $query_intermediate = "insert into `cand_intermediate_details`
//             (cand_inter_school_name, cand_inter_school_rollno, cand_inter_board_name,cand_inter_school_addres, cand_inter_school_yop, cand_intermediate_marks_per,cand_intermediate_marksheet,cand_intermediate_email) 
//             values ('$i_sname', '$i_r_id', '$i_board_name', '$i_school_address', '$i_year_of_passing','$i_marks','$new_i_myfile_name','$email')";

//         $result_intermediate = mysqli_query($con, $query_intermediate) or die("Query failed :" . mysqli_error($con));
//         if($result_intermediate){
//             echo 'Intermediate details are submited';
//         }
//         else{
//             echo 'Intermediate details are not submited'; 
//         }
//     }
//     else{
//         echo "file size is more";
//     }
// }

// //Post-graduation table
// if (!empty($p_student_degree_name) && !empty($p_student_marksheet_name) && in_array($p_student_degree_ex_lc, $allowTypes) && in_array($p_student_marksheet_ex_lc, $allowTypes)) {
    
//     if ($p_student_degree_size <= 1000000 && $p_student_marksheet_size <= 1000000 ) {
//         $new_p_student_degree_name = uniqid("IMG-PG-Degree-", true) . '.' . $p_student_degree_ex_lc;
//         $new_pg_student_marksheet_name = uniqid("IMG-PG-Marksheet-", true) . '.' . $p_student_marksheet_ex_lc;

//         $p_student_degree_upload_path = 'uploads/'. $new_p_student_degree_name;
//         $p_student_marksheet_upload_path = 'uploads/'. $new_pg_student_marksheet_name;

//         move_uploaded_file($p_student_degree_tmp_name, $p_student_degree_upload_path);
//         move_uploaded_file($p_student_marksheet_tmp_name, $p_student_marksheet_upload_path);

//         $query_post_graduation = "insert into `cand_postgraduate_details`
//             (cand_pg_course_name, cand_pg_specilization, cand_pg_yos, cand_pg_yop, cand_pg_clg_name,cand_pg_clg_enrollment,cand_pg_clg_address,cand_pg_clg_unv_name,cand_pg_marks_per,cand_pg_degree,cand_pg_marksheet,cand_pg_email) 
//             values ('$p_course_name', '$p_specilization', '$p_year_starting', '$p_year_ending', '$p_college_name','$p_college_id','$p_college_address','$p_college_uname','$p_student_marks','$new_p_student_degree_name','$new_pg_student_marksheet_name','$email')";

//         $result_post_graduation = mysqli_query($con, $query_post_graduation) or die("Query failed :" . mysqli_error($con));
//         if($result_post_graduation){
//             echo 'Post Graduation details are submited';
//         }
//         else{
//             echo 'Post Graduation details are not submited';
//         }
//     }
//     else{
//         echo "file size is more";
//     }
// }

// //Deploma table
// if (!empty($ao_student_degree_name) && !empty($ao_student_marksheet_name) && in_array($ao_student_degree_ex_lc, $allowTypes) && in_array($ao_student_marksheet_ex_lc, $allowTypes)) {
    
//     if ($ao_student_degree_size <= 1000000 && $ao_student_marksheet_size <= 1000000 ) {
//         $new_ao_student_degree_name = uniqid("IMG-Deploma-Degree-", true) . '.' . $ao_student_degree_ex_lc;
//         $new_ao_student_marksheet_name = uniqid("IMG-Deploma-Marksheet-", true) . '.' . $ao_student_marksheet_ex_lc;

//         $ao_student_degree_upload_path = 'uploads/'. $new_ao_student_degree_name;
//         $ao_student_marksheet_upload_path = 'uploads/'. $new_ao_student_marksheet_name;

//         move_uploaded_file($ao_student_degree_tmp_name, $ao_student_degree_upload_path);
//         move_uploaded_file($ao_student_marksheet_tmp_name, $ao_student_marksheet_upload_path);

//         $query_deploma = "insert into `cand_diploma_details`
//             (cand_diploma_course_name, cand_diploma_spalization, cand_diploma_yos, cand_diploma_yoe, cand_diploma_clg_name,cand_diploma_rollno,cand_diploma_clg_addr,cand_diploma_university_name,cand_diploma_marks_per,cand_diploma_degree,cand_diploma_marksheet,cand_diploma_email) 
//             values ('$ao_course_name', '$ao_specilization', '$ao_year_starting', '$ao_year_ending', '$ao_college_name','$ao_college_id','$ao_college_address','$ao_college_uname','$ao_student_marks','$new_ao_student_degree_name','$new_ao_student_marksheet_name','$email')";

//         $result_deploma = mysqli_query($con, $query_deploma) or die("Query failed :" . mysqli_error($con));
//         if($result_deploma){
//             echo 'Deploma details are submited';
//         }
//         else{
//             echo 'Deploma details are not submited';
//         }
//     }
//     else{
//         echo "file size is more";
//     }
// }


// //Employee table
// // Employee 1
// $query_emp1 = "insert into `cand_emp1`
//         (cand_com1_name , cand_comp1_door_no , cand_comp1_city ,cand_comp1_pincode ,cand_comp1_state ,cand_emp1_yos ,cand_emp1_yoe ,cand_emp1_code ,cand_emp1_designation ,
//         cand_emp1_dept ,cand_emp1_ctc ,cand_emp1_sal_inhand ,cand_emp1_supervisor_name ,cand_emp1_supervisor_designation ,cand_emp1_supervisor_email ,
//         cand_emp1_supervisor_phone ,cand_emp1_hr_name ,cand_emp1_hr_designation ,cand_emp1_hr_email ,cand_emp1_hr_phone ,cand_emp1_email ) 
//         values ('$curr_com_name_1', '$curr_com_addr_1', '$curr_com_city_1', $curr_com_pincode_1, '$curr_com_state_1', '$curr_com_emp_start_date_1', '$curr_com_emp_end_date_1',
//         '$curr_com_emp_code_1','$curr_com_desig_1','$curr_com_dept_1','$curr_com_ctc_1','$curr_com_salary_1','$curr_com_sup_name_1','$curr_com_supervisor_designation_1',
//         '$curr_com_supervisor_email_1','$curr_com_supervisor_phone_number','$curr_com_hr_name_1','$curr_com_hr_designation_1','$curr_com_hr_official_email_1','$curr_com_hr_phone_1','$email')";

// $result_emp1 = mysqli_query($con, $query_emp1) or die("Query failed :" . mysqli_error($con));
// if($result_emp1){
//     echo 'Employee one details are submited';
// }

// // Employee 2
// $query_emp2 = "insert into `cand_emp2`
//         (cand_com1_name ,cand_comp2_door_no ,cand_comp2_city,cand_comp2_pincode,cand_comp2_state ,cand_emp2_yos ,cand_emp2_yoe ,cand_emp2_code ,cand_emp2_designation ,
//         cand_emp2_dept ,cand_emp2_ctc ,cand_emp2_sal_inhand ,cand_emp2_supervisor_name ,cand_emp2_supervisor_designation ,cand_emp2_supervisor_email ,
//         cand_emp2_supervisor_phone ,cand_emp2_hr_name ,cand_emp2_hr_designation ,cand_emp2_hr_email ,cand_emp2_hr_phone ,cand_emp2_email ) 
//         values ('$prev_com_name_1', '$prev_com_addr_1', '$prev_com_city_1', $prev_com_pincode_1, '$prev_com_state_1', '$prev_com_emp_start_date_1', '$prev_com_emp_end_date_1',
//         '$prev_com_emp_code_1','$prev_com_desig_1','$prev_com_dept_1','$prev_com_ctc_1','$prev_com_salary_1','$prev_com_sup_name_1','$prev_com_supervisor_designation_1',
//         '$prev_com_supervisor_email_1','$prev_com_supervisor_phone_number_1','$prev_com_hr_name_1','$prev_com_hr_designation_1','$prev_com_hr_official_email_1','$prev_com_hr_phone_1','$email')";

// $result_emp2 = mysqli_query($con, $query_emp2) or die("Query failed :" . mysqli_error($con));
// if($result_emp2){
//     echo 'Employee two details are submited';
// }

// // Employee 3
// $query_emp3 = "insert into `cand_emp3`
//         (cand_com3_name ,cand_comp3_door_no ,cand_comp3_city,cand_comp3_pincode,cand_comp3_state ,cand_emp3_yos ,cand_emp3_yoe ,cand_emp3_code ,cand_emp3_designation ,
//         cand_emp3_dept ,cand_emp3_ctc ,cand_emp3_sal_inhand ,cand_emp3_supervisor_name ,cand_emp3_supervisor_designation ,cand_emp3_supervisor_email ,
//         cand_emp3_supervisor_phone ,cand_emp3_hr_name ,cand_emp3_hr_designation ,cand_emp3_hr_email ,cand_emp3_hr_phone ,cand_emp3_email ) 
//         values ('$prev_com_name_2', '$prev_com_addr_2', '$prev_com_city_2', $prev_com_pincode_2, '$prev_com_state_2', '$prev_com_emp_start_date_2', '$prev_com_emp_end_date_2',
//         '$prev_com_emp_code_2','$prev_com_desig_2','$prev_com_dept_2','$prev_com_ctc_2','$prev_com_salary_2','$prev_com_sup_name_2','$prev_com_supervisor_designation_2',
//         '$prev_com_supervisor_email_2','$prev_com_supervisor_phone_number_2','$prev_com_hr_name_2','$prev_com_hr_designation_2','$prev_com_hr_official_email_2','$prev_com_hr_phone_2','$email')";

// $result_emp3 = mysqli_query($con, $query_emp3) or die("Query failed :" . mysqli_error($con));
// if($result_emp3){
//     echo 'Employee three details are submited';
// }

// // References table
// // Personal References
// $query_personal_ref = "insert into `cand_personal_ref`
//         (cand_personal_ref_name_1 ,cand_personal_ref_phone_1 ,cand_personal_ref_email_1,cand_personal_ref_adress_1,cand_personal_ref_relation_1,
//         cand_personal_ref_name_2 ,cand_personal_ref_phone_2,cand_personal_ref_email_2,cand_personal_ref_address_2,cand_personal_relation_2,cand_personal_email) 
//         values ('$cand_personal_ref_name_1', '$cand_personal_ref_phone_1', '$cand_personal_ref_email_1', '$cand_personal_ref_adress_1', '$cand_personal_ref_relation_1',
//         '$cand_personal_ref_name_2','$cand_personal_ref_phone_2','$cand_personal_ref_email_2','$cand_personal_ref_address_2','$cand_personal_relation_2','$email')";

// $result_personal_ref = mysqli_query($con, $query_personal_ref) or die("Query failed :" . mysqli_error($con));
// if($result_personal_ref){
//     echo 'Personal reference details are submited';
// }

// Profesonal References
// $query_professional_ref = "insert into `cand_professional_ref`
//         (cand_professional_ref_name_1 ,cand_professional_ref_com_name_1 ,cand_professional_ref_com_addr_1,cand_professional_ref_des_1,cand_professional_ref_email_1,cand_professional_ref_phone_1,
//         cand_professional_ref_name_2 ,cand_professional_ref_com_name_2 ,cand_professional_ref_com_addr_2,cand_professional_ref_des_2,cand_professional_ref_email_2,cand_professional_ref_phone_2,
//         cand_professional_ref_name_3 ,cand_professional_ref_com_name_3 ,cand_professional_ref_com_addr_3,cand_professional_ref_des_3,cand_professional_ref_email_3,cand_professional_ref_phone_3,
//         cand_professional_email) 
//         values ('$cand_professional_ref_name_1', '$cand_professional_ref_com_name_1', '$cand_professional_ref_com_addr_1', '$cand_professional_ref_des_1', '$cand_professional_ref_email_1','$cand_professional_ref_phone_1',
//         '$cand_professional_ref_name_2', '$cand_professional_ref_com_name_2', '$cand_professional_ref_com_addr_2', '$cand_professional_ref_des_2', '$cand_professional_ref_email_2','$cand_professional_ref_phone_2',
//         '$cand_professional_ref_name_3', '$cand_professional_ref_com_name_3', '$cand_professional_ref_com_addr_3', '$cand_professional_ref_des_3', '$cand_professional_ref_email_3','$cand_professional_ref_phone_3','$email')";

// $result_professional_ref = mysqli_query($con, $query_professional_ref) or die("Query failed :" . mysqli_error($con));
// if($result_professional_ref){
//     echo 'Professional reference details are submited';
// }



// // Other Details
// $query_other = "insert into `cand_other_details`
//         (cand_other_criminal_offense,cand_other_details_email) 
//          values ('$details', '$email')";

// $result_other = mysqli_query($con, $query_other) or die("Query failed :" . mysqli_error($con));
// if($result_other){
//     echo 'Other details are submited';
// }

if(!isset($result_other)){
   

}



