<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
            $conn = mysql_connect ("31.31.196.251","u0703038_admin","diariumCc366");
            mysql_select_db ("u0703038_dayler",$conn);
            mysql_set_charset("utf8");
            

if($_SESSION['changes']=='handle'){

}else{$_SESSION['daynum']=10;}
$daynum=$_SESSION['daynum'];
?>
<html>
    <title>Diarium</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius"><link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
    .f1x{display: flex; justify-content: space-around; align-items: center;}.fdc{flex-direction: column;}.fdrc{flex-direction: column-reverse;}
    .hidden{display: none;}

    body{overflow: auto;}

    .blogline{ width: 88%; height: auto; margin-top:15vmax; color: rgba(255, 255, 255, 1); font-size: 1.4vmax;}

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

    .text, .stat{padding: 1vmax; overflow: auto; height:100%; max-height:100%;}.text::-webkit-scrollbar { width: 0; }.stat::-webkit-scrollbar { width: 0; }
    .text>.blog{font-size: 1.4vmax; padding-bottom:5vmin;}
    .time{font-weight: 500; font-size: 1.7vmax; margin-left: 1vw; border-top-left-radius: 2vmin; border-top-right-radius: 2vmin;color: rgba(0, 0, 0, 0.93); width:100%; height:auto;}

    .headline{width: 100%; height: 10%; display: flex; justify-content: space-between; align-items: center;}
    .table{width: 100%; height: 80%;  display: flex; justify-content: space-between; align-items: center; flex-direction: column;}

        mysteria{display: block; position: fixed; top: 0; font-size: 1.4vmax;}
    .valuetype:hover{cursor:pointer; text-decoration: underline;}
    .search{width: 100vw; background-color: rgba(0, 0, 0, 0.123);}
    .search>form{width: 80%; height: 7.7vmin; display: flex; justify-content: space-around; align-items: center;}
    #submit{display: none;}
    #search{color: rgba(0, 0, 0, 0.93);font-size: 2.3vmin ;height: 5vmin; width: 80%; display: inline-flex; outline: none; text-indent: 2.4vw; background-color: white; border:none; border-radius: 0.5vmin; border-top-left-radius: 3vmin; border-bottom-left-radius: 3vmin; }
    #search:focus{box-shadow: 0vmin 0vmin 3vmin 1vmin rgba(255, 0, 0, 0.033);}
    .search>form>label{width: 7vmin; height: 7vmin; border-radius: 50%; margin-left: 5vmin; background-color: rgba(255,255,255,1);}
    .search>form>label:hover{box-shadow: 0vmin 0vmin 1.2vmin 0.3vmin rgba(0,0,0,0.099);}
    #logotype1, #search1{fill: rgba(255,255,255,0.62);}
    #logotype1:hover, #search1:hover{fill: rgba(255,255,255,1);}
    #logotype2, #search2{fill: rgba(0,0,0,0.62)}
    #logotype2:hover, #search2:hover{fill: rgba(0,0,0,1)}
    .language{width: 100vw; height: 3vmin;display: flex; justify-content: space-around; font-weight: 500;}
    .language>span{width: 15vw; height: 100%; background-color: rgba(0,0,0,0.39); cursor: pointer; text-align: center; padding-bottom: 1vmax; border-bottom-left-radius: 1vmax; border-bottom-right-radius: 1vmax;}
    .language>span:hover{background-color: rgba(0,0,0,0.099); padding-bottom: 1vmin;font-weight: 400;}
    .language>span.click{background-color: rgba(0,0,0,0.099); padding-bottom: 1vmin; cursor: none; font-weight: 400;}

        .functionline{width: 100%; height: 10vmin; background-color: rgba(0, 0, 0, 0.123); display: flex; justify-content: space-around; align-items: center; font-size: 2.4vmax;}
    input#day{color: rgba(0, 0, 0, 0.97); font-size: 2.5vmax; border: none; background-color: transparent; outline: none; border-bottom: 0.1vmax solid rgba(0, 0, 0, 0.97); width: 5vw; text-align: center;}
    input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {-webkit-appearance: none;}
    .analytic{width: auto; height: 88%; display: flex; justify-content: space-around; align-items: center; padding-left: 2vw; padding-right: 2vw;}
    .analytic:hover{background-color: rgba(0, 0, 0, 0.123); cursor: pointer; border-radius: 0.3vmin;}
            .analytics{width: 100vw; height: 100vh; background-color: rgba(255, 255, 255, 0.99); position: fixed; top: 0; left: 0;}
        .analytics>.menutop{width: 100%; height: 10vh; top: 0; position: fixed; background-color: rgba(0, 0, 0, 0.123);left: 0; display: flex; justify-content: space-around; align-items: center;}
    .menutop>.close{background-position: center; background-size: 120%; width: 10vh; height: 10vh; background-repeat: no-repeat; background-image: url(http://mysteria.space/base/svg/close.svg);}
    .menutop>.close:hover{background-size: 100%; box-shadow: 0 0 1vmin 2vmin rgba(0, 0, 0, 0.033); border-radius: 50%; cursor: not-allowed;}
        .analytics>.choosetype{position: fixed; left: 0; bottom: 0; width: 10vw; height: 90vh;  display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    .analytics>.choosetype>div{ background-color: rgba(0, 0, 0, 0.123); font-size: 1.6vmax; }
    .choosetype>div{width: 100%; height: 100%;display: flex; justify-content: space-around; align-items: center;}
    .choosetype>div:hover{background-color: rgba(0, 0, 0, 0.321 ); cursor: pointer;}.choosetype>div.click{background-color: rgba(0, 0, 0, 0.321 ); cursor: default;}
        .analytics>.statistic{width: 90vw; height: 90vmin; position: fixed; bottom: 0; left: 10vw; background-color: rgba(0, 0, 0, 0.03);}
    
.statistic>.foodtable{width: 90vmin; height: 90vw; overflow-y:auto; transform: rotate(-90deg) translate(40vmin,20.8vw);}.statistic>.foodtable::-webkit-scrollbar { width: 0; }
    .foodtable>.block{width: 100%; height: 10vmin; display: block;display: block; font-size: 3vmax; }
    .foodtable>.block>.value{height: 10vmin;float: left; }
    .foodtable>.block>span.textvalue{float: left; height: 10vmin; display:flex;justify-content: space-around; align-items: center; text-indent: 1vw;}
    .foodtable>.block>.value>span{font-size: 1.5vmax; float: left;}
    .foodtable>.block>.value>.ca{height: 100%; display: flex;justify-content: space-around; align-items: center; background-color: rgba(248, 217, 196, 0.767);}
    .foodtable>.block>.value>.pr{height: 100%; display: flex;justify-content: space-around; align-items: center; background-color: rgba(255, 255, 255, 0.794);}
    .foodtable>.block>.value>.fa{height: 100%; display: flex;justify-content: space-around; align-items: center; background-color: rgba(255, 227, 100, 0.876);}

.statistic>.healthtable{width: 100%; height: 100%; overflow-y:auto; background-color: rgba(0, 0, 0, 0.03)}.statistic>.healthtable::-webkit-scrollbar { width: 0; }
    .statistic>.healthtable>.choosetype{width: 7%; height: 100%; background-color: #00000008; font-size: 1vmax; display: flex; justify-content: space-around; align-items: center; flex-direction: column;float: left;}
    .statistic>.healthtable>.table{width: 93%; height: 100%; display: block;overflow-y: auto !important;float: left;}
    .healthtable>.table>.healthcube{height: 3vw; width: 3vw; background-color: rgba(0, 0, 0, 0.03);margin: 1vmax; float: left;}
    .healthtable>.table>.healthcube.medium{height: 20vw; width: 20vw; background-color: rgba(0, 0, 0, 0.03);margin: 1vmax;}
    .healthtable>.table>.healthcube.small{height: 14vw; width: 14vw; background-color: rgba(0, 0, 0, 0.03);margin: 0.5vmax;}
    .healthtable>.table>.healthcube.big{height: 34vw; width: 34vw; background-color: rgba(0, 0, 0, 0.03);margin: 1.5vmax;}
    .healthtable>.table>.healthcube.line{height: 10vh; width: 100%; background-color: rgba(0, 0, 0, 0.03);margin: 0.5vmin;}
    .healthcube>.healthcircle{height: 100%; width: 100%; border-radius: 50%; background-color: rgba(0, 0, 0, 0.03); display: flex; justify-content: space-around; align-items: center;}
    .healthtable>.table>.healthcube.line>.healthcircle{border-radius:0%;opacity: 0.7;}
    .healthcircle>.dia{border-radius: 50%; background-color: rgba(255, 0, 0, 0.3); display:flex; justify-content: space-around; align-items: center;}
    .healthcircle>.dia>.pulse{border-radius: 50%; background-color: rgba(255, 255, 0, 0.3); display:flex; justify-content: space-around; align-items: center;}
    .healthcircle>.dia>.pulse>.sys{border-radius: 50%; background-color: rgba(0, 0, 255, 0.3); display:flex; justify-content: space-around; align-items: center;}
    .healthcube.line>.healthcircle>.dia,.healthcube.line>.healthcircle>.dia>.pulse,.healthcube.line>.healthcircle>.dia>.pulse>.sys{border-radius:0%;}

.statistic>.moneytable{width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3)}.statistic>.moneytable>.left,.statistic>.moneytable>.right::-webkit-scrollbar { width: 0; }
    .statistic>.moneytable>.right{width: 50%; height:100%;overflow-y:auto !important; background-color: rgba(255,0, 0, 0.3);float: left;}
    .statistic>.moneytable>.left{width: 50%; height:100%;overflow-y:auto !important; background-color: rgba(0, 255, 0, 0.3);float: left;}
    .right>.prevalue{float: left; width: 100%; height: 10vmin; text-align: left; font-size: 2vmax;}
    .left>.prevalue{float: right; width: 100%; height: 10vmin; text-align: right; font-size: 2vmax;}
    .right>.prevalue>.value{float: left; width: 40%; height: 100%; background-color: rgba(0, 0, 0, 0.33);}
    .left>.prevalue>.value{float: right; width: 40%; height: 100%; background-color: rgba(255, 255, 255, 0.33);}
    .prevalue>.value[data-attr]:hover::after{content: attr(data-attr) ' руб.'; font-size: 1.5vmax; display:flex; justify-content: space-around; align-items: center; width: 100%; height:100%;}
    .right>.prevalue>.day{float: left; width: auto; height: 10vmin; display:flex; justify-content: space-around; align-items: center;font-weight: 500; opacity: 0.3}
    .left>.prevalue>.day{float: right; width: auto; height: 10vmin; display:flex; justify-content: space-around; align-items: center;font-weight: 500; opacity: 0.3}
    .prevalue>.day:hover{opacity:0.9;}

.statistic>.timetable{width: 100%; height: 100%;overflow-y:auto !important;}.statistic>.timetable::-webkit-scrollbar { width: 0; }
    .timetable>.values{width: 30vmin; height: 40vmin; border: 0.1vmax solid rgba(0, 0, 0, 0.97); margin:1vmin;padding: 1vmin; float:left;}
    .timetable>.values>.title{font-size: 1.4vmax;font-weight: 500; width: 100%;height: 10vmin;display: flex; justify-content: space-around; align-items: center; opacity:0.1;}
    .timetable>.values>.title:hover{opacity:0.9;}
    .timetable>.values>.circles{width: 100%;height: 30vmin;display:flex;position: sticky; text-align: center;z-index: 1;}
    .circles>.prog{background-color: rgba(0, 0, 123, 0.38); top: 0; left: 0;}
    .circles>.mark{background-color: rgba(123, 0, 0, 0.38); bottom: 0; left: 0;}
    .circles>.mana{background-color: rgba(0, 123, 0, 0.38); bottom: 0; left: 0;}
    .circles>.desi{background-color: rgba(255, 0, 0, 0.38); top: 0; left: 0;}
    .circles>.stru{background-color: rgba(0, 255, 0, 0.62); bottom: 0; left: 0;}
    .circles>.educ{background-color: rgba(255, 0, 0, 0.62); top: 0; left: 0;}
    .circles>.rest{background-color: rgba(0, 0, 255, 0.62); bottom: 0; left: 0;}
    .circles>.sleep{background-color: rgba(255, 0, 0, 0.51); bottom: 0; left: 0;}
    .circles>div{border-radius: 50%;justify-content: flex-end; flex-direction: column; align-items: center; position: absolute; z-index: 2;}
    .circles>div::before{content: attr(data-time);box-sizing:border-box; display: block; z-index: 3; width: 30vmin; height: 5vmin;background-color: rgba(123,123,123,.6); opacity: 0;z-index: 999999; position: fixed; top: 11vmin;transition:.38s ease-in-out; font-size: 1.7vmax;}
    .circles>div::after{content:attr(data-type); box-sizing:border-box; display: block; z-index: 3; width: 30vmin; height: 5vmin;background-color: rgba(123,123,123,.6); opacity: 0;z-index: 999999; position: fixed; top: 11vmin;transition:.38s ease-in-out; font-size: 1.7vmax; border-bottom-left-radius: 1vmax; border-bottom-right-radius: 1vmax;}
    .circles>div:hover::after{opacity: 1;top: 16vmin;}
    .circles>div:hover::before{opacity: 1;top: 11vmin;}
    #all>span.prog{color: rgba(0, 0, 123, 0.38);font-weight: 500; font-size:2vmax}
    #all>span.mark{color: rgba(123, 0, 0, 0.38);font-weight: 500; font-size:2vmax}
    #all>span.mana{color: rgba(0, 123, 0, 0.38);font-weight: 500; font-size:2vmax}
    #all>span.desi{color: rgba(255, 0, 0, 0.38);font-weight: 500; font-size:2vmax}
    #all>span.stru{color: rgba(0, 255, 0, 0.62);font-weight: 500; font-size:2vmax}
    #all>span.educ{color: rgba(255, 0, 0, 0.62);font-weight: 500; font-size:2vmax}
    #all>span.rest{color: rgba(0, 0, 255, 0.62);font-weight: 500; font-size:2vmax}
    #all>span.sleep{color: rgba(255, 0, 0, 0.51);font-weight: 500; font-size:2vmax}

.statistic>.sporttable{width: 100%; height: 100%;overflow-y:auto !important;}.statistic>.sporttable::-webkit-scrollbar { width: 0; }
    .sporttable>.sportblock{width: 30vmin; height: 30vmin; border: 0.1vmax solid rgba(0, 0, 0, 0.97);float:left; margin:1vmin;padding: 1vmin;display: flex;justify-content: space-between; flex-wrap: wrap; }
    .sportblock>.run{width: 60%; height: 60%; background-color: rgba(0, 0, 123, 0.38); display: flex; justify-content: space-around; align-items: center;}
    .sportblock>.walk{width: 30%; height: 30%; background-color: rgba(0, 0, 255, 0.38); display: flex; justify-content: space-around; align-items: center;}

.statistic>.watertable{width: 100%; height: 100%;overflow-y:auto !important;}.statistic>.watertable::-webkit-scrollbar { width: 0; }
    .watertable>.waterblock{width: 100%; height: 30vmin; border: 0.1vmax solid rgba(0, 0, 0, 0.97); margin:1vmin;padding: 1vmin;display: flex;justify-content: end ; align-items:flex-end; }
    .waterblock>.water{background-color: rgba(0, 0, 255, 0.38);}
    .waterblock>.liquid{background-color: rgba(0, 0, 123, 0.38);}
    .waterblock>.alchohol{background-color: rgba(123, 123, 123, 0.38);}
    .waterblock>.milk{background-color: rgba(255, 255, 255, 0.38);}
    .waterblock>.tea{background-color: rgba(255, 192, 90, 0.38);}
    .waterblock>.coffee{background-color: rgba(70, 40, 12, 0.38);}
    .waterblock>div{display: flex; justify-content: space-around; align-items: center;}
    .waterblock>div:hover{cursor: help; }
    .waterblock>div::before{content: attr(data-type);box-sizing:border-box;color: rgba(0, 0, 0, 0.97); font-weight: 600; display: flex;justify-content: space-around; align-items: center; z-index: 3; width: 10vmin; height: 5vmin;border-bottom: 1vmin solid rgba(0, 0, 0, .97); opacity: 0;z-index: 999999; position: absolute; top: 3vmin;transition:.51s ease-in-out; font-size: 1.4vmax;}
    .waterblock>div::after{content:''; display: block; opacity: 0; position: absolute; top: 7vmin;transition:.51s ease-in-out;border-left:2vmin solid transparent; border-right:2vmin solid transparent;  border-top:2vmin solid rgba(0,0,0,0.97);}
    .waterblock>div:hover::after{opacity: 1;top: 12%;}
    .waterblock>div:hover::before{opacity: 1;top: 7%;}
    
    

    @media screen and (max-width: 70vh) {
        input#day{width:5vmax}
        label[for="day"]{display: none;}
        .analytics>.statistic{width: 100vw; height: 80vh; position: fixed; top: 10vh; left: 0; background-color: rgba(0, 0, 0, 0.03);}
        .analytics>.choosetype{position: fixed; left: 0; bottom: 0; width: 100vmin; height: 10vh;  display: flex; justify-content: space-around; align-items: center;flex-direction: row;font-size: 1.6vmax;}
        .statistic>.foodtable{width: 90vmin; height: 90vw; overflow-y:auto; transform: rotate(0deg);}.statistic>.foodtable::-webkit-scrollbar { width: 0; }
    .foodtable>.block{width: 100%; height: 10vmin; display: block;display: block; font-size: 3vmax; }
        .choosetype>div{margin: 1vmin;}
        .post>.gallery, .post>.statery{width: 88vw; height: 25vh;}.post>.info{width: 88vw; height: 25vh;}.gallery>input[type="button"]:nth-child(1){border-bottom-left-radius: 0px;}}
    </style>
<mysteria>
    <div class="f1x search">
        <form action="http://mysteria.space/search/" method="post">
        <input type="text" name="search" id="search" placeholder="Mysteria search engine" required>
        <label for="submit" title="Search"><svg version="1.1" id="search_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7vmin" height="7vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><g id="search"><circle id="search1" cx="125" cy="125" r="85"/><path id="search2" d="M89.645,89.645c-19.523,19.523-19.523,51.188,0,70.711c18.328,18.328,47.362,19.445,66.999,3.359l24.818,24.818 c1.238-1.096,2.454-2.241,3.643-3.43c1.188-1.188,2.333-2.403,3.429-3.642l-24.819-24.819c16.087-19.636,14.97-48.67-3.358-66.998 C140.832,70.121,109.168,70.121,89.645,89.645z M160.157,153.086c-1.025,1.295-2.143,2.539-3.338,3.734 c-1.194,1.194-2.439,2.313-3.733,3.337c-17.663,14.156-43.529,13.039-59.905-3.337c-17.572-17.572-17.572-46.068,0-63.64 c17.57-17.571,46.067-17.572,63.639,0C173.196,109.557,174.313,135.423,160.157,153.086z"/></g></svg>
        </label><input type="submit" id="submit">
        </form>
        <svg version="1.1" id="mysteria" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="7vmin" height="7vmin" viewBox="0 0 250 250" enable-background="new 0 0 250 250" xml:space="preserve"><switch><g i:extraneous="self"><g><circle id="logotype1" cx="125" cy="125" r="95"/><polygon id="logotype2" points="198,153 180,162 153,89.38 136.13,117.89 144,180 126,189 108,180 115.87,117.93 99,89.5 72,162 54,153 90,72 126,107.75 162,72"/></g></g></switch></svg>
    </div>
    <script>mysteria.onclick = function(){location.href="http://mysteria.space/"}</script>
    <div class="functionline">
        <form action="" method="post">
            <label for="day">Show </label><input type="number" name="days" id="day" max="<?php $res2=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT 1",$conn);while($r2 = mysql_fetch_array($res2)){$day=$r2['day'];echo $day;} ?>" value="<?php echo $daynum; ?>"><label for="day"> from <span id="lastdate"><?php $res1=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT 1",$conn);while($r1 = mysql_fetch_array($res1)){$day=$r1['day'];echo $day;} ?></span></label>
        </form>
        <?php 
        if(isset($_POST['days'])){
            $_SESSION['daynum']=$_POST['days'];
            $_SESSION['changes']='handle';
            ?>
            <script>location.href="../ru/"</script>
            <?php
        }
        ?>
        <div class="analytic" onclick="toggleAnalytics()">Analytics</div>
    </div>
    <div class="language">
        <span class="click">English</span>
        <span onclick="location.href='../ru/'">Русский</span>
    </div>
</mysteria>
<div class="analytics hidden" id="analytics">
    <div class="menutop">
        <div class="close" onclick="toggleAnalytics()"></div>
        <div id="all">?</div>
    </div>
    <div class="statistic">
        <div class="timetable hidden">
        <?php 
            $result1=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
            while($row1 = mysql_fetch_array($result1)){
            $day=$row1['day'];
            $resu1=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
            while($row11 = mysql_fetch_array($resu1)){
            ?>
            <div class="values">
                <div class="title" data-day="<?php echo $day; ?>" data-other=""><?php echo $day; ?></div>
                <div class="circles">
                    <div class="prog" data-time="<?php echo $row11['progtime']; ?>" data-type="Programming"></div>
                    <div class="mark" data-time="<?php echo $row11['marktime']; ?>" data-type="Marketing"></div>
                    <div class="mana" data-time="<?php echo $row11['manatime']; ?>" data-type="Management"></div>
                    <div class="desi" data-time="<?php echo $row11['desitime']; ?>" data-type="Design"></div>
                    <div class="stru" data-time="<?php echo $row11['strutime']; ?>" data-type="Talking"></div>
                    <div class="educ" data-time="<?php echo $row11['eductime']; ?>" data-type="Education"></div>
                    <div class="rest" data-time="<?php echo $row11['resttime']; ?>" data-type="Rest"></div>
                    <div class="sleep" data-time="<?php echo $row11['sleep']; ?>" data-type="Sleep"></div>
                </div>
            </div>
            <?php }} ?>
            <script>
            let time = document.getElementsByClassName('timetable')[0],
            timevalue=time.getElementsByClassName('values'),
            timevalues=timevalue.length,
            maxdaytime=1440,
            allprog=0,
            allmark=0,
            allmana=0,
            alldesi=0,
            allstru=0,
            alleduc=0,
            allrest=0,
            allsleep=0;
            for(var v=0;v<timevalues;v++){
                let it=timevalue[v].getElementsByClassName('circles')[0],
                prog=it.getElementsByClassName('prog')[0],
                mark=it.getElementsByClassName('mark')[0],
                mana=it.getElementsByClassName('mana')[0],
                desi=it.getElementsByClassName('desi')[0],
                stru=it.getElementsByClassName('stru')[0],
                educ=it.getElementsByClassName('educ')[0],
                rest=it.getElementsByClassName('rest')[0],
                sleep=it.getElementsByClassName('sleep')[0];
    
                var itprog = prog.dataset.time.split(':'),
                itmark = mark.dataset.time.split(':'),
                itmana = mana.dataset.time.split(':'),
                itdesi = desi.dataset.time.split(':'),
                itstru = stru.dataset.time.split(':'),
                iteduc = educ.dataset.time.split(':'),
                itrest = rest.dataset.time.split(':'),
                alltime=0;

                for(var i=0;i<(it.getElementsByTagName('div').length-1);i++){
                    let its = it.getElementsByTagName('div')[i].dataset.time.split(':'),
                    itis = it.getElementsByTagName('div')[i];
                    alltime+=(parseInt(its[0],10)*60)+(parseInt(its[1],10));
                    itis.style.width=(((parseInt(its[0],10)*60)+(parseInt(its[1],10))/1240)/30)+ 'vmin';
                    itis.style.height=(((parseInt(its[0],10)*60)+(parseInt(its[1],10))/1240)/30)+ 'vmin';

                }
                sleep.style.width=((parseInt(sleep.dataset.time,10)/1240)/30)+ 'vmin';
                sleep.style.height=((parseInt(sleep.dataset.time,10)/1240)/30)+ 'vmin';

                allprog+=(parseInt(itprog[0],10)*60)+(parseInt(itprog[1],10));
                allmark+=(parseInt(itmark[0],10)*60)+(parseInt(itmark[1],10));
                allmana+=(parseInt(itmana[0],10)*60)+(parseInt(itmana[1],10));
                alldesi+=(parseInt(itdesi[0],10)*60)+(parseInt(itdesi[1],10));
                allstru+=(parseInt(itstru[0],10)*60)+(parseInt(itstru[1],10));
                alleduc+=(parseInt(iteduc[0],10)*60)+(parseInt(iteduc[1],10));
                allrest+=(parseInt(itrest[0],10)*60)+(parseInt(itrest[1],10));
                allsleep+=parseInt(sleep.dataset.time,10);

                document.getElementsByClassName('timetable')[0].getElementsByClassName('values')[v].getElementsByClassName('title')[0].dataset.other=1440-alltime;

            }
            </script>
        </div>
        <div class="foodtable hidden">
        <?php 
            $result2=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
            while($row2 = mysql_fetch_array($result2)){
            $day=$row2['day'];
            $dayca=0;
            $daypr=0;
            $dayfa=0;
            $daykcal=0;
            $resu2=mysql_query("SELECT * FROM `image` WHERE `day`='$day'",$conn);
            while($row21 = mysql_fetch_array($resu2)){
                $dayca+=$row21['carbohydrate'];
                $daypr+=$row21['protein'];
                $dayfa+=$row21['fat'];
                $daykcal+=$row21['kcal'];
            }
            $dayca=$dayca*1.38;
            $daypr=$daypr*1.38;
            $dayfa=$dayfa*1.38;
            $daykcal=$daykcal*1.38;
            ?>
            <div class="block">
                <span class="value">
                    <span class="ca"><?php echo $dayca; ?></span>
                    <span class="pr"><?php echo $daypr; ?></span>
                    <span class="fa"><?php echo $dayfa; ?></span>
                </span>
                <span class="textvalue"><?php echo $daykcal; ?></span>
            </div>
            <?php } ?>
            <script>
                let food=document.getElementsByClassName('foodtable')[0], foodblocks=food.getElementsByClassName('block').length, foodblock=food.getElementsByClassName('block');
                let max=food.getElementsByClassName('block')[0].getElementsByClassName('textvalue')[0].innerHTML,min=food.getElementsByClassName('block')[0].getElementsByClassName('textvalue')[0].innerHTML,allfood=0,mca=0,mpr=0,mfa=0,nca=0,npr=0,nfa=0;
                for(var i=0;i<foodblocks;i++){
                    let textvalue = food.getElementsByClassName('block')[i].getElementsByClassName('textvalue')[0];
                    let val=parseInt(textvalue.innerHTML,10);
                    if (max < val)max = val; 
                    if (min > val)min = val; 
                    let ca=food.getElementsByClassName('block')[i].getElementsByClassName('value')[0].getElementsByTagName('span')[0],pr=food.getElementsByClassName('block')[i].getElementsByClassName('value')[0].getElementsByTagName('span')[1],fa=food.getElementsByClassName('block')[i].getElementsByClassName('value')[0].getElementsByTagName('span')[2];

                    if (mca < parseInt(ca.innerHTML,10))mca = parseInt(ca.innerHTML,10); 
                    if (nca > parseInt(ca.innerHTML,10))nca = parseInt(ca.innerHTML,10);
                    if (mpr < parseInt(pr.innerHTML,10))mpr = parseInt(pr.innerHTML,10); 
                    if (npr > parseInt(pr.innerHTML,10))npr = parseInt(pr.innerHTML,10);
                    if (mfa < parseInt(fa.innerHTML,10))mfa = parseInt(fa.innerHTML,10); 
                    if (nfa > parseInt(fa.innerHTML,10))nfa = parseInt(fa.innerHTML,10);

                }
                for(var i=0;i<foodblocks;i++){
                    let all=min+max;
                    let value = food.getElementsByClassName('block')[i].getElementsByClassName('value')[0];
                    let textvalue = food.getElementsByClassName('block')[i].getElementsByClassName('textvalue')[0];
                    let val=parseInt(textvalue.innerHTML,10);
                    value.style.width=(90/all)*val+ 'vmin';
        
                    let ca=value.getElementsByTagName('span')[0],pr=value.getElementsByTagName('span')[1],fa=value.getElementsByTagName('span')[2];
                    let cpf=parseInt(ca.innerHTML,10)+parseInt(pr.innerHTML,10)+parseInt(fa.innerHTML,10);
                    ca.style.width=(parseInt(ca.innerHTML,10)/cpf)*100+'%';
                    pr.style.width=(parseInt(pr.innerHTML,10)/cpf)*100+'%';
                    fa.style.width=(parseInt(fa.innerHTML,10)/cpf)*100+'%';


                    allfood='Kcal -'+all/2+' C,P,F -'+(mca+nca)/2+', '+(mpr+npr)/2+', '+(mfa+nfa)/2;
                }
                </script>
        </div>
        <div class="healthtable hidden">
            <div class="choosetype" id="healthtype">
                <div class="small" onclick="toggleHealth();">Small view</div>
                <div class="medium click" onclick="toggleHealth();">Medium view</div>
                <div class="big" onclick="toggleHealth();">Big view</div>
                <div class="line" onclick="toggleHealth();">Lines</div>
            </div>
            <div class="table">
            <?php 
                $result3=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
                while($row3 = mysql_fetch_array($result3)){
                $day=$row3['day'];
                $resu3=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);
                while($row31 = mysql_fetch_array($resu3)){
                ?>
                <div class="healthcube medium" title="<?php echo $row31['weight'] ?>">
                    <div class="healthcircle"><div class="dia" title="<?php echo $row31['dia'] ?>"> <div class="pulse" title="<?php echo $row31['pulse'] ?>"> <div class="sys" title="<?php echo $row31['sys'] ?>"><?php echo $day ?></div></div></div></div>
                </div>
                <?php }} ?>
                <script>
                let health=document.getElementsByClassName('healthtable')[0], healthtable=health.getElementsByClassName('table')[0],healthcube=healthtable.getElementsByClassName('healthcube'), healthcubes=healthtable.getElementsByClassName('healthcube').length;
                let maxweight=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].title,minweight=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].title;
                let maxdia=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('dia')[0].title,mindia=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('dia')[0].title;
                let maxpulse=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('pulse')[0].title,minpulse=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('pulse')[0].title;
                let maxsys=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('sys')[0].title,minsys=health.getElementsByClassName('table')[0].getElementsByClassName('healthcube')[0].getElementsByClassName('sys')[0].title;
                let allhealth=0;
                for(var i=0;i<healthcubes;i++){
                    let weight = healthcube[i].title;
                    let weightval=parseInt(weight,10);
                    if (maxweight < weightval)maxweight = weightval; 
                    if (minweight > weightval)minweight = weightval; 
                    minweight=parseInt(minweight,10);
                    maxweight=parseInt(maxweight,10);

                    let dia = healthcube[i].getElementsByClassName('dia')[0].title;
                    let diaval=parseInt(dia,10);
                    if (maxdia < diaval)maxdia = diaval; 
                    if (mindia > diaval)mindia = diaval; 
                    mindia=parseInt(mindia,10);
                    maxdia=parseInt(maxdia,10);

                    let pulse = healthcube[i].getElementsByClassName('pulse')[0].title;
                    let pulseval=parseInt(pulse,10);
                    if (maxpulse < pulseval)maxpulse = pulseval; 
                    if (minpulse > pulseval)minpulse = pulseval; 
                    minpulse=parseInt(minpulse,10);
                    maxpulse=parseInt(maxpulse,10);

                    let sys = healthcube[i].getElementsByClassName('sys')[0].title;
                    let sysval=parseInt(sys,10);
                    if (maxsys < sysval)maxsys = sysval; 
                    if (minsys > sysval)minsys = sysval; 
                    minsys=parseInt(minsys,10);
                    maxsys=parseInt(maxsys,10);
                }
                for(var i=0;i<healthcubes;i++){
                    let dia = healthcube[i].getElementsByClassName('dia')[0], 
                    dia1 = healthcube[i].getElementsByClassName('dia')[0].title, 
                    diaval=parseInt(dia1,10), 
                    meddia=(maxdia+mindia)/2;
                    diaopacity=(meddia-((Math.abs(meddia-diaval))))/meddia;
                    dia.style.backgroundColor='rgba(255,0,0,'+ diaopacity +')';

                    let pulse = healthcube[i].getElementsByClassName('pulse')[0], 
                    pulse1 = healthcube[i].getElementsByClassName('pulse')[0].title, 
                    pulseval=parseInt(pulse1,10), 
                    medpulse=(maxpulse+minpulse)/2;
                    pulseopacity=(medpulse-((Math.abs(medpulse-pulseval))))/medpulse;
                    pulse.style.backgroundColor='rgba(255,255,0,'+ pulseopacity +')';

                    let sys = healthcube[i].getElementsByClassName('sys')[0], 
                    sys1 = healthcube[i].getElementsByClassName('sys')[0].title, 
                    sysval=parseInt(sys1,10), 
                    medsys=(maxsys+minsys)/2;
                    sysopacity=(medsys-((Math.abs(medsys-sysval))))/medsys;
                    sys.style.backgroundColor='rgba(0,0,255,'+ sysopacity +')';

                    let maxtype=diaval;
                    if (maxtype < pulseval)maxtype = pulseval;
                    if (maxtype < sysval)maxtype = sysval; 

                    dia.style.width=(100*(diaval/maxtype))+'%';
                    dia.style.height=(100*(diaval/maxtype))+'%';
                    sys.style.width=(100*(sysval/maxtype))+'%';
                    sys.style.height=(100*(sysval/maxtype))+'%';
                    pulse.style.width=(100*(pulseval/maxtype))+'%';
                    pulse.style.height=(100*(pulseval/maxtype))+'%';
                    
                    let weight = healthcube[i] 
                    weight1 = healthcube[i].title, 
                    weightval=parseInt(weight1,10), 
                    medweight=(maxweight+minweight)/2;
                    weightopacity=(medweight-((Math.abs(medweight-weightval))*Math.cbrt(medweight)))/medweight;
                    weight.style.backgroundColor='rgba(0,0,0,'+ weightopacity +')';
                    allhealth='Weight - '+medweight+' D,S,P -'+meddia+', '+medsys+', '+medpulse;
                }
                </script>
            </div>
        </div>
        <div class="sporttable hidden">
        <?php 
                $result4=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
                while($row4 = mysql_fetch_array($result4)){
                $day=$row4['day'];
                $resu4=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
                while($row41 = mysql_fetch_array($resu4)){
                ?>
            <div class="sportblock">
                <div class="run" data-value="<?php echo $row41['run'] ?>"></div>
                <div class="walk" data-value="<?php echo $row41['walk'] ?>"></div>
            </div>
                <?php }} ?>
            <script>
            let sport=document.getElementsByClassName('sporttable')[0],
            sportblock=sport.getElementsByClassName('sportblock'),
            sportblocks=sport.getElementsByClassName('sportblock').length,
            allsport=0;
            for(var i=0;i<sportblocks;i++){
                let it=sportblock[i],
                all = it.getElementsByTagName('div').length;
                allvalue=0;
                let itr = it.getElementsByTagName('div')[0];
                let itw = it.getElementsByTagName('div')[1];
                itr.innerHTML=itr.dataset.value + ' m';
                itw.innerHTML=itw.dataset.value + ' m';

                allvalue=parseInt(itr.dataset.value,10)+parseInt(itw.dataset.value,10);

                itr.style.width=parseInt(itr.dataset.value,10)/allvalue*30+'vmin';
                itr.style.height=parseInt(itr.dataset.value,10)/allvalue*30+'vmin';

                itw.style.width=parseInt(itw.dataset.value,10)/allvalue*30+'vmin';
                itw.style.height=parseInt(itw.dataset.value,10)/allvalue*30+'vmin';

                allsport+=allvalue;


                }
            </script>
        </div>
        <div class="watertable hidden">
        <?php 
                $result5=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
                while($row5 = mysql_fetch_array($result5)){
                $day=$row5['day'];
                $resu5=mysql_query("SELECT * FROM `otherstat` WHERE `day`='$day'",$conn);
                while($row51 = mysql_fetch_array($resu5)){
                ?>
            <div class="waterblock">
                <div class="water" data-value="<?php echo $row51['water'] ?>" data-type="Water"></div>
                <div class="liquid" data-value="<?php echo $row51['ol'] ?>" data-type="Liquid"></div>
                <div class="alchohol" data-value="<?php echo $row51['alcho'] ?>" data-type="Alchohol"></div>
                <div class="milk" data-value="<?php echo $row51['milk'] ?>" data-type="Milk"></div>
                <div class="coffee" data-value="<?php echo $row51['coffee'] ?>" data-type="Coffee"></div>
                <div class="tea" data-value="<?php echo $row51['tea'] ?>" data-type="Tea"></div>
            </div>
                <?php }} ?>
                <script>
                let water=document.getElementsByClassName('watertable')[0],
                waterblock=water.getElementsByClassName('waterblock'),
                waterblocks=waterblock.length,
                allwater=0;
                    for(var i=0;i<waterblocks;i++){
                    let it=waterblock[i],
                    all = it.getElementsByTagName('div').length;
                    allvalue=0;
                    let itw = it.getElementsByTagName('div')[0];
                    let itl = it.getElementsByTagName('div')[1];
                    let ita = it.getElementsByTagName('div')[2];
                    let itm = it.getElementsByTagName('div')[3];
                    let itc = it.getElementsByTagName('div')[4];
                    let itt = it.getElementsByTagName('div')[5];
                    itw.innerHTML=itw.dataset.value + ' ml';
                    itl.innerHTML=itl.dataset.value + ' ml';
                    ita.innerHTML=ita.dataset.value + ' ml';
                    itm.innerHTML=itm.dataset.value + ' ml';
                    itc.innerHTML=itc.dataset.value + ' ml';
                    itt.innerHTML=itt.dataset.value + ' ml';

                    allvalue=parseInt(itw.dataset.value,10)+parseInt(itl.dataset.value,10)+parseInt(ita.dataset.value,10)+parseInt(itm.dataset.value,10)+parseInt(itc.dataset.value,10)+parseInt(itt.dataset.value,10);

                    itw.style.width=parseInt(itw.dataset.value,10)/allvalue*100+'%';
                    itw.style.height=parseInt(itw.dataset.value,10)/allvalue*30+'vmin';

                    itl.style.width=parseInt(itl.dataset.value,10)/allvalue*100+'%';
                    itl.style.height=parseInt(itl.dataset.value,10)/allvalue*30+'vmin';

                    ita.style.width=parseInt(ita.dataset.value,10)/allvalue*100+'%';
                    ita.style.height=parseInt(ita.dataset.value,10)/allvalue*30+'vmin';

                    itm.style.width=parseInt(itm.dataset.value,10)/allvalue*100+'%';
                    itm.style.height=parseInt(itm.dataset.value,10)/allvalue*30+'vmin';

                    itc.style.width=parseInt(itc.dataset.value,10)/allvalue*100+'%';
                    itc.style.height=parseInt(itc.dataset.value,10)/allvalue*30+'vmin';

                    itt.style.width=parseInt(itt.dataset.value,10)/allvalue*100+'%';
                    itt.style.height=parseInt(itt.dataset.value,10)/allvalue*30+'vmin';

                    allwater+=allvalue;
                }
                </script>
        </div>
        <div class="moneytable hidden">
            <div class="left">
            <?php 
                $result6=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
                while($row6 = mysql_fetch_array($result6)){
                $day=$row6['day'];
                $resu6=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
                while($row61 = mysql_fetch_array($resu6)){
                ?>
                <div class="prevalue"><div class="value" data-attr="<?php echo $row61['plus'] ?>" flow="right"></div><span class="day"><?php echo $day ?></span></div>
                <?php }} ?>
            </div>
            <div class="right">
            <?php 
                $result7=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
                while($row7 = mysql_fetch_array($result7)){
                $day=$row7['day'];
                $resu7=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
                while($row71 = mysql_fetch_array($resu7)){
                ?>
                <div class="prevalue"><div class="value" data-attr="<?php echo $row71['minus'] ?>" flow="right"></div><span class="day"><?php echo $day ?></span></div>
                <?php }} ?>
            </div>
            <script>
            let money=document.getElementsByClassName('moneytable')[0],
            left= money.getElementsByClassName('left')[0],
            right= money.getElementsByClassName('right')[0],
            leftpre=left.getElementsByClassName('prevalue'),
            rightpre=right.getElementsByClassName('prevalue'),
            allmoney=0,
            pluscash=0,
            minuscash=0,
            leftmax=0,
            rightmax=0;
            for(var i=0;i<leftpre.length;i++){
                let val=leftpre[i].getElementsByClassName('value')[0].dataset.attr;
                val = parseInt(val,10);
                if (leftmax < val)leftmax = val; 
            }
            for(var i=0;i<rightpre.length;i++){
                let val=rightpre[i].getElementsByClassName('value')[0].dataset.attr;
                val = parseInt(val,10);
                if (rightmax < val)rightmax = val; 
            }
            for(var i=0;i<leftpre.length;i++){
                let val=leftpre[i].getElementsByClassName('value')[0].dataset.attr,
                it=leftpre[i].getElementsByClassName('value')[0],
                per=((parseInt(val,10))/(leftmax+(leftmax/8)))*100;
                it.style.width=per+'%';
                pluscash+=parseInt(val,10);

            }
            for(var i=0;i<rightpre.length;i++){
                let val=rightpre[i].getElementsByClassName('value')[0].dataset.attr,
                it=rightpre[i].getElementsByClassName('value')[0],
                per=((parseInt(val,10))/(rightmax+(rightmax/8)))*100;
                it.style.width=per+'%';
                minuscash+=parseInt(val,10);
            }
            
            </script>
        </div>
    </div>
    <div class="choosetype">
        <div class="times" onclick="toggleStats();">Time</div>
        <div class="health" onclick="toggleStats();">Health</div>
        <div class="food" onclick="toggleStats();">Food</div>
        <div class="sport" onclick="toggleStats();">Sport</div>
        <div class="water" onclick="toggleStats();">Water</div>
        <div class="money" onclick="toggleStats();">Money</div>
    </div>
    <script>
    function toggleAnalytics(){
        if(analytics.classList.contains('hidden')){document.getElementsByTagName('body')[0].style.overflow='hidden';analytics.classList.toggle('hidden');}
        else{document.getElementsByTagName('body')[0].style.overflow='auto';analytics.classList.toggle('hidden');}
    }

    let healthlist=document.getElementsByClassName('healthcube').length;
    function toggleStats(e){
        var elem=e ? e.target : window.event.srcElement;
        if(elem.classList.contains('click')){}
        else{
        
            for(var i=0;i<elem.parentNode.children.length;i++){
                
                if(elem.parentNode.children[i].classList.contains('click')){
                    
                    if(elem.parentNode.children[i].innerHTML=='Time'){elem.parentNode.children[i].classList.toggle('click')&time.classList.toggle('hidden');all.innerHTML='';}
                    if(elem.parentNode.children[i].innerHTML=='Food'){elem.parentNode.children[i].classList.toggle('click')&food.classList.toggle('hidden');all.innerHTML='';}
                    if(elem.parentNode.children[i].innerHTML=='Health'){elem.parentNode.children[i].classList.toggle('click')&health.classList.toggle('hidden');all.innerHTML='';}
                    if(elem.parentNode.children[i].innerHTML=='Sport'){elem.parentNode.children[i].classList.toggle('click')&sport.classList.toggle('hidden');all.innerHTML='';}
                    if(elem.parentNode.children[i].innerHTML=='Water'){elem.parentNode.children[i].classList.toggle('click')&water.classList.toggle('hidden');all.innerHTML='';}
                    if(elem.parentNode.children[i].innerHTML=='Money'){elem.parentNode.children[i].classList.toggle('click')&money.classList.toggle('hidden');all.innerHTML='';}
        
                }}
        if(elem.innerHTML=='Time'){elem.classList.toggle('click');time.classList.toggle('hidden');all.innerHTML='<span class="prog" title="Programming">'+allprog+' min. </span><span class="mark" title="Marketing">'+allmark+' min. </span><span class="mana" title="Management">'+allmana+' min. </span><span class="desi" title="Design">'+alldesi+' min. </span><span class="stru" title="Talking">'+allstru+' min. </span><span class="educ" title="Education">'+alleduc+' min. </span><span class="rest" title="Rest">'+allrest+' min. </span><span class="sleep" title="Sleep">'+allsleep+' min. </span>';}
        if(elem.innerHTML=='Food'){elem.classList.toggle('click')&food.classList.toggle('hidden');all.innerHTML=allfood;}
        if(elem.innerHTML=='Health'){elem.classList.toggle('click')&health.classList.toggle('hidden');all.innerHTML=allhealth;}
        if(elem.innerHTML=='Sport'){elem.classList.toggle('click')&sport.classList.toggle('hidden');all.innerHTML=(allsport/1621) +' miles';}
        if(elem.innerHTML=='Water'){elem.classList.toggle('click')&water.classList.toggle('hidden');all.innerHTML=(allwater/1000) +' l';}
        if(elem.innerHTML=='Money'){elem.classList.toggle('click')&money.classList.toggle('hidden');all.innerHTML='+ '+(pluscash/63)+' dol., - '+(minuscash/63)+' dol.';}
        
        
    }
    }
    function toggleHealth(e){
        var elem=e ? e.target : window.event.srcElement;
        let child=healthtype.getElementsByTagName('div');

        if(elem.innerHTML=='Medium view'){
            if(elem.classList.contains('click')){}
        else{
            for(var i=0;i<child.length;i++){if(healthtype.getElementsByTagName('div')[i].classList.contains('click'))healthtype.getElementsByTagName('div')[i].classList.toggle('click');}
            elem.classList.toggle('click'); 
        for(var i = 0;i<healthlist;i++){document.getElementsByClassName('healthcube')[i].classList.toggle('medium');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('small'))document.getElementsByClassName('healthcube')[i].classList.toggle('small');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('big'))document.getElementsByClassName('healthcube')[i].classList.toggle('big');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('line'))document.getElementsByClassName('healthcube')[i].classList.toggle('line');}
        }}
        else if(elem.innerHTML=='Small view'){
            if(elem.classList.contains('click')){}
        else{
            for(var i=0;i<child.length;i++){if(healthtype.getElementsByTagName('div')[i].classList.contains('click'))healthtype.getElementsByTagName('div')[i].classList.toggle('click');}
            elem.classList.toggle('click'); 
        for(var i = 0;i<healthlist;i++){document.getElementsByClassName('healthcube')[i].classList.toggle('small');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('medium'))document.getElementsByClassName('healthcube')[i].classList.toggle('medium');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('big'))document.getElementsByClassName('healthcube')[i].classList.toggle('big');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('line'))document.getElementsByClassName('healthcube')[i].classList.toggle('line');}
        }}
        if(elem.innerHTML=='Big view'){
            if(elem.classList.contains('click')){}
        else{
            for(var i=0;i<child.length;i++){if(healthtype.getElementsByTagName('div')[i].classList.contains('click'))healthtype.getElementsByTagName('div')[i].classList.toggle('click');}
            elem.classList.toggle('click'); 
        for(var i = 0;i<healthlist;i++){document.getElementsByClassName('healthcube')[i].classList.toggle('big');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('medium'))document.getElementsByClassName('healthcube')[i].classList.toggle('medium');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('small'))document.getElementsByClassName('healthcube')[i].classList.toggle('small');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('line'))document.getElementsByClassName('healthcube')[i].classList.toggle('line');}
        }}
        if(elem.innerHTML=='Lines'){
            if(elem.classList.contains('click')){}
        else{
            for(var i=0;i<child.length;i++){if(healthtype.getElementsByTagName('div')[i].classList.contains('click'))healthtype.getElementsByTagName('div')[i].classList.toggle('click');}
            elem.classList.toggle('click'); 
        for(var i = 0;i<healthlist;i++){document.getElementsByClassName('healthcube')[i].classList.toggle('line');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('medium'))document.getElementsByClassName('healthcube')[i].classList.toggle('medium');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('small'))document.getElementsByClassName('healthcube')[i].classList.toggle('small');
        if(document.getElementsByClassName('healthcube')[i].classList.contains('big'))document.getElementsByClassName('healthcube')[i].classList.toggle('big');}
        }}
    }
    </script>
</div>
<body  class="f1x fdc">
        <div class="blogline">
        <?php 
            $result=mysql_query("SELECT * FROM `day` ORDER BY `id` DESC LIMIT $daynum",$conn);
            
            while($row = mysql_fetch_array($result)){

            $day=$row['day'];
            $resu=mysql_query("SELECT * FROM `stat` WHERE `day`='$day'",$conn);
            ?>
            <span class="time"><?php echo $day; ?> day</span>
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
                        <span class="type">Weight</span> - <span class="value">67750</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (гр)</span>
                    </div>
                    <div class="block" id="dsp<?php echo $day; ?>">
                        <span class="type">DIA</span> - <span class="value">110</span><span class="valuetype"> </span><br><span class="type">SYS</span> - <span class="value">70</span><span class="valuetype"> </span><br><span class="type">Pulse</span> - <span class="value">70</span><span class="valuetype"> </span>
                    </div>
                    
                </div>
                <div class="info">
                    <div class="togglebar">
                        <div class="textpost use" onclick="toggleBar<?php echo $day; ?>();">Post</div>
                        <div class="statistic" onclick="toggleBar<?php echo $day; ?>();">Statistics</div>
                    </div>
                    <div class="content">
                        <div class="text f1x">
                            <span class="blog"><?php echo $row['entext']; ?></span>
                        </div>
                        <div class="stat hidden">
                            <div class="headline">
                                <span class="type" id="sleep<?php echo $day; ?>">Sleep<span class="value">3</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (min)</span></span>
                                <span class="type" id="earn<?php echo $day; ?>">Earn<span class="value">0</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> $</span></span>
                                <span class="type" id="spend<?php echo $day; ?>">Spend<span class="value">1135</span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> $</span></span>
                            </div>
                            <div class="table">
                                <div class="block" id="prog<?php echo $day; ?>">
                                    <span class="type">Programming</span> - <span class="value">780</span><span class="valuetype"> </span> - <span class="value">7</span><span class="valuetypetarget">(targets)</span> - <span class="value">145</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="mark<?php echo $day; ?>">
                                    <span class="type">Marketing</span> - <span class="value">20</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(targets)</span> - <span class="value">6</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="mana<?php echo $day; ?>">
                                    <span class="type">Management</span> - <span class="value">150</span><span class="valuetype"> </span> - <span class="value">3</span><span class="valuetypetarget">(targets)</span> - <span class="value">14</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="desi<?php echo $day; ?>">
                                    <span class="type">Design</span> - <span class="value">130</span><span class="valuetype"> </span> - <span class="value">6</span><span class="valuetypetarget">(targets)</span> - <span class="value">92</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="stru<?php echo $day; ?>">
                                    <span class="type">Talking</span> - <span class="value">20</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(targets)</span> - <span class="value">14</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="educ<?php echo $day; ?>">
                                    <span class="type">Education</span> - <span class="value">15</span><span class="valuetype"> </span> - <span class="value">1</span><span class="valuetypetarget">(targets)</span> - <span class="value">5</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block" id="rest<?php echo $day; ?>">
                                    <span class="type">Rest</span> - <span class="value">155</span><span class="valuetype"> </span> - <span class="value">2</span><span class="valuetypetarget">(targets)</span> - <span class="value">13</span><span class="valuetypetask">(tasks)</span>
                                </div>
                                <div class="block">
                                    <span id="walk<?php echo $day; ?>"><span class="type">Walk</span> - <span class="value"></span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (m)</span></span> | <span id="run<?php echo $day; ?>"><span class="type">Run</span> - <span class="value"></span> <span class="valuetype"  onclick="changeValue<?php echo $day; ?>();"> (m)</span></span>
                                </div>
                                <div class="block">
                                    <span id="water<?php echo $day; ?>"><span class="type">Spend water</span> - <span class="value"></span><span class="valuetype" onclick="changeValue<?php echo $day; ?>();"> (ml)</span></span> | <span id="drink<?php echo $day; ?>"><span class="type">Drink water</span> - <span class="value"></span><span class="valuetype"  onclick="changeValue<?php echo $day; ?>();"> (ml)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <script>
            let imgpost<?php echo $day; ?>=[<?php $resul=mysql_query("SELECT * FROM `image` WHERE `day`='$day'",$conn);while($rowt = mysql_fetch_array($resul)){$link=$rowt['name'];echo '`https://diarium.info/admin/dayler/webdoc/image/'.$link.'`, ';} ?> ], imgnow<?php echo $day; ?> = 0;
            var imagepost<?php echo $day; ?>=imgpost<?php echo $day; ?>[imgnow<?php echo $day; ?>];
            let valpost<?php echo $day; ?>=[<?php $resul1=mysql_query("SELECT * FROM `image` WHERE `day`='$day'",$conn);while($rowt1 = mysql_fetch_array($resul1)){$kcal=$rowt1['kcal'];$ch=$rowt1['carbohydrate'];$pr=$rowt1['protein'];$f=$rowt1['fat'];echo '`Kcal-'.$kcal.'|Ch-'.$ch.'|P-'.$pr.'|F-'.$f.'`, ';} ?>], valnow<?php echo $day; ?> = 0;
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
                if (val===' (min)'){elem.textContent=' (h)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/60).toFixed(2);}
                else if (val===' (h)'){elem.textContent=' (min)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*60).toFixed();}
                else if (val===' руб.'){elem.textContent=' $';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/62).toFixed(2);}
                else if (val===' $'){elem.textContent=' €';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*0.9).toFixed(2);}
                else if (val===' €'){elem.textContent=' руб.';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*(62/0.9)).toFixed(2);}
                else if (val===' (mile)'){elem.textContent=' (m)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (m)'){elem.textContent=' (mile)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                else if (val===' (l)'){elem.textContent=' (ml)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (ml)'){elem.textContent=' (l)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                else if (val===' (kg)'){elem.textContent=' (gr)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)*1000).toFixed();}
                else if (val===' (gr)'){elem.textContent=' (kg)';par.getElementsByClassName('value')[0].innerHTML=((par.getElementsByClassName('value')[0].innerHTML)/1000).toFixed(2);}
                
                else{console.log('ERROR <?php echo $day; ?>')}
            }
        </script>
        <?php
            }
            ?>
        </div>
    </body>
</html>