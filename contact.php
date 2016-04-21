<html> <!--DOCUMENTATION NOT YET FILLED IN -->
<?php require_once(common.php);?>
	<head>
	<link rel="stylesheet" type="text/css" href="contactP.css" />
	<title>Contact Us</title>
	
	<script src="tinymce/js/tinymce/tinymce.min.js"></script>
	<script>
 	tinymce.init({
        selector: 'textarea',
        position:center,
        min_height:100,
        min_width:400,
        plugin: 'advlist autolink link image lists charmap print preview',});
      	</script>
    
    
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
     			$accepted = 0:
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
	
	
	<div id="logged_in_form" class="contactForm">
	<p><span class="error"></span></p>
	<form action="TESTCONTACTPOST.html" method="post">
		Please fill out the form below!<br>
		* required fields<br>
		<input type="text" name="firstname" placeholder="Enter First Name Here...">
		<span class="error">* <?php echo $firstnameErr;?></span>
		<br>
		<input type="text" name="lastname" placeholder="Enter Last Name Here...">
		<br>
		<input type="text" name="email" placeholder="Enter Email Address Here...">
		<span class="error">* <?php echo $emailErr;?></span>
		<br>
		<input type="text" name="subject" placeholder="Brief description of message...">
		<span class="error">* <?php echo $subjectErr;?></span>
		<br>
		<span class="error"><?php echo $messageErr;?></span>
		<!--<form id="tiny" action="tiny-process.php" method="POST">
        		<textarea id="fullname" name="fullname">
			<p>Type Message body here...</p>
            		</textarea>
            		
            		<textarea id="email" name="email">
			<p>Type Message body here...</p>
            		</textarea>
            		
            		<textarea id="subject" name="subject">
			<p>Type Message body here...</p>
            		</textarea>
            		
            		<textarea id="msg" name="msg">
			<p>Type Message body here...</p>
            		</textarea>
        	</form>-->
		<br>
		<input type="submit">>
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
