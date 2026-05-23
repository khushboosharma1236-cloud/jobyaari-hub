<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
echo "<h1>Welcome Admin</h1>";
echo "<a href='jobs.php'>View Jobs</a>";
?>
