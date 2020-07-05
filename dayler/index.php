<?php session_start(); 

?>
<html>
    <title>Dayler</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius">
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{ color: rgba(255, 255, 255, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.4vmax;}
    .f1x{display: flex; justify-content: space-around; align-items: center;}.fdc{flex-direction: column;}.fdrc{flex-direction: column-reverse;}
    .hidden{display: none;}

    .blogline{ width: 88%; height: auto;}

    .post{width: 100%; height: 50vh;display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;background-color: rgba(0, 0, 0, 0.93);}

    .post>.gallery{width:50%;height: 50vh; border-bottom-left-radius: 2vmax;}
    .image{width:50%;height: 100%; background-position: center; background-size: contain; background-repeat: no-repeat; text-align: center;}
    .gallery>input[type="button"]{width: 25%; height: 100%; font-size: 3vmax; background-color: rgba(0, 0, 0, 0.3); border: none; }
    .gallery>input[type="button"]:hover{background-color: rgba(0, 0, 0, 0.3); box-shadow: 0 0 0.3vmin 0.1vmin rgba(255,0,0,1) inset; cursor: pointer;}

    .statery{width:50%;height: 50vh; border-bottom-left-radius: 2vmax;}

    .post>.info{width:50%;height: 50vh; border-bottom-right-radius: 2vmax; display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    .info>.togglebar{width: 100%; height: 20%; display: flex; justify-content: space-around; align-items: center;}
    .info>.content{width: 100%; height: 80%; border-bottom-right-radius: 2vmax;}
    .info>.togglebar>div{width: 50%; height: 100%; display: flex; justify-content: space-around; align-items: center;}
    .info>.togglebar>div:hover{background-color: rgba(0, 0, 0, 0.3); cursor: pointer; box-shadow: 0 0 0.3vmin 0.1vmin rgba(255,0,0,1) inset;}
    .info>.togglebar>.use{background-color: rgba(0, 0, 0, 0.3);}

    .text, .stat{padding: 1vmax;}
    .text>.blog{font-size: 1.4vmax;}
    .time{font-size: 1.6vmax; margin-left: 1vw; border-top-left-radius: 2vmin; border-top-right-radius: 2vmin;color: rgba(0, 0, 0, 0.93); width:100%; height:auto;}

    .headline{width: 100%; height: 10%; display: flex; justify-content: space-between; align-items: center;}
    .table{width: 100%; height: 80%;  display: flex; justify-content: space-between; align-items: center; flex-direction: column;}

    .valuetype:hover{cursor:pointer; text-decoration: underline;}
    .search{margin-top:10vmin;margin-bottom:10vmin;width: 88vw; background-color: rgba(0, 0, 0, 0.123); height: 20vmin; border-radius: 5vmax;}.search>form{width: 80%; height: 62%; display: flex; justify-content: space-around; align-items: center;}#submit{display: none;}#search{color: rgba(0, 0, 0, 0.93);font-size: 3vmin ;height: 7vmin; width: 62%; display: inline-flex; outline: none; text-indent: 2.4vw; background-color: white; border:none; border-radius: 0.5vmin; border-top-left-radius: 3vmin; border-bottom-left-radius: 3vmin; }#search:focus{box-shadow: 0vmin 0vmin 3vmin 1vmin rgba(0, 0, 0, 0.033);}.search>form>label{width: 10vmin; height: 10vmin; border-radius: 50%; margin-left: 5vmin; background-color: rgba(255,255,255,1);}.search>form>label:hover{box-shadow: 0vmin 0vmin 1.2vmin 0.3vmin rgba(0,0,0,0.3);}#logotype1, #search1{fill: rgba(255,255,255,1);}#logotype1:hover, #search1:hover{fill: rgba(255,255,255,0.9);}#logotype2, #search2{fill: rgba(0,0,0,0.73)}#logotype2:hover, #search2:hover{fill: rgba(0,0,0,0.99)}
    @media screen and (max-width: 70vh) {.post>.gallery, .post>.statery{width: 88vw; height: 25vh;}.post>.info{width: 88vw; height: 25vh;}.gallery>input[type="button"]:nth-child(1){border-bottom-left-radius: 0px;}}
    </style>
<mysteria>
    <div class="f1x search">
        <form action="http://mysteria.space/search/index.php" method="get">
        <input type="text" name="search" id="search" placeholder="Mysteria search engine" required>
        <label for="submit" title="Искать"><svg version="1.1" id="search_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10vmin" height="10vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><g id="search"><circle id="search1" cx="125" cy="125" r="85"/><path id="search2" d="M89.645,89.645c-19.523,19.523-19.523,51.188,0,70.711c18.328,18.328,47.362,19.445,66.999,3.359l24.818,24.818 c1.238-1.096,2.454-2.241,3.643-3.43c1.188-1.188,2.333-2.403,3.429-3.642l-24.819-24.819c16.087-19.636,14.97-48.67-3.358-66.998 C140.832,70.121,109.168,70.121,89.645,89.645z M160.157,153.086c-1.025,1.295-2.143,2.539-3.338,3.734 c-1.194,1.194-2.439,2.313-3.733,3.337c-17.663,14.156-43.529,13.039-59.905-3.337c-17.572-17.572-17.572-46.068,0-63.64 c17.57-17.571,46.067-17.572,63.639,0C173.196,109.557,174.313,135.423,160.157,153.086z"/></g></svg>
        </label><input type="submit" id="submit">
        </form>
        <svg version="1.1" id="mysteria" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16vmin" height="16vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><switch><g i:extraneous="self"><g><circle id="logotype1" cx="125" cy="125" r="95"/><polygon id="logotype2" points="198,153 180,162 153,89.38 136.13,117.89 144,180 126,189 108,180 115.87,117.93 99,89.5 72,162 54,153 90,72 126,107.75 162,72"/></g></g></switch></svg>
    </div>
    <script>mysteria.onclick = function(){location.href="http://mysteria.space/"}</script>
</mysteria>
<body  class="f1x fdc">
        <div class="blogline">
        <?php 
            $conn = mysql_connect ("31.31.196.251","u0703038_admin","diariumCc366");
            mysql_select_db ("u0703038_dayler",$conn);
            mysql_set_charset("utf8");
            $result=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT 10",$conn);
            
            while($row = mysql_fetch_array($result)){

            $day=$row['day'];
            $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
            ?>
            <span class="time<?php echo $day; ?>"><?php echo $day; ?> день</span>
            <div class="post" id="post<?php echo $day; ?>">
                <div class="gallery f1x">
                    <input type="button" id="left<?php echo $day; ?>" value="<">
                    <div class="image" id="img<?php echo $day; ?>">
                        <div class="foodvalue"></div>
                    </div>
                    <input type="button" id="right<?php echo $day; ?>" value=">">
                </div>
                <div class="statery f1x hidden">
                    <div class="block" id="weight<?php echo $day; ?>">
                        <span class="type">Вес</span> - <span class="value">67750</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (гр)</span>
                    </div>
                    <div class="block" id="dsp<?php echo $day; ?>">
                        <span class="type">DIA</span> - <span class="value">110</span><span class="valuetype"> </span><br><span class="type">SYS</span> - <span class="value">70</span><span class="valuetype"> </span><br><span class="type">Pulse</span> - <span class="value">70</span><span class="valuetype"> </span>
                    </div>
                    
                </div>
                <div class="info">
                    <div class="togglebar">
                        <div class="textpost use" onclick="toggleBar<?php echo $day; ?>();">Пост</div>
                        <div class="statistic" onclick="toggleBar<?php echo $day; ?>();">Статистика</div>
                    </div>
                    <div class="content">
                        <div class="text f1x">
                            <span class="blog"><?php echo $row['rutext']; ?></span>
                        </div>
                        <div class="stat hidden">
                            <div class="headline">
                                <span class="type" id="sleep<?php echo $day; ?>">Сон<span class="value">3</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (мин)</span></span>
                                <span class="type" id="earn<?php echo $day; ?>">Заработал<span class="value">0</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> руб.</span></span>
                                <span class="type" id="spend<?php echo $day; ?>">Потратил<span class="value">1135</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> руб.</span></span>
                            </div>
                            <div class="table">
                                <div class="block" id="prog<?php echo $day; ?>">
                                    <span class="type">Программирование</span> - <span class="value">780</span><span class="valuetype"> </span> - <span class="value">7</span><span class="valuetypetarget">(целей)</span> - <span class="value">145</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="mark<?php echo $day; ?>">
                                    <span class="type">Маркетинг</span> - <span class="value">20</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(целей)</span> - <span class="value">6</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="mana<?php echo $day; ?>">
                                    <span class="type">Менеджмент</span> - <span class="value">150</span><span class="valuetype"> </span> - <span class="value">3</span><span class="valuetypetarget">(целей)</span> - <span class="value">14</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="desi<?php echo $day; ?>">
                                    <span class="type">Дизайн</span> - <span class="value">130</span><span class="valuetype"> </span> - <span class="value">6</span><span class="valuetypetarget">(целей)</span> - <span class="value">92</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="stru<?php echo $day; ?>">
                                    <span class="type">Структуризация</span> - <span class="value">20</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(целей)</span> - <span class="value">14</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="educ<?php echo $day; ?>">
                                    <span class="type">Обучение</span> - <span class="value">15</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(целей)</span> - <span class="value">5</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block" id="rest<?php echo $day; ?>">
                                    <span class="type">Отдых</span> - <span class="value">155</span><span class="valuetype"> </span> - <span class="value">2</span><span class="valuetypetarget">(целей)</span> - <span class="value">13</span><span class="valuetypetask">(задач)</span>
                                </div>
                                <div class="block">
                                    <span id="walk<?php echo $day; ?>"><span class="type">Прошел</span> - <span class="value"></span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (м)</span></span> | <span id="run<?php echo $day; ?>"><span class="type">Пробежал</span> - <span class="value"></span> <span class="valuetype"  onclick="changeValue<?php echo $day; ?>();"> (м)</span></span>
                                </div>
                                <div class="block">
                                    <span id="water<?php echo $day; ?>"><span class="type">Потратил воды</span> - <span class="value"></span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (мл)</span></span> | <span id="drink<?php echo $day; ?>"><span class="type">Выпил воды</span> - <span class="value"></span><span class="valuetype"  onclick="changeValue<?php echo $day; ?>();"> (мл)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <script>
            let imgpost<?php echo $day; ?>=[<?php $resul=mysql_query("SELECT * FROM `image` WHERE `day`='$day'",$conn);while($rowt = mysql_fetch_array($resul)){$link=$rowt['name'];echo '`https://diarium.info/admin/dayler/webdoc/image/'.$link.'`, ';} ?> ], imgnow<?php echo $day; ?> = 0;
            var imagepost<?php echo $day; ?>=imgpost<?php echo $day; ?>[imgnow<?php echo $day; ?>];
            let valpost<?php echo $day; ?>=[<?php $resul1=mysql_query("SELECT * FROM `image` WHERE `day`='$day'",$conn);while($rowt1 = mysql_fetch_array($resul1)){$kcal=$rowt1['kcal'];$ch=$rowt1['carbohydrate'];$pr=$rowt1['protein'];$f=$rowt1['fat'];echo '`Ккал-'.$kcal.'|У-'.$ch.'|Б-'.$pr.'|Ж-'.$f.'`, ';} ?>], valnow<?php echo $day; ?> = 0;
            var valuepost<?php echo $day; ?>=valpost<?php echo $day; ?>[valnow<?php echo $day; ?>];
            img<?php echo $day; ?>.style.backgroundImage="url("+imagepost<?php echo $day; ?>+")";
            img<?php echo $day; ?>.getElementsByClassName('foodvalue')[0].innerHTML=valuepost<?php echo $day; ?>;
        right<?php echo $day; ?>.onclick = function() {
                let length = imgpost<?php echo $day; ?>.length-1;
                if (imgnow<?php echo $day; ?><length){imgnow<?php echo $day; ?>+=1;valnow<?php echo $day; ?>+=1}
                else if(imgnow<?php echo $day; ?>==length){imgnow<?php echo $day; ?>=0;valnow<?php echo $day; ?>=0}
                else{alert('error')}  
                imagepost<?php echo $day; ?>=imgpost<?php echo $day; ?>[imgnow<?php echo $day; ?>];
                valuepost<?php echo $day; ?>=valpost<?php echo $day; ?>[valnow<?php echo $day; ?>];
                img<?php echo $day; ?>.style.backgroundImage="url("+imagepost<?php echo $day; ?>+")";
                img<?php echo $day; ?>.getElementsByClassName('foodvalue')[0].innerHTML=valuepost<?php echo $day; ?>;
            }
        left<?php echo $day; ?>.onclick = function() {
                let length = imgpost<?php echo $day; ?>.length-1;
                if (imgnow<?php echo $day; ?>==0){imgnow<?php echo $day; ?>=length;valnow<?php echo $day; ?>=length}
                else if(!imgnow<?php echo $day; ?>==0){imgnow<?php echo $day; ?>-=1;valnow<?php echo $day; ?>-=1}
                else{alert('error')}  
                imagepost<?php echo $day; ?>=imgpost<?php echo $day; ?>[imgnow<?php echo $day; ?>];
                valuepost<?php echo $day; ?>=valpost<?php echo $day; ?>[valnow<?php echo $day; ?>];
                img<?php echo $day; ?>.style.backgroundImage="url("+imagepost<?php echo $day; ?>+")";
                img<?php echo $day; ?>.getElementsByClassName('foodvalue')[0].innerHTML=valuepost<?php echo $day; ?>;
            }
            function toggleBar<?php echo $day; ?>(){
                post<?php echo $day; ?>.getElementsByClassName('textpost')[0].classList.toggle('use');
                post<?php echo $day; ?>.getElementsByClassName('statistic')[0].classList.toggle('use');
                post<?php echo $day; ?>.getElementsByClassName('text')[0].classList.toggle('hidden');
                post<?php echo $day; ?>.getElementsByClassName('statery')[0].classList.toggle('hidden');
                post<?php echo $day; ?>.getElementsByClassName('gallery')[0].classList.toggle('hidden');
                post<?php echo $day; ?>.getElementsByClassName('stat')[0].classList.toggle('hidden');
            }
sleep<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$sleep=$rowlt['sleep'];echo $sleep;} ?>';
earn<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$earn=$rowlt['plus'];echo $earn;} ?>';
spend<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$spend=$rowlt['minus'];echo $spend;} ?>';
prog<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$prog=$rowlt['progtime'];echo $prog;} ?>';
prog<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$prog=$rowlt['progtarget'];echo $prog;} ?>';
prog<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$prog=$rowlt['progtask'];echo $prog;} ?>';
mark<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mark=$rowlt['marktime'];echo $mark;} ?>';
mark<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mark=$rowlt['marktarget'];echo $mark;} ?>';
mark<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mark=$rowlt['marktask'];echo $mark;} ?>';
mana<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mana=$rowlt['manatime'];echo $mana;} ?>';
mana<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mana=$rowlt['manatarget'];echo $mana;} ?>';
mana<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$mana=$rowlt['manatask'];echo $mana;} ?>';
desi<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$desi=$rowlt['desitime'];echo $desi;} ?>';
desi<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$desi=$rowlt['desitarget'];echo $desi;} ?>';
desi<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$desi=$rowlt['desitask'];echo $desi;} ?>';
stru<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$stru=$rowlt['strutime'];echo $stru;} ?>';
stru<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$stru=$rowlt['strutarget'];echo $stru;} ?>';
stru<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$stru=$rowlt['strutask'];echo $stru;} ?>';
educ<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$educ=$rowlt['eductime'];echo $educ;} ?>';
educ<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$educ=$rowlt['eductarget'];echo $educ;} ?>';
educ<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$educ=$rowlt['eductask'];echo $educ;} ?>';
rest<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$rest=$rowlt['resttime'];echo $rest;} ?>';
rest<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$rest=$rowlt['resttarget'];echo $rest;} ?>';
rest<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$rest=$rowlt['resttask'];echo $rest;} ?>';
walk<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$walk=$rowlt['walk'];echo $walk;} ?>';
run<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$run=$rowlt['run'];echo $run;} ?>';
water<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$wu=$rowlt['wu'];$hf=$rowlt['hf'];$pss=$rowlt['pss'];$pp=$rowlt['pp'];echo (($wu*240)+($hf*5*250)+(($pss+$pp)*2500));} ?>';
drink<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$water=$rowlt['water'];$tea=$rowlt['tea'];$ol=$rowlt['ol'];echo ($tea+$water+$ol);} ?>';
weight<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$weight=$rowlt['weight'];echo $weight;} ?>';
dsp<?php echo $day; ?>.getElementsByClassName('value')[0].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$dia=$rowlt['dia'];echo $dia;} ?>';
dsp<?php echo $day; ?>.getElementsByClassName('value')[1].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$sys=$rowlt['sys'];echo $sys;} ?>';
dsp<?php echo $day; ?>.getElementsByClassName('value')[2].innerHTML='<?php $resu=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);while($rowlt = mysql_fetch_array($resu)){$pulse=$rowlt['pulse'];echo $pulse;} ?>';

            function changeValue<?php echo $day; ?>(e){
                var elem=e ? e.target : window.event.srcElement;
                var val = elem.textContent;
                var par = elem.parentNode;
                if (val===' (мин)'){elem.textContent=' (ч)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/60).toFixed(2);}
                else if (val===' (ч)'){elem.textContent=' (мин)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*60).toFixed();}
                else if (val===' руб.'){elem.textContent=' $';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/61).toFixed(2);}
                else if (val===' $'){elem.textContent=' €';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*0.9).toFixed(2);}
                else if (val===' €'){elem.textContent=' руб.';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*(61/0.9)).toFixed(2);}
                else if (val===' (км)'){elem.textContent=' (м)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (м)'){elem.textContent=' (км)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                else if (val===' (л)'){elem.textContent=' (мл)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (мл)'){elem.textContent=' (л)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                else if (val===' (кг)'){elem.textContent=' (гр)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (гр)'){elem.textContent=' (кг)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                
                else{console.log('ERROR <?php echo $day; ?>')}
            }
        </script>
        <?php
            }
            ?>
        </div>
    </body>
</html>