<?php

$host="studentdb-maria.gl.umbc.edu";
    // $user="";
    // $pass="";
    // $db="";


// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>