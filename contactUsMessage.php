<html>
<head>
    <title>MessageUs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .jumbotron {
            height: 200px;
        }
    </style>
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

<nav class="navbar navbar-dark bg-inverse">
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logIn.php">
                Log In
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">
                Contact
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                Log Out
            </a>
        </li>

    </ul>

</nav>

<div class="jumbotron" style="background-color: lightsteelblue">
    <div class="container">
        <h1 class="blog-title">Windsor Bloglife</h1>
        <p class="lead blog-description">
            Please use the form below to compose and submit your message!
            Our team of untrained monkeys might eventually figure out how to reply..
        </p>
    </div>
</div>

<?php
	if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['subject'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
	}else{
	echo"Please fill out all required information to proceed";
	pagetimeout(function() 
	window.location.href="contact.php" 2000);
	};
	
	
	<h2>Please Type your message below</h2>
    	<form action="messagehandler.php" method="POST">
    		<textarea id="msg" name="body">
      			<p>Please type your message here <b>
    		</textarea>
    		<hidden name="firstname" value=$firstname>
    		<hidden name="lastname" value=$lastname>
    		<hidden name="email" value=$email>
    		<hidden name="subject" value=$subject>
    	<input type="submit" id="submit" />
    	</form>
?>
	
		
