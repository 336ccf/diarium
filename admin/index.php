<?php session_start(); 
$conn = mysql_connect ("31.31.196.251","u0703038_admin","diariumCc366");
mysql_select_db ("u0703038_admin",$conn);
mysql_set_charset("utf8");
?>
<html>
    <title>Admin panel</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius">
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.4vmax;}
    .f1x{display: flex; justify-content: space-around; align-items: center;}.fdc{flex-direction: column;}.fdrc{flex-direction: column-reverse;}
    .hidden{display: none;}
    p,h3{width:100%; height:auto; text-align:center;}

    .content{margin-top: 5vmax;}
    .functions{width:100%;height: auto;  display: flex; justify-content: space-around; align-items: center; margin-top: 1vmin;}
    .keyboard{width: 70vw; height: 100%; background-color: rgba(255, 0, 0, 0.1);display: flex; flex-wrap: wrap; align-items: center; }
    .keyboard>.button{width: 7vmin; height: 7vmin; background-color: rgba(255, 0, 0, 0.3); display: flex; justify-content: space-around; align-items: center; margin: 0.2vmax; border-radius: 0.2vmax;}
    .keyboard>.button:hover{opacity: 0.123; font-size: 1.5vmax; cursor: pointer; box-shadow: 0 0 0.25vmin 0.123vmin rgba(255, 0, 0, 0.099) inset;}
    .keyboard>.buttonspace{width: 35vmin; height: 7vmin; background-color: rgba(255, 0, 0, 0.4); display: flex; justify-content: space-around; align-items: center; margin: 0.2vmax; border-radius: 0.2vmax;}
    .keyboard>.buttonspace:hover{opacity: 0.123; font-size: 1.5vmax; cursor: pointer; box-shadow: 0 0 0.25vmin 0.123vmin rgba(255, 0, 0, 0.099) inset;}

    input[type="text"]{text-align: center; width: 70vw; height: 10vmin; background-color: rgba(0, 0, 0, 0.033); outline: none; border: none; border-top-left-radius: 1vmax; border-top-right-radius: 1vmax; cursor: none;}
    input[type="submit"]{-webkit-appearance: none; -moz-appearance: none; appearance: none;text-align: center; width: 70vw; height: 10vmin; background-color: rgba(0, 0, 0, 0.066); outline: none; border: none; cursor: pointer;}
    input[type="submit"]:hover{background-color: rgba(0, 0, 0, 0.099); box-shadow: 0 0 0.25vmin 0.123vmin rgba(0, 0, 0, 0.099) inset;}

    .contentad{width: 100%; height:auto;  display: flex; flex-wrap: wrap; justify-content: space-around; align-items: center; }
    .contentad>div{width: 30vmin; height:40vmin; background-color: rgba(0, 0, 0, 0.066); margin: 5vmin;display: flex; justify-content: space-around; align-items: center;}
    .contentad>div:hover{background-color: rgba(0, 0, 0, 0.099); box-shadow: 0 0 0.25vmin 0.123vmin rgba(0, 0, 0, 0.099) inset; cursor: zoom-in;}
    </style>
    <body>
    <div class="content f1x fdc">
                <div class="title">Admin Panel Log In</div>
                <div class="former">
                    <form action="" method="POST">
                        <input type="text" name="secret" id="secret" placeholder="log into" readonly required title="fill it under"><br>
                        <input type="submit" name="submit" value="check it">
                    </form>
                </div>
                <div class="functions">
                    <div class="keyboard">
                        <div class="button" id="b1">1</div>
                        <div class="button" id="b2">2</div>
                        <div class="button" id="b3">3</div>
                        <div class="button" id="b4">4</div>
                        <div class="button" id="b5">5</div>
                        <div class="button" id="b6">6</div>
                        <div class="button" id="b7">7</div>
                        <div class="button" id="b8">8</div>
                        <div class="button" id="b9">9</div>
                        <div class="button" id="q">q</div>
                        <div class="button" id="w">w</div>
                        <div class="button" id="e">e</div>
                        <div class="button" id="r">r</div>
                        <div class="button" id="t">t</div>
                        <div class="button" id="y">y</div>
                        <div class="button" id="u">u</div>
                        <div class="button" id="i">i</div>
                        <div class="button" id="o">o</div>
                        <div class="button" id="p">p</div>
                        <div class="button" id="a">a</div>
                        <div class="button" id="s">s</div>
                        <div class="button" id="d">d</div>
                        <div class="button" id="f">f</div>
                        <div class="button" id="g">g</div>
                        <div class="button" id="h">h</div>
                        <div class="button" id="j">j</div>
                        <div class="button" id="k">k</div>
                        <div class="button" id="l">l</div>
                        <div class="button" id="z">z</div>
                        <div class="button" id="x">x</div>
                        <div class="button" id="c">c</div>
                        <div class="button" id="v">v</div>
                        <div class="button" id="b">b</div>
                        <div class="button" id="n">n</div>
                        <div class="button" id="m">m</div>
                        <div class="buttonspace" id="space">space</div>
                    </div>
                </div>
                <div class="description">
                    <div class="how">
                        Use it for logging in to the system
                    </div>
                    <div class="lastlog">
                        Date of last logging in: 
                        
                    </div>
                </div>
            </div>
        
        <script>
            b1.onclick = function(){secret.value+='1';}
            b2.onclick = function(){secret.value+='2';}
            b3.onclick = function(){secret.value+='3';}
            b4.onclick = function(){secret.value+='4';}
            b5.onclick = function(){secret.value+='5';}
            b6.onclick = function(){secret.value+='6';}
            b7.onclick = function(){secret.value+='7';}
            b8.onclick = function(){secret.value+='8';}
            b9.onclick = function(){secret.value+='9';}
            q.onclick = function(){secret.value+='q';}
            w.onclick = function(){secret.value+='w';}
            e.onclick = function(){secret.value+='e';}
            r.onclick = function(){secret.value+='r';}
            t.onclick = function(){secret.value+='t';}
            y.onclick = function(){secret.value+='y';}
            u.onclick = function(){secret.value+='u';}
            i.onclick = function(){secret.value+='i';}
            o.onclick = function(){secret.value+='o';}
            p.onclick = function(){secret.value+='p';}
            a.onclick = function(){secret.value+='a';}
            s.onclick = function(){secret.value+='s';}
            d.onclick = function(){secret.value+='d';}
            f.onclick = function(){secret.value+='f';}
            g.onclick = function(){secret.value+='g';}
            h.onclick = function(){secret.value+='h';}
            j.onclick = function(){secret.value+='j';}
            k.onclick = function(){secret.value+='k';}
            l.onclick = function(){secret.value+='l';}
            z.onclick = function(){secret.value+='z';}
            x.onclick = function(){secret.value+='x';}
            c.onclick = function(){secret.value+='c';}
            v.onclick = function(){secret.value+='v';}
            b.onclick = function(){secret.value+='b';}
            n.onclick = function(){secret.value+='n';}
            m.onclick = function(){secret.value+='m';}
            space.onclick = function(){secret.value+=' ';}
        </script>
<?php
$a="cx123xc";
if (isset($_POST['submit'])){
    if (isset($_POST['secret'])) { $s = $_POST['secret']; $s=stripslashes($s);$s=htmlentities($s); $s=strip_tags($s); $s=htmlspecialchars($s); if ($s == '') { unset($s);} }
    else {echo "<p>All good</p>";}
    if($a==$s)
    {

$_SESSION['secret']=$_POST['secret'];
$_SESSION['admin']='admin';

$y2020='2020-01-00 00:00:01';
$startTime = new Datetime($y2020);
$endTime = new DateTime();
 
$diff = $endTime->diff($startTime);

$_SESSION['day']= $diff->format('%d');

echo "<p>Welcome ".$_SESSION['admin']."</p>";
echo "<p>Day ".$_SESSION['day']."</p>";
?>
        <div class="contentad">
            <div id="dayler">
                Dayler
            </div>
            <div id="mysteria">
                Mysteria
            </div>
            <div id="message">
                message1
            </div>
            <script>
            dayler.onclick=function(){location.href='dayler/'}
            mysteria.onclick=function(){location.href='mysteria/'}
            message.onclick=function(){location.href='message/'}
            </script>
        </div>
<?php
}
else
{
   echo "<h3>#refresh</h3>";
}
}
?>


    </body>
</html>
