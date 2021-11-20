<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d655fc99b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>


<body>
    <!--Navigation-->
    <div class="main">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand"><img src="img/logo.png">PB Photography</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarr">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarr">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button type="button" class="btn btn-light"><a id="btnn" href="logout.php">Logout</a></button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="caption text-center">
            <h3>Welcome Pranav</h3>
            <a class="btn btn-outline-light btn-lg" href="enquiry.php">Enquiry</a>

        </div>
    </div>
    <!--Optional Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>