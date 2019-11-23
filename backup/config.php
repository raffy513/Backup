<?php
// insert the name of your database
// connect to your database
$connection = mysqli_connect('localhost','root','','backup');
if (!$connection) {
    die("Connection failed" . mysqli_connect_error());
}



?>