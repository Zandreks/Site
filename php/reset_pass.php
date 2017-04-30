<?php
require "db.php";
$password =  $db-> real_escape_string(htmlspecialchars($_POST["password"]));
$id = $db-> real_escape_string(htmlspecialchars($_POST["id"])) ;
$password= md5($password);
$db->query("UPDATE users SET password='$password' WHERE id='$id'");
echo "1";
$db->close();