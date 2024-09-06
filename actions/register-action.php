<?php
include "../classes/User.php";

#Create an object
$user = new User;

#call the method
$user->store($_POST); 
//$_POST-->holds the data first_name, last_name, username, and password