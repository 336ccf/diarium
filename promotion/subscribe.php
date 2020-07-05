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

$to = "cudriavtsec@yandex.ru";
$to2 = "iampromo@yandex.ru";
$from = "no-reply@diarium.info";
$subject = "Promotion message";
$subject2 = "Promotion copy message";
$message = "Email : " .$email;
$message2 = "Here is a copy of your message " . $email;

$headers = "From:" . $from;
$headers2 = "From:" . $from;
mail($to,$subject,$message,$headers);
mail($to2,$subject2,$message2,$headers2);

header( 'Location: https://diarium.info/service/', true, 301 );
?>


