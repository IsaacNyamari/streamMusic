<?php
require_once "../connect.php";
if (isset($_REQUEST['submit'])) {
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM `artists` where `email` = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $artist = mysqli_fetch_assoc($result);
        if (password_verify($password, $artist['password'])) {
            setcookie('login_success', "Successfully logged in!", time() + 5);
            session_start();
            $_SESSION['fname'] = $artist['fname'];
            $_SESSION['artist_id'] = $artist['artist_id'];
            $_SESSION['lname'] = $artist['lname'];
            $_SESSION['email'] = $artist['email'];
            $_SESSION['logged_in'] = true;
            header("location:../");
        } else {
            echo "Login not verified";
        }
    } else {
        echo "Email does not exist";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "../css/css.php" ?>
    <?php require "../nav/nav.php" ?>
    <title>Login</title>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" autocomplete="off" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" autocomplete="off" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-success" name="submit">Sign In</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>