<?php
include("../dbconfig.php");
// Get form data
$seq = $_POST['seq'];
$controlNo = $_POST['control_no'];
$lastName = $_POST['last_name'];
$firstName = $_POST['first_name'];
$middleName = $_POST['middle_name'];
$sex = $_POST['sex'];
$birthdate = $_POST['birthdate'];
$courseEnrolled = $_POST['course_enrolled'];
$yearLevel = $_POST['year_level'];
$householdNo = $_POST['household_no'];
$perCapitaIncome = $_POST['per_capita_income'];
$streetBrgy = $_POST['street_brgy'];
$town = $_POST['town'];
$province = $_POST['province'];
$zipCode = $_POST['zip_code'];
$totalAssessment = $_POST['total_assessment'];
$gwa = $_POST['gwa'];
$disability = $_POST['disability'];
$contactNumber = $_POST['contact_number'];
$emailAddress = $_POST['email_address'];
$grantType = $_POST['grant_type'];
$department = $_POST['department'];
$remarks = $_POST['remarks'];

// Prepare data array
$data = [
  'seq' => $seq,
  'control_no' => $controlNo,
  'last_name' => $lastName,
  'first_name' => $firstName,
  'middle_name' => $middleName,
  'sex' => $sex,
  'birthdate' => $birthdate,
  'course_enrolled' => $courseEnrolled,
  'year_level' => $yearLevel,
  'household_no' => $householdNo,
  'per_capita_income' => $perCapitaIncome,
  'street_brgy' => $streetBrgy,
  'town' => $town,
  'province' => $province,
  'zip_code' => $zipCode,
  'total_assessment' => $totalAssessment,
  'gwa' => $gwa,
  'disability' => $disability,
  'contact_number' => $contactNumber,
  'email_address' => $emailAddress,
  'grant_type' => $grantType,
  'department' => $department,
  'remarks' => $remarks,
];

// Push data to Firebase Realtime Database
$database->getReference('granteeForms')->push($data);

// Redirect to a success page or do any additional processing if needed
header('Location: ../pages/masterlist.php');
exit();
