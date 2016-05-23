<?php
session_start();

 include("connection.php");

if(isset($_POST['loginform'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "Select count(*) from leden where gebruikersnaam = '$username' And wachtwoord = '$password'";
    echo $sql;
    $query = $conn->prepare($sql);
    $query->execute();
    
    $count = $query->fetchcolumn();
print_r( $count);
    if($count == 1){
        $_SESSION['username'] = $username;
        header('location: logout.php');
        
    }
}
?>