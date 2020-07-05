<html>
<head>
<title>Annie</title>
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
<label for="email">E-mail:</label>
<input type="email" name="email" id="email" value="anastasiamorozova27@gmail.com">
<label for="answer">Девичья фамилия матери:</label>
<input type="text" name="answer" id="answer" placeholder="Секретный вопрос">
<input type="submit" name="submit" value="Ответить">
</form>
<?php
session_start();
$conn = mysql_connect ("31.31.196.251","u0703038_my","DiariumCC366");
mysql_select_db ("u0703038_mysteria",$conn);
mysql_set_charset("utf8");
$answer="Калашникова";
if (isset($_POST['submit'])){
    if (isset($_POST['answer'])) { $postanswer = $_POST['answer']; if ($postanswer == '') { unset($postanswer);} }
    else {echo "<p>All good</p>";}
    if($answer==$postanswer)
    {
echo "<p>Отлично, здесь ты можешь писать максимально конфиденциально, как это возможно на данный момент. После 1 входа пароль сохранится на некоторое время.<br> П.С. Конечно нет ничего более конфиденциального, чем встреча.</p>";
$_SESSION['answer']=$_POST['answer'];
?>
<div class="mess">
<div class="top">Мессенджер</div>
<div class="body">
<div class="me">
<?php 
$result=mysql_query("SELECT * FROM `message`",$conn);
while($row = mysql_fetch_array($result)){
$text=$row['text'];$date=$row['date'];
echo "<div class='message'>".$text."<br><span> Date: ".$date."</span></div>";
}
?>
</div>
<div class="you">
<?php 
$result=mysql_query("SELECT * FROM `annie`",$conn);
while($row = mysql_fetch_array($result)){
$text=$row['text'];$date=$row['date'];
echo "<div class='message'>".$text."<br><span> Date: ".$date."</span></div>";
}
?>
</div>
</div>
<div class="btn">
<form action="send.php" method="post">
<textarea name="message" id="message" cols="30" rows="10" placeholder="Твой текст"></textarea>
<input type="submit" name="submitm" value="Написать">
</form>
</div>
</div>
<h1>альбом - be alive</h1>
<div class="cover c1"></div>
<div class="part">
    <h1>Поздравление</h1>
    <p>
        Тебе желаю; как всегда.<br>
        Чтоб ты не унывала,<br>
        Чтоб радостна, скромна была.<br>
        Желанна и гуманна.
    </p>
    <p>
        Чтобы могла быть и слаба,<br>
        Моменты чтобы были.<br>
        Я помню, мне сказала ты -<br>
        "А я не сплю в дороге"
    </p>
    <p>
        Я взял всё это на свой счёт -<br>
        Мне было лишь обидно,<br>
        Что вместе миг и он не в счёт,<br>
        Что рядом, тебе страшно.
    </p>
    <p>
        Хотелось бы лишь доказать,<br>
        Что рядом, под защитой.<br>
        Что я могу тебя поднять,<br>
        Понять и просто приобнять.
    </p>
    <p>
        Боязнь всю стоит потерять,<br>
        Ведь вместе - безопасно.<br>
        Но это лишь словечки¬<br>
        Желаю.<br>
        Чтобы раны быстро заживали.
    </p>
    <p>
        Чтобы цены не выставляла,<br>
        Самооценка не важна.<br>
        Коль скучно ты не думай,<br>
        Не интересно не вникай<br>
        А если позабыли - уходи<br>
        Не трать ты время даром<br>
        Не продавайся за слова,<br>
        Читай всё через призму.<br>
        И на последок;<br>
        Будь - живой.
    </p>
</div>
<div class="part">
    <h1>Last time</h1>
    <p>
        Last time<br>
        When I run from you:<br>
        It was day after-<br>
        When I come to you.,
        drunk.
    </p>
    <p>
        Next day I had taken my money,<br>
        Rented room in up hostel<br>
        I copied passport; Faked my date.<br>
        I rented highest room in state.
    </p>
    <p>
        Silence ' n ' room<br>
        Alone ' n ' zesty        
    </p>
    <p>
        I came to window<br>
        Saw your room.<br>
        Without miracles disgusted.
    </p>
    <p>
        Valera ' n ' you<br>
        You up to flat <br>
        In smile ' n ' rush
    </p>
    <p>
        I saw it all,<br>
        That you made by time.<br>
        I do not watch it -<br>
        All in present.
    </p>
    <p>
        I felt offensive to next mornin<br>
        and heard knocking to room door.<br>
        It was -<br>
        the hotel keeper knocking.
    </p>
    <p>
        She came because,<br>
        Policemen came from you.<br>
        This situation -<br>
        Broken sense.
    </p>
    <p>
        The end of spring<br>
        I did not see:<br>
        The fluid interest -<br>
        to you.<br>
        I didn't give my coat -<br>
        to you.<br>
        Because I don't like you' too.
    </p>
</div>
<h1>ушедший альбом - HAM!</h1>
<div class="cover c2"></div>
<div class="part">
    <h1>Задача > Цель > Мечта |</h1>
    <p>
        Знаешь.<br>
        Задача у меня была - встретиться с тобой.<br>
        Цель - сделать предложение, как 2 года тому назад, только в другом месте.<br>
        Мечта - делать тебя счастливой.<br>
        Молодой человек, который учится в Англии поменял все мои планы. Я точно не буду бегать за занятыми девушками. 
    </p>
</div>
<div class="part">
    <h1>Цитата из разговора</h1>
    <p>
        2 Декабря<br>
        Я встреился с Ваней в его подъезде.<br>
        Я захотел поговорить о тебе<br>
        Я - "Не могу говорить с Настей, потому что у меня пропадёт к ней интерес."<br>
        Ваня - "Ты теперь ставишь себя выше неё."<br>
        Я - "Нет. Позиций - нет.""Я потеряю интерес, потому что она опять скажет про парня, а это убьет меня к ней."
    </p>
</div>
<div class="part">
    <h1>do not associate</h1>
    <p>
        No one<br>
        No body<br>
        n ' no human        
    </p>
    <p>
        Only you and nothing more<br>
        I do not think<br> 
        about you<br>
        your thoughts<br>
        from others<br>
        That it should not do.
    </p>
    <p>
        For real really<br>
        I give credit to you,<br>
        only<br>
        When i see your <br>
        - eyes<br>
        And feel your <br>
        - tries.
    </p>
</div>
<div class="part">
    <h1>правда - ложь</h1>
    <p>
        Конечно я тебе писал,<br>
        Но отправлял не сам яю<br>
        Меня смутил тот фильм, что выложила ты.<br>
        Фильм с однополою судьбой,<br>
        Что не считаю правдой.
    </p>
    <p>
        Вот и спросил тебя стройкой<br>
        с намёком в реверсивность
    </p>
    <p>
        По фактам - больше я правдив.<br>
        В словах я всё скрываю<br>
        Но честно так, скажу на ты.<br>
        В глаза я не свираю.        
    </p>
    <p>
        Касался дев, увы, я чаще<br>
        но только лишь ладонью<br>
        При встрече и лишь после.        
    </p>
    <p>
        Тебе - хочу я доказать<br>
        Что ты была последней<br>
        Не знаю, как же показать<br>
        Мне без одежды стыдно быть<br>
        А был я лишь с тобою<br>
        Доверья мне не получить<br>
        Наказан я судьбоюю
    </p>
</div>
<div class="part">
    <h1>equally related</h1>
    <p>
        You know.<br>
        That men needs to make presents to women.<br>
        In past - families paid for getting marry daughters.<br>
        Now every human equal. I think if you wanna to be with someone, you need to show interest from both sides.        
    </p>
</div>
<div class="part">
    <h1>The end</h1>
    <p>
        The end<br>   
    </p>
    <p>
        Anastasia, Annie, Anesteisha<br>
        I remember words about other young human.<br>
        It is stop signal.<br>
        It is kill my feel<br>
        Goodbye. forget<br>
        
    </p>
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

