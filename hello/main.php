<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}
else{
    echo "This is INDEx,welcome {$_SESSION['username']} <br/>";
    echo "<a href=\"adduser.php\">Add New User</a> | ";
    echo "<a href=\"logout.php\">LOG-OUT</a>";
}
?>