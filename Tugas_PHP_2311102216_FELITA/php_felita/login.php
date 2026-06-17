<?php
session_start();

$message = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(
        isset($_SESSION['username']) &&
        isset($_SESSION['password']) &&
        $_SESSION['username'] == $username &&
        $_SESSION['password'] == $password
    ){
        $message = "welcome " . $username;
    }
    else{
        $message = "wrong username/password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Login</h1>

    <form method="POST">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <button class="btn" type="submit" name="login">
            Login
        </button>

        <a class="link" href="register.php">
            Register
        </a>

    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>

</div>

</body>
</html>