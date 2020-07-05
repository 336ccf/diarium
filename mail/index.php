<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_users", "U738S62ers", "u0703038_message"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
$id=$_SESSION['id'];
if ($_SESSION['type']=='user'){
?>
<!DOCTYPE html>
<html>
    <title>Diarium Messages</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius"><link rel="shortcut icon" href="../logo.ico" type="image/x-icon">   
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{ color: rgba(0, 0, 0, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.7vmax;}
    body{background-color: rgba(0, 0, 0, 1);display: flex; justify-content: space-between; align-items:center; flex-wrap: wrap; flex-direction: column;}.f1x{display: flex; justify-content: space-around; align-items: center;}
    .hidden{display: none;}

    .link{width: 99vw; height: 5vmin; background-color: rgba(255, 255, 255, 0.2); display: flex; justify-content: space-around; align-items: center; color: rgba(255, 255, 255, 1);}
    .link:hover{background-color: rgba(255, 255, 255, 0.3); cursor: pointer;}
    .name{width: 99vw; height: 5vmin; display: flex; justify-content: space-around; align-items: center; color: rgba(255, 255, 255, 1);}
    .function{width: 99vw; height: 5vmin; display: flex; justify-content: space-around; align-items: center; color: rgba(255, 255, 255, 1);}
    .function>input{width: 80%;}
    span#fsvalue{color: rgba(255, 255, 255, 1);}
    .messagebox{width: 99vw; height: 80vh; background-color: rgba(255, 255, 255, 0.1); display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    
    .showbox{width: 99vw; height: 61.8%; background-color: rgba(255, 255, 255, 0.1); overflow:auto;  display: flex; justify-content: space-around; align-items: center; flex-direction: row;}
    .left{width: 50%; height: 100%; background-color: rgba(0, 155, 0, 0.321)}
    .right{width: 50%; height: 100%; background-color: rgba(0, 222, 0, 0.321)}
    .showbox>div>.head{width: 100%; height: 10%; background-color: rgba(255, 255, 255, 0.2); display: flex; justify-content: space-around; align-items: center;}
    .showbox>div>.body{width: 100%; height: 90%; overflow: auto;  font-size: 1vmax;}
    .showbox>div>.body>.msg{width: 90%; height: auto; background-color: rgba(255, 255, 255, 0.033); margin-left: 5%; padding: 1vmin; border-radius: 0.3vmin; margin-top: 1vmin; font-size: inherit;}


    .sendbox{width: 99vw; height: 38.2%; background-color: rgba(0, 255,0, 0.4); display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    .sendbox>form{width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.1); display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    .sendbox>form>input{width: 90%; height: 20%; background-color: rgba(255, 255, 255, 0.5); border-bottom-left-radius: 0.3vmax; border-bottom-right-radius: 0.3vmax; color: black;  border: none; cursor: pointer;}
    .sendbox>form>textarea{ text-indent: 1vw;cursor: text ;width: 90%; height: 80%; background-color: rgba(255, 255, 255, 0.4); resize: none; overflow: auto; font-size: 1.5vmax; border-top-left-radius: 0.3vmax; border-top-right-radius: 0.3vmax; color: black; border: none;} 
    .sendbox>form>textarea:focus, .sendbox>form>input:focus{ outline: 0.3vmax solid rgba(255, 0, 0, 0.5);}
    .sendbox>form>textarea:hover, .sendbox>form>input:hover{ box-shadow: 0 0 1vmin 0.2vmin rgba(255, 255, 255, 0.123) inset;}
    
    </style>
    <body>
        <div class="link" onclick="location.href='https://diarium.info/'">Home page</div>
        <div class="name">Hello <?php echo $_SESSION['name']; ?> <?php echo $_SESSION['surname'] ?> !</div>
        <div class="function">
            Font size - <span id="fsvalue">1</span>
            <input type="range" name="fontsize" id="fontsize" step="0.1" max="5" min="0.5" value="1">
        </div>
        <div class="messagebox">
            <div class="showbox">
                <div class="left"><div class="head">Your messages</div>
                    <div class="body">
                        <?php
                        if ($result = mysqli_query($conn, "SELECT * FROM `msg` WHERE `userid`='$id'")){
                            while($row = mysqli_fetch_array($result)){   
                                if(empty($row['text'])){ echo "<div class='msg'>You have no message</div>"; }
                                else{ echo "<div class='msg'>".$row['text']."</div>"; }
                            }
                            
                        }
                        ?>
                    </div>
                </div>
                <div class="right"><div class="head">Kostya's messages</div>
                    <div class="body">
                        <?php
                        if ($resul = mysqli_query($conn, "SELECT * FROM `mymsg` WHERE `userid`='$id'")){
                            while($ro = mysqli_fetch_array($resul)){
                                if(empty($ro['text'])){ echo "<div class='msg'>I do not send to you any messages</div>"; }
                                else { echo "<div class='msg'>".$ro['text']."</div>"; }
                            }
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="sendbox">
                <form action="sending/" method="post">
                    <textarea name="message" id="message" cols="30" rows="10" maxlength="6200" required placeholder="Write there message"></textarea>
                    <input type="submit" value="Send message!" name="sender">
                </form>
            </div>
        </div>
        <script>
        var font=1;
        fsvalue.innerHTML=font;
        fontsize.onchange = function(){
            let lbody=document.getElementsByClassName('body')[0], rbody=document.getElementsByClassName('body')[1], value=fontsize.value;

            rbody.style.fontSize= value + 'vmax';
            lbody.style.fontSize= value + 'vmax';
            fsvalue.innerHTML=value;
        }
        </script>
    </body>
</html>
<?php
} else { ?> <script>location.href='https://diarium.info/admin/';</script> <?php }
?>