<?php

session_start();

$_SESSION = array();

session_destroy();

header("location: ../home_page.html");
exit;
?>