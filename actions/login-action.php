<?php
include '../classess/User.php';

# Instantiante an object
$user = new User;

# CAll the method
$user->login($_POST);
?>