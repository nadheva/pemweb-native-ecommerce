<?php
session_start();

$_SESSION['username'] = '';
$_SESSION['pass'] = '';

unset($_SESSION['username']);
unset($_SESSION['pass']);

session_unset();
session_destroy();
header('Location:index4.php?target=login');
