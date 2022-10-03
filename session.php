<?php 
session_start();

$email = $_SESSION['email'];
$select = "SELECT id , role, firstname from user where email='".$email."'";