<?php
//trims and removes special characters
$firstname = $lastname = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstname = test_input($_POST["firstname"]);
   $lastname = test_input($_POST["lastname"]);
   $email = test_input($_POST["email"]);
   $subject = test_input($_POST["website"]);
   $message = test_input($_POST["comment"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
