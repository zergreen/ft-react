<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo "|username: $username <br> |password: $password <br>";

if($username == "c001" && $password == "admin1234"){
    header("Location: home.php");
} else {
    header("Location: error-authen.php");
}

?>