<?php

$lastname = $firstname = $email = $tel = $subject = $message = " ";
$lastnameErr = $firstnameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = " ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty ($_POST["user_lastname"])) {
    $lastnameErr = "Name is required";
  } else {
    $lastname = test_input ($_POST["user_lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match ("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty ($_POST["user_firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = test_input ($_POST["user_firstname"]);
    // check if firstname only contains letters and whitespace
    if (!preg_match ("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }

  if (empty ($_POST["user_email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["user_email"]);
    // check if e-mail address is well-formed
    if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty ($_POST["user_phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $tel = test_input ($_POST["user_phone"]);
    // check if tel is well-formed
    if (!preg_match (" #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# ",$tel)) {
      $phoneErr = "Invalid phone format";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "--Please choose an option--";
  } else {
    $subject = $_POST["subject"];
  }

  if (empty($_POST["user_message"])) {
    $messageErr = "Message is required";
  } else 
  $message = $_POST["user_message"];
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $lastnameErr . '<br>';
echo $firstnameErr . '<br>';
echo $emailErr . '<br>';
echo $phoneErr . '<br>';
echo $subjectErr . '<br>';
echo $messageErr . '<br>';

 header('Location:thanks.php?');


