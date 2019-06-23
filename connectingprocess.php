<?php
require "settings.php";

$dataconnection = mysqli_connect($host, $databaseuser, $databasepassword, $databasename);
if (!$dataconnection) {
    die("Connection failed: " . mysqli_connect_error());
}
