<?php
require('db.php');
session_start();

$password = trim($_POST['password']);
if($password =="katopschoot"){
  $_SESSION["auth"] ="yes";
  header("Location: ../tafel.php");
}else{
  header("Location: ../index.html");
}

        


