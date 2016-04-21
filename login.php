<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .jumbotron {
            height: 200px;
        }
    </style>
    <!-- var = new XMLHttpRequest(); -->

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

    </ul>

</nav>

<div class="jumbotron" style="background-color: lightsteelblue">
    <div class="container">
        <h1 class="blog-title">Windsor Bloglife</h1>
        <p class="lead blog-description">
            A blog about the life of a University of Windsor student!
            How cool!
        </p>
    </div>
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

<?php
include 'createDB.php';
//include "welcome.php";


?>

<div class="container">

    <form class="form-signin" action="welcome.php" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>

        <input type="text" id="user" name="user" class="form-control" placeholder="Username" required="" autofocus="">

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required="">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>


<div class="container-fluid" >
    <div class="row">

        <div class="container col-lg-3 col-md-offset-3 text-lg-center ">
            <h2 class="form-signin-heading display-3"> Register</h2>

                <div class="form-group">

                    <form class="form-signin" action="register.php" method="post" >
                        
                <div class=" form-group">

                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">

                </div>

                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" >
                </div>

                <div class=" form-group">
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" >
                </div>

                <div class=" form-group">

                    <input type="text" id="user" name="user" class="form-control" placeholder="Username" >

                </div>

                <div class=" form-group">

                             <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" >

                </div>
        <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Create Account!</button>
                </form>
            </div>

        </div>

        <div class="container col-lg-3 col-md-offset-0 text-lg-center ">
            <h2 class="form-signin-heading display-3">Sign in</h2>
            <form action="welcome.php" method="post" class="form-signin">
            <div class="form-group">


                    <input type="text" class="form-control" placeholder="Username" name="username">

            </div>
            <div class=" form-group">

                <input type="text" class="form-control" placeholder="Password" name="password">

            </div>
            <div>
                <button class="btn btn-lg btn-primary btn-block"  type="submit"> Sign in </button>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="validation.js"></script>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
