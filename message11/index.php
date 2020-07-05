<html>
<head>
<title>Message</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="author" content="suicvairduCConstantinius">
</head>
<style>
    *{font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; margin: 0 auto; padding: 0 auto;}
body>form, body{display: flex; justify-content: center; align-items: center; flex-direction: column;}
body>form{width: 62vmin; height: 38vmax;}
body>form>input{margin-bottom:2vmin; width: 100%; height: 20%;}
body>form>label{font-size:2vmax}input{font-size: 1.4vmax; text-indent: 1vw; border-radius: 2vmin; background-color: rgba(0, 0, 0, 0.08); outline: none; border: none;}
body>form>input:focus{background-color: rgba(0, 0, 0, 0.12);font-size: 1.7vmax;}
.mess{width: 80vw;min-height: 50vmax; height: 55vmax; max-height: 100vmax; border-radius: 3vmin; border: 0.2vmin solid rgba(0,0,0,1); }
.mess>.top{height: 10%; font-size: 3vmin; width: 100%; background-color: rgba(0, 0, 0, 0.08); text-align: center;}
.mess>.body{height:60%;width: 100%;background-color: rgba(0, 0, 0, 0.04);display: flex; justify-content: center; align-items: center;}
.me,.you{width: 50%; height: 100%; display: flex; background-color: rgba(0, 0, 0, 0.02); flex-direction: column; overflow: auto;}
.btn{width: 100%;height: 30%;background-color: rgba(0, 0, 0, 0.04);display: flex; justify-content: center; align-items: center; flex-direction: column;}
.btn>form{width: 100%; display: flex; height: 100%;justify-content: center; align-items: center;flex-direction: column; }
.btn>form>textarea{font-size: 1.4vmax; text-indent: 1vw;background-color: transparent; width: 100%; height: 59%; border: none; border-top: 0.8vmin solid rgba(0,0,0,0.6);  border-bottom: 0.4vmin solid rgba(0,0,0,0.4); outline: none; resize: none;}
.btn>form>input{background-color: rgba(0, 0, 0, 0.04); width: 100%; height: 41%;border-top-left-radius: 0.1vmin;border-top-right-radius: 0.1vmin;}
.btn>form>input:focus{background-color: rgba(0, 0, 0, 0.12);font-size: 1.7vmax;}
.me>.message{background-color: rgba(0,0,255,0.1);}
.you>.message{background-color: rgba(255,0,0 ,0.1);}
.message{ width: 90%; height:min-content; padding: 1vmin; margin-top: 1vmax; border-radius: 1vmax; font-size:1.5vmax}
.message>span{color:rgba(0,0,0,0.6)}
.part{width: 100%; height: auto; background-color:transparent; background-color: rgba(0,0,0,0.01); color: rgba(0,0,0,0.99); display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
.part>p{width: 80%; margin-bottom: 2vmax;}
.part>h1{width: 80%; margin-top: 7vmax; border-bottom: 0.3vmin solid rgba(0,0,0,1);}
.cover{width: 80vmin;height: 80vmin;background-color: transparent; background-position: bottom; background-size: 100%;background-repeat: no-repeat;  box-shadow: 0vmin 0vmin 7vmin 2vmin rgba(0,0,0,0.38);}
body>h1{height: 10vmin; width: 100%; text-align: center; background-color: transparent;margin-top: 15vmin;}
.c1{background-image: url(1.jpg);}
.c2{background-image: url(2.jpg);}
</style>
<body>
<form action="" method="post">
<label for="answer">Секретный пароль:</label>
<input type="text" name="answer" id="answer" placeholder="Секретный вопрос" required>
<input type="submit" name="submit" value="Ответить">
</form>
<?php
session_start();
$conn = mysql_connect ("31.31.196.251","u0703038_auto","diariumcc366");
mysql_select_db ("u0703038_diarium",$conn);
mysql_set_charset("utf8");
$answer="pandabanda";
if (isset($_POST['submit'])){
    if (isset($_POST['answer'])) { $postanswer = $_POST['answer']; if ($postanswer == '') { unset($postanswer);} }
    else {echo "<p>All good</p>";}
    if($answer==$postanswer)
    {
echo "<p>После 1 входа пароль сохранится на некоторое время.</p>";
$_SESSION['answer']=$_POST['answer'];
?>
<div class="mess">
<div class="top">Мессенджер</div>
<div class="body">
<div class="me">
<?php 
$result=mysql_query("SELECT * FROM `message11`",$conn);
while($row = mysql_fetch_array($result)){
$text=$row['text'];$date=$row['date'];
echo "<div class='message'>".$text."<br><span> Date: ".$date."</span></div>";
}
?>
</div>
<div class="you">
<?php 
$result=mysql_query("SELECT * FROM `message_11`",$conn);
while($row = mysql_fetch_array($result)){
$text=$row['text'];$date=$row['date'];
echo "<div class='message'>".$text."<br><span> Date: ".$date."</span></div>";
}
?>
</div>
</div>
<div class="btn">
<form action="send.php" method="post">
<textarea name="message" id="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
<input type="submit" name="submitm" value="Написать">
</form>
</div>
</div>
<?php
}
else
{
   echo "<h3>Попробуй ввести на русском языке с заглавной буквы, </h3>";
}
}
?>
</body>
</html>

