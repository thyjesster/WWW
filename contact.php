<html>
	<header>
	<link rel="stylesheet" type="text/css" href="contactP.css" />
	<title>Contact Us</title>
	
	<!--session_start();
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
        selector: '#myeditablediv',
        inline: true
      	}); MAYBE -->
    
    
  	</header>
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
  <!-- <?php 
  if(loggedIn = 1)
  {
    <div id="not_logged_in" class="contactForm">
      <form action="/CONACT_US.php" method="post"> 
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
    }else{ -->
	<div id="logged_in_form" class="contactForm">
	<form action="/contactPageTrim.php" method="post"> 
      <!-- prevent injections, verify required fields -->
		<br>First Name:
		<input type="text" name="firstname" placeholder="Enter First Name Here...">
		<br>Second Name:
		<input type="text" name="lastname" placeholder="Enter Last Name Here...">
		<br>Email:
		<input type="text" name="email" placeholder="Enter Email Address Here...">
		<br>Subject:
		<input type="text" name="subject" placeholder="Brief description of message...">
		<br>Message:
		<input id="myeditablediv" type="text" name="message" maxlength="9999" placeholder="Type message here..."> <!--Use tinyMCE somehow-->
		<br>
		<input type="submit">
	</form>
	</div>
</html>
