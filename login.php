<html>

<head>
    <title>Login</title>
    <!--Meta tag-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!--Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d655fc99b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="">
            <div class="txt_field">
                <input type="text" name="user" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
    <!--validating login-->

    <?php
    session_start();
    require_once 'connection.php';

    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "select * from login where username='$user' and password='$pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);

        if ($row == 1) {

            echo '<script>alert("Login su")</script>';
            $_SESSION['user'] = $user;
            header('location:admin.php');
        } else {
            echo '<script>alert("Login failed \n Enter valid Username and password")</script>';
        }
        echo "<meta http-equiv='refresh' content='0'>";
    }


    ?>

    <!--Optional Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>