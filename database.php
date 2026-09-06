<?php
$username = "";
$password = "";
$db = mysqli_connect('localhost', 'root','P@ssw0rd1','tagsync');
//mysql_set_charset('utf8', $db);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
