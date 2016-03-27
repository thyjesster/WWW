<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="blog-masthead">
    <nav class="navbar navbar-dark bg-inverse">
        <a class="navbar-brand"></a>
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

        </ul>

    </nav>

</div>

<!--
<form action="loginAttempt.php" method="post">
    User Name:<br>
    <input type="hidden" name="identity">
    <br>
    Password:<br>
    <input type="hidden" name="password">
    <input type="Login">
</form>
-->
<div class="container-fluid" >
<div class="row">
    <div class="container col-lg-6 col-lg-offset-3 text-lg-center " >

        <form class="form-signin">
            <h2 class="form-signin-heading display-3">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>
</div>
<a href="index.php">HOMEPAGE THO</a> /*link to home page*/
<a href="contact.php">CONTACT US</a> /*link to contact page*/


<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
