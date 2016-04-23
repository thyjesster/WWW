<html> <!--DOCUMENTATION NOT YET FILLED IN -->
<?php require_once 'common.php';?>
<head>
    <link rel="stylesheet" type="text/css" href="contactP.css" />
    <title>Contact Us</title>
    <style>
	ul#menu li a
	{
   	display:inline;
	}
</style>
</head>
<body>
<div class="header">
    <nav class="navbar">
        <ul class="menu"> <!--"nav navbar-nav"-->
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
</div>

<div class="title">
    <h1 class="a-title">Please Contact us</h1>
    <p class="b-title">For any information or queries</p>
</div>

	 Please Login First or fill out the form below!<br>
	 <?php if($_SESSION[isloggedin] != true){
	 echo'
	 	<button type="loginredirect" action="login.php">Login Here</button>
	 ';};
	 
<div id="logged_in_form" class="contactForm">
    <form action="contactUsMessage.php" method="post">
       
        * required fields<br>
        First Name:<input type="text" name="firstname" placeholder="Enter First Name Here...">
        *<br>
        Last Name:<input type="text" name="lastname" placeholder="Enter Last Name Here...">
        *<br>
        Email Address:<input type="text" name="email" placeholder="Enter Email Address Here...">
        *<br>
        Message Subject:<input type="text" name="subject" placeholder="Brief description of message...">
        *<br>
        <input type="Submit" value="Submit and Continue">
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
