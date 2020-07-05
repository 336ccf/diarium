<?php
    if(isset($_POST['submit'])){
    $to = "cudriavtsec@yandex.ru";
    $to1 = "constantinius@diarium.info";
    $to2 = "contact@diarium.info";
    $to3 = "worldofars@diarium.info";
    $from = "no-reply@diarium.info";
    $text = $_POST['message'];
    $subject = "Сообщение";
    $subject2 = "Копия сообщения";
    $message = "Сообщение:" . "\n" . $text;
    $message1 = "Копия сообщения" . $to1 . "\n" . $text;
    $message2 = "Копия сообщения" . $to2 . "\n" . $text;
    $message3 = "Копия сообщения" . $to3 . "\n" . $text;

    $headers = "From:" . $from;
    $headers2 = "From:" . $from;

    mail($to,$subject,$message,$headers);
    mail($to,$subject2,$message1,$headers2);
    mail($to,$subject2,$message2,$headers2);
    mail($to,$subject2,$message3,$headers2);
    // echo "Mail Sent. Thank you " . $text . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://diarium.info/social/");}
window.setTimeout("changeurl();",366);
</script>