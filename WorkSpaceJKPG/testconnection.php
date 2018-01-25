<?php
$link = mysql_connect('localhost:3306', 'root', '');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>