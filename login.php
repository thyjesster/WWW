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
include 'connection.php';
//include 'welcome.php';

?>

<div class="container-fluid" >
    <div class="row">
        <!-- Register
         * need to change php to a separate function to create users
         -->

        <div class="container col-lg-3 col-md-offset-3 text-lg-center ">
            <h2 class="form-signin-heading display-3">Register</h2>


                <!-- Form entry boxes-->
                <div class="form-group">

                    <form action="welcome.php" method="post" class="form-signin">
                <div class=" form-group">

                            <input type="text" class="form-control" placeholder="Email" name="email">

                </div>

                            <input type="text" class="form-control" placeholder="First Name" name="firstname">
                </div>

                <div class=" form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                </div>

                <div class=" form-group">

                    <input type="text" class="form-control" placeholder="Username" name="username">

                </div>

                <div class=" form-group">

                             <input type="text" class="form-control" placeholder="Password" name="password">

                </div>
        <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>

        </div>
        
        <!-- Sign In-->

        <div class="container col-lg-3 col-md-offset-0 text-lg-center ">
            <h2 class="form-signin-heading display-3">Sign in</h2>
            <div class="form-group">

                <form action="welcome.php" method="post" class="form-signin">
                    <input type="text" class="form-control" placeholder="Username" name="username">

            </div>
            <div class=" form-group">

                <input type="text" class="form-control" placeholder="Password" name="password">

            </div>
            <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"> </script>
</body>
</html>
