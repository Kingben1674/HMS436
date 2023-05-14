<?php

$host="studentdb-maria.gl.umbc.edu";
    $user="ywang9";
    $pass="ywang9";
    $db="ywang9";


// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>