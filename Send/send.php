<?php


$to = "cudriavtsec@yandex.ru";
$to2 = "art.omm@yandex.ru";
$from = "no-reply@diarium.info";
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$email = htmlspecialchars($email);
$name = urldecode($name);
$surname = urldecode($surname);
$email = urldecode($email);
$name = trim($name);
$surname = trim($surname);
$email = trim($email);
$subject = "Diarium.info message";
$subject2 = "Copy of your form submission";
$message = $name . $surname . "\n" . $email . "\n" . "Send message:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $from;

mail($to,$subject,$message,$headers);
mail($to2,$subject2,$message2,$headers2);
echo "Message send. Thank You," . $name . "! I am, Constantinius, personally contact with You";
echo "<br><a href='https://diarium.info'>Back to site</a>";


?>


<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://diarium.info/Send/");}
window.setTimeout("changeurl();",3000);
</script>