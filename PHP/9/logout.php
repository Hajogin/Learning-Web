<?php
session_start();

$_SESSION['isAuthorized'] = '';

header("Location: 1.php");

?>