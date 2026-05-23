<?php
session_start();
include 'config.php';
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == 'admin' && $pass == 'admin123'){
        $_SESSION['admin'] = $user;
        header("Location: index.php");
    } else {
        echo "Invalid Login";
    }
}
?>
<form method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>
