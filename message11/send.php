<?php
session_start();
$conn = mysql_connect ("31.31.196.251","u0703038_auto","diariumcc366");
mysql_select_db ("u0703038_diarium",$conn);
mysql_set_charset("utf8");
if (isset($_POST['submitm'])){
    if (isset($_POST['message'])) { $message = $_POST['message']; if ($message == '') { unset($message);} }
    $ip = $_SERVER['REMOTE_ADDR'];
    $ipv=ip2long($_SERVER['REMOTE_ADDR']);
    $res=mysql_query("INSERT INTO message11 (text,date,ip) VALUES('$message',NOW(),$ipv)",$conn);
}
echo"<script>window.setTimeout(history.back(),366);</script>";
?>