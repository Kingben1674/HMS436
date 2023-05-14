<?php

$host="studentdb-maria.gl.umbc.edu";
     $user="benr2";
     $pass="benr2";
     $db="benr2";


// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>