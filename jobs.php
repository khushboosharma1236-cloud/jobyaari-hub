<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM jobs");
echo "<h1>All Jobs</h1>";
while($row = mysqli_fetch_assoc($result)){
    echo "<h3>".$row['title']."</h3>";
    echo "<a href='".$row['link']."'>Apply Now</a><hr>";
}
?>
