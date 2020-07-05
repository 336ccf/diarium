<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_users", "U738S62ers", "u0703038_message"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
$id=$_SESSION['id'];

                $message=$_POST['message'];
                $message = htmlspecialchars($message);
                $message=stripslashes($message);
                $ip = $_SERVER['REMOTE_ADDR'];$ipv=ip2long($_SERVER['REMOTE_ADDR']);
                    if ($sql = mysqli_query($conn, "INSERT INTO `msg` (userid,time,text,ip) VALUES ('$id', NOW(),'$message', '$ipv')")){
                        if (mysqli_query($conn, $sql)) { 
                            
                        } 
                        else {
                            ?>
                            <script>location.href='https://diarium.info/mail/';</script>
                            <?php
                      }
                }
?>