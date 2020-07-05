<?php

if (isset($_POST['submit'])){
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$type = $_POST['type'];
$title = $_POST['title'];
$text = $_POST['message'];


$host= '31.31.196.251';
$username= 'u0703038_auto';
$password= 'Kon7338Con00Zero';
$database= 'u0703038_diarium';

$mysqli = new mysqli($host,$username,$password,$database);

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result ="INSERT INTO cooperate (name, company_name, email, type, title, text) VALUES ('$name', '$company_name', '$email', '$type', '$title', '$text')";

if ($mysqli->query($result) == TRUE){
	echo "Info In.";
}else{
	echo "Info Non.";
}
$mysqli->close();
}

if(isset($_POST['submit'])){
    $to = "constantinius@diarium.info";
    $to2 = "art.omm@yandex.ru";
    $from = "no-reply@diarium.info";
    $name = htmlspecialchars($name);
    $company_name = htmlspecialchars($company_name);
    $email = htmlspecialchars($email);
    $name = urldecode($name);
    $company_name = urldecode($company_name);
    $email = urldecode($email);
    $name = trim($name);
    $company_name = trim($company_name);
    $email = trim($email);
    $subject = "Diarium.info message";
    $subject2 = "Copy of your form submission";
    $message = $name . $company_name . "\n" . $email . "\n" . "Send message:" . "\n" . "Title:" . "\n" . $title . "\n\n" . "Text:" . "\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $company_name . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $from;
    
    mail($to,$subject,$message,$headers);
    mail($to2,$subject2,$message2,$headers2);
  
    }
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://diarium.info/");}
window.setTimeout("changeurl();",1000);
</script>