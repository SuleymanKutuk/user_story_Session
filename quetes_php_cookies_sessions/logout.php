<?php 
require 'inc/head.php';
$_SESSION['login'] = '';
session_destroy();

header('Location: login.php');