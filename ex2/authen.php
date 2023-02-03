<?php
$username = $_POST['username'];
$pwd = $_POST['pwd'];

echo "|username: $username <br> |password: $pwd <br>";

if($username == "admin" && $pwd == "123456"){
    header("Location: home.php");
} else {
    header("Location: error-authen.php");
}

?>