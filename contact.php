<html>
<?php require_once(common.php);
?>
<head>
    <link rel="stylesheet" type="text/css" href="contactP.css" />
    <title>Contact Us</title>

    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugin: 'advlist autolink link image lists charmap print preview',
        });</script>


</head>
<body>
<div class="header">
    <nav class="navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="link" href=index.html>Home</a>
            </li>
            <li class="nav-itema">
                <a class="link" href=login.html>Log In</a>
            </li>
            <li class="nav-item">
                <a class="link-active" href=contact.html>Contact</a>
            </li>
    </nav>
</div>

<div class="title">
    <h1 class="a-title">Please Contact us</h1>
    <p class="b-title">For any information or queries</p>
</div>

<?php
	$firstname = $lastname = $email = $subject = $message = "";
	$firstnameERR = $emailERR = $subjectERR = $messageERR = "";
	$accepted = 1;

	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["firstname"]))
        {
            $firstnameErr = "Name is required";
            $accepted = 0;
        } else
        {
            $firstname = test_input($_POST["firstname"]);
        }

        if (empty($_POST["email"]))
        {
            $emailErr = "Email is required";
            $accepted = 0;
        } else
        {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["subject"]))
        {
            $subjectErr = "Subject is required";
            $accepted = 0;
        } else
        {
            $subject = test_input($_POST["subject"]);
        }

        if (empty($_POST["message"]))
        {
            $messageErr = "Message body is required";
            $accepted = 0;
   		} else
        {
            $message = test_input($_POST["message"]);
        }
    }


	function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!--
if(is_logged_in = TRUE)
{
    <div id="not_logged_in" class="contactForm">
      <form action="/CONTACT_US.php" method="post">
    /*prevent injections, verify required fields*/
    First Name:<br>
        <input type="hidden" name="firstname" value=get.current(first-name)>
    Second Name:<br>
        <input type="hidden" name="lastname" value=get.current(last-name)>
    Email:<br>
        <input type="text" name="emailaddress" value=get.current(email-address)>
    Subject:<br>
        <input type="hidden" name="subject" value="What is this message regarding?">
    Message:<br>
        <input id="myeditablediv" type="text" name="message" value="Type message here"> /*Use tinyMCE somehow*/
        <br>
        <input type="submit">
      </form>
    </div>
    }else{
    -->
	<div id="logged_in_form" class="contactForm">
	<p><span class="error"></span></p>
	<form action="TESTCONTACTPOST.html" method="post">
		* required fields<br>
		<br>First Name:<br>
		<input type="text" name="firstname" placeholder="Enter First Name Here...">
		<span class="error">* <?echo $firstnameErr;?></span>
		<br>Second Name:<br>
		<input type="text" name="lastname" placeholder="Enter Last Name Here...">
		<br>Email:<br>
		<input type="text" name="email" placeholder="Enter Email Address Here...">
		<span class="error">* <?php echo $emailErr;?></span>
		<br>Subject:<br>
		<input type="text" name="subject" placeholder="Brief description of message...">
		<span class="error">* <?php echo $subjectErr;?></span>
		<br>Message:<br>
		<input id="myeditablediv" type="text">
        <form action="tiny-process.php" method="POST">
        <textarea id="msg" name="msg">
            <p>This is <b>bold</b> and <u>underlined</u> text.</p>
            <ul>
                <li>This is a list item.</li>
                <li><a href="http://www.uwindsor.ca">Link to UWindsor</a></li>
            </ul>
            <p>This is a <a href="http://www.php.net">link to php.net</a>.</p>
            <dashd>This is within an invalid XHTML tag.</dashd>
            <p class="aclass">Notice that the XSLT script does not preserveattributes unless it is a correct href attribute for an a tag.</p>
            </textarea>
            <input type="submit" id="submit" />
        </form>
		<input type="submit">
	</form>
	</div>
	<div>
	<form action="contact_info.xml" method="get">
		If You wish to contact us by other methods:
		<br>
  		<button type="submit" formaction="contact_info.xml">Click Here!</button>
  		For our super private contact info..
	</form>
	</div>
</body>
</html>