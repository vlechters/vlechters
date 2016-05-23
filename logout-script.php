<?php
session_start();

echo 'hello'. $_SESSION['username'];
 include("connection.php");

if(isset($_POST['logout'])){
session_start();
session_destroy();

 header('location: index.php');
}
?>