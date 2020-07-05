<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_users", "U738S62ers", "u0703038_message"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
$id=$_SESSION['id'];
if (empty($_SESSION['name'])){
?>
<html>
    <title>Diarium Log in Page</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius"><link rel="shortcut icon" href="../logo.ico" type="image/x-icon">   
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{ color: rgba(0, 0, 0, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.7vmax;}
    body{display: flex; justify-content: space-around; align-items:center; flex-wrap: wrap; flex-direction: column;}.f1x{display: flex; justify-content: space-around; align-items: center;}
    .hidden{display: none;}

        form{width: 99vmin; height: 80vmin; background-color: rgba(0, 0, 0, 0.033);display: flex; justify-content: space-around; align-items:center; flex-wrap: wrap; flex-direction: column;}
        form>input{width: 100%; height: 10vmin; border: none; background-color: rgba(255, 255, 255, 1); text-indent: 1vw; outline: none; font-size: 2vmax;}
        form>input:hover{height: 11vmin; cursor: pointer;}
        form>input:focus{border-bottom: 0.2vmax solid rgba(0, 0, 0, 0.33);}
        form>input[type="submit"]{text-indent: 0; font-size: 2.4vmax;}
        form>input[type="submit"]:hover,form>input[type="submit"]:focus{font-weight: 500; border: none;}
    </style>
    <body>

        <div class="title">Set your profile</div>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Your name *" required>
            <input type="text" name="surname" id="surname" placeholder="Your surname">
            <input type="tel" name="phone" id="phone" placeholder="Phone number">
            <input type="email" name="mail" id="mail" placeholder="Your email">
            <input type="submit" value="Confirm" name="setting">
        </form>
        <?php

        if(isset($_POST['setting'])){
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $phone=$_POST['phone'];
            $mail=$_POST['mail'];
            $name=trim($name);
            $surname=trim($surname);
            $phone=trim($phone);
            $mail=trim($mail);
            $name=htmlspecialchars($name);
            $surname=htmlspecialchars($surname);
            $phone=htmlspecialchars($phone);
            $mail=htmlspecialchars($mail);
            $name=stripslashes($name);
            $surname=stripslashes($surname);
            $phone=stripslashes($phone);
            $mail=stripslashes($mail);
            $_SESSION['name']=$name;
            $_SESSION['surname']=$surname;

            if ($sql = mysqli_query($conn, "UPDATE `users` SET `name`='$name', `surname`='$surname', `phone`='$phone', `mail`='$mail' WHERE `id`='$id'")){
                if (mysqli_query($conn, $sql)) {} else { ?> <script>location.href='../../mail/'</script> <?php }
        }
    }
        ?>
        <script>
        
        </script>
    </body>
</html>
<?php
}
 else{ ?> <script>location.href='../../mail/'</script> <?php }
?>