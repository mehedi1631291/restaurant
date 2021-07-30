<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "reservation";

$mysqli = new mysqli($host, $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$Name    		= $mysqli->real_escape_string ($_POST['name']);
$Email   		= $mysqli->real_escape_string ($_POST['email']);
$Phone   		= $mysqli->real_escape_string ($_POST['phone']);
$Date    		= $mysqli->real_escape_string ($_POST['date']);
$Numberofpeople = $mysqli->real_escape_string ($_POST['number']);
$Branchname   	= $mysqli->real_escape_string ($_POST['bname']);
$Message 		= $mysqli->real_escape_string ($_POST['message']);

$query = "INSERT INTO info (Name, Email, Phone, Date, Numberofpeople, Branchname, Message)
            VALUES ('{$Name }','{$Email}','{$Phone}','{$Date}','{$Numberofpeople}','{$Branchname}','{$Message}')";

$mysqli->query($query);
$mysqli->close();

