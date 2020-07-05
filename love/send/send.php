<?php

if(isset($_POST['submit'])){
$to = "constantinius@diarium.info";
$to2 = "art.omm@yandex.ru";
$from = "Annie@diarium.info";
$place = $_POST['place'];
$time = $_POST['time'];
$contact = $_POST['contact'];
$subject = "Diarium.info message";
$subject2 = "Copy of your form submission";
$message = $place . $time . "\n" . $contact . "\n" . "Send message:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $place . $time . "\n" . $contact . "\n" . "Send message:" . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $from;

mail($to,$subject,$message,$headers);
mail($to2,$subject2,$message2,$headers2);
echo "Ok " . $name . "!U Evol" . "terger reven lliw I";
echo "<br><a href='https://diarium.info'>Back to site</a>";

}

?>


<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://diarium.info/Send/");}
window.setTimeout("changeurl();",3000);
</script>