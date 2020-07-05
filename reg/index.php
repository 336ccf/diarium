<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_users", "U738S62ers", "u0703038_message"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
if ($_SESSION['type']=='user'){ ?> <script>location.href='../mail/'</script> <?php }
else{
?>
<html>
    <title>Diarium registration</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius"><link rel="shortcut icon" href="../logo.ico" type="image/x-icon">   
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{ color: rgba(0, 0, 0, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.7vmax;}
    body{display: flex; justify-content: space-between; align-items:center; flex-wrap: wrap; flex-direction: column;}.f1x{display: flex; justify-content: space-around; align-items: center;}
    .hidden{display: none;}

    form{width: 88vw; height: auto;}
    form>input{width: 100%; height: 10vmin; font-size: 5vmin; text-align: center; outline: none; border: 0.1vmax solid black; cursor: default;}
    form>input[type="text"]{border-top-left-radius: 3vmax;border-top-right-radius: 3vmax; margin-bottom: 1vmin;}
    form>input[type="reset"]{background-color: rgba(255, 0, 0, 0.1);}
    form>input[type="reset"]:hover{background-color: rgba(255, 0, 0, 0.3); cursor: not-allowed;} 
    form>input[type="submit"]{ border-bottom-left-radius: 3vmax;border-bottom-right-radius: 3vmax; margin-top: 1vmin;}
    form>input[type="submit"]:hover{background-color: rgba(0, 0, 0, 0.3); cursor: pointer; }

    .keyboard{padding-bottom: 1vmax; padding-top:1vmax; width: 99vw; height:auto;background-color: rgba(0, 0, 0, 0.2); display: flex; flex-direction: column; flex-wrap: wrap; justify-content: space-around; align-items: center;}
    .keyboard>div>.button{-moz-user-select: none;-khtml-user-select: none;-khtml-user-select: none;width: 3.5vmax; border-radius: 0.1vmax; height: 3.5vmax; margin: 1vmin; background-color: rgba(0, 0, 0, 0.2); display: flex; justify-content: space-around; align-items: center;}
    .keyboard>div>.button:hover{background-color: rgba(0, 0, 0, 0.4); cursor: pointer; }
    .keyboard>div{display: flex; width: auto;height: auto;}

    .link{width: 99vw; height: 5vmin; background-color: rgba(0, 0, 0, 0.2); display: flex; justify-content: space-around; align-items: center;}
    .link:hover{background-color: rgba(0, 0, 0, 0.3); cursor: pointer;}
    .loglink{width: 99vw; height: 5vmin;background-color: rgba(0, 0, 255, 0.2); display: flex; justify-content: space-around; align-items: center;}
    .loglink:hover{background-color: rgba(0, 0, 255, 0.3); cursor: pointer;}

    legend{font-size:3vmax; text-align:center;}
    </style>
    <body>
        <div class="link" onclick="location.href='https://diarium.info/'">Home page</div>
        <div class="loglink" onclick="location.href='../log/'">Log in page</div>
        <form action="" method="post">
            <legend>Registration</legend>
            <input type="text" name="registration" id="registration" readonly plasceholder="Use bottom buttons to write there" required>
            <input type="reset" value="Refresh">
            <input type="submit" value="Registration" name="reg">
        </form>
        <div class="keyboard">
            <div class="row1">
                <div class="button" onclick="addButton();">1</div>
                <div class="button" onclick="addButton();">2</div>
                <div class="button" onclick="addButton();">3</div>
                <div class="button" onclick="addButton();">4</div>
                <div class="button" onclick="addButton();">5</div>
                <div class="button" onclick="addButton();">6</div>
                <div class="button" onclick="addButton();">7</div>
                <div class="button" onclick="addButton();">8</div>
                <div class="button" onclick="addButton();">9</div>
                <div class="button" onclick="addButton();">0</div>
            </div>
            <div class="row2">
                <div class="button" onclick="addButton();">Q</div>
                <div class="button" onclick="addButton();">W</div>
                <div class="button" onclick="addButton();">E</div>
                <div class="button" onclick="addButton();">R</div>
                <div class="button" onclick="addButton();">T</div>
                <div class="button" onclick="addButton();">Y</div>
                <div class="button" onclick="addButton();">U</div>
                <div class="button" onclick="addButton();">I</div>
                <div class="button" onclick="addButton();">O</div>
                <div class="button" onclick="addButton();">P</div>
            </div>
            <div class="row3">
                <div class="button" onclick="addButton();">A</div>
                <div class="button" onclick="addButton();">S</div>
                <div class="button" onclick="addButton();">D</div>
                <div class="button" onclick="addButton();">F</div>
                <div class="button" onclick="addButton();">G</div>
                <div class="button" onclick="addButton();">H</div>
                <div class="button" onclick="addButton();">J</div>
                <div class="button" onclick="addButton();">K</div>
                <div class="button" onclick="addButton();">L</div>
                <div class="button" onclick="addButton();">,</div>
            </div>
            <div class="row">
                <div class="button" onclick="addButton();">Z</div>
                <div class="button" onclick="addButton();">X</div>
                <div class="button" onclick="addButton();">C</div>
                <div class="button" onclick="addButton();">V</div>
                <div class="button" onclick="addButton();">B</div>
                <div class="button" onclick="addButton();">N</div>
                <div class="button" onclick="addButton();">M</div>
                <div class="button" onclick="addButton();" style="width: 9vmax;">SPACE</div>
                <div class="button" onclick="addButton();">.</div>
            </div>
        </div>
        <?php
        if (isset($_POST['reg'])){
            if(!empty($_POST['registration'])){
            $secret=$_POST['registration'];
            $secret = htmlspecialchars($secret);
            $ip=$_SERVER['REMOTE_ADDR'];
            file_put_contents('ip.txt', $ip);
            $ipv=ip2long($_SERVER['REMOTE_ADDR']);
            if ($sql = mysqli_query($conn, "INSERT INTO `users` (secret, date, ip) VALUES ('$secret', NOW(), '$ipv')")){
                if (mysqli_query($conn, $sql)) { } else { ?> <script>location.href='../log/'</script> <?php }
                }
            }
        }
        ?>
        <script>
            function addButton(e){
                var elem=e ? e.target : window.event.srcElement;
                let v=elem.innerHTML;
                registration.value+=v;
            }
        </script>
    </body>
    </html>
        <?php } ?>