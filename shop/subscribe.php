<?php
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
$file = "maillist.txt";

$fileopen=fopen($file, "a+");
$write="$email\r\n";
fwrite($fileopen,$write);
fclose($fileopen);

header( 'Location: https://diarium.info/shop/', true, 301 );
?>


