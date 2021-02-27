<?php

session_start();

$_SESSION = array();


session_unset();
session_destroy();
echo "done";

header("location: ../Views/Login.php");
