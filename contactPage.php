<?php
// define variables and set to empty values
$name = $email = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstname = test_input($_POST["name"]);
   $lastname = test_input($_POST["email"]);
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
