<?php
   // phpinfo();
?>

hello world
<?php

$link = mysql_connect('db:3306', 'root', 'root');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

?>