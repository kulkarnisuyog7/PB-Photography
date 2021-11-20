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

        <div class="container">
            <div id="divcenter" class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile no.</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'connection.php';



                        $sql = "SELECT * FROM `contactus`";

                        $query = mysqli_query($conn, $sql);

                        $nums = mysqli_num_rows($query);

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        <?php
                        }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Optional Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>