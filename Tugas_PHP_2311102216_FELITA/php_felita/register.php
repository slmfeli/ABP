<?php
session_start();

$message = "";

if(isset($_POST['send'])){

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    $message = "user is added";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Register</h1>

    <form method="POST">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <button class="btn" type="submit" name="send">
            Send
        </button>

    </form>

    <div class="message">
        <?php echo $message; ?>

        <?php
        if($message != ""){
            echo ' <a href="login.php">Login</a>';
        }
        ?>
    </div>

</div>

</body>
</html>