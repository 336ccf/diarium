<?php session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_dayler");
if (!$conn) { die("Connection ERROR: " . mysqli_connect_error()); }
$dayt=$_SESSION['day'];
if (empty($_SESSION['secret']) or empty($_SESSION['admin'])){
?>
<script>location.href='../'</script>
<?php
}
else{
?>
<html>
    <title>Dayler admin</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius">
        <meta name="format-detection" content="telephone=no">
    </head>
    <style>
    *{margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.4vmax;}
    .f1x{display: flex; justify-content: space-around; align-items: center;}.fdc{flex-direction: column;}.fdrc{flex-direction: column-reverse;}
    .hidden{display: none;}

    .title{width:100%;height: auto; text-align: center; margin-top: 10vmin;}
    .backlink{width:100%;height: auto; text-align: left;}
    .checkdata{width:100%;height: auto; text-align: right;}
    
    .add{width: 100%; height: auto; background-color: rgba(0, 0, 0, 0.033);}
    .add>div{width: 80%; height: auto; background-color: rgba(0, 0, 0, 0.033); box-shadow: 0 0 0.250vmin 0.125vmin rgba(0, 0, 0, 0.033) inset; margin-top: 5vmin;}
    
    textarea{max-width:80vw;min-width:10vw;max-height:60vh;min-height:10vh;background-color:transparent}

    div>form>input{width: 100%; border: none; background-color: rgba(255, 255, 255, 1); margin-bottom: 1vmin;}
    div>form>input:hover{background-color: rgba(255, 255, 255, 0.77);}
    div>form>input:focus{background-color: rgba(0, 0, 0, 0.033);}
    legend{text-align: center;}
    input[type="submit"]{background-color: rgba(255, 0, 0, 0.17);}
    input[type="submit"]:hover{background-color: rgba(255, 0, 0, 0.34); box-shadow: 0 0 0.25vmin 0.125vmin rgba(0, 0, 0, 0.3) inset; cursor: pointer;}


    .sessiondata{margin-bottom: 10vmin;}
    #exit{margin-top: 5vmin;}
    </style>
    <body>
        <div class="title">
            Panel for redacting DAYLER page
        </div>
        <div class="backlink">
            <a href="../">Back to admin panel HOME page</a>
        </div>
        <div class="checkdata">
            <a href="../../dayler">Go to DAYLER page</a>
        </div>
        <div class="add f1x fdc">
<!-- add stats  -->
            <div class="statistic">
            <?php 
            if ($result = mysqli_query($conn, "SELECT * FROM stat WHERE day='$dayt' LIMIT 1 ")){
            $array = mysqli_fetch_array($result);
            $row = mysqli_num_rows($result);
            ?>
                <legend>ADD main stats</legend>
                <form action="mainstat.php" method="POST">
                    <label for="wakeup">Wake up time</label>
                    <input type="time" name="wakeup" id="wakeup" value="<?php if($row>0){echo $array['up'];} else{} ?>">
                    <br>
                    <label for="wakedown">Wake down time</label>
                    <input type="time" name="wakedown" id="wakedown" value="<?php if($row>0){echo $array['down'];} else{} ?>">
                    <br>
                    <label for="spend">Spend money</label>
                    <input type="number" name="spend" id="spend" value="<?php if($row>0){echo $array['minus'];} else{} ?>">
                    <label for="moneysrur">RUR</label><input type="radio" name="currencys" value="1" id="moneysrur" checked>
                    <label for="moneyseur">EUR</label><input type="radio" name="currencys" value="<?php echo $_SESSION['eur']; ?>" id="moneyseur">
                    <label for="moneysusd">USD</label><input type="radio" name="currencys" value="<?php echo $_SESSION['usd']; ?>" id="moneysusd">
                    <br>
                    <label for="earn">Earn money</label>
                    <input type="number" name="earn" id="earn" value="<?php if($row>0){echo $array['plus'];} else{} ?>">
                    <label for="moneyerur">RUR</label><input type="radio" name="currencye" value="1" id="moneyerur" checked>
                    <label for="moneyeeur">EUR</label><input type="radio" name="currencye" value="<?php echo $_SESSION['eur']; ?>" id="moneyeeur">
                    <label for="moneyeusd">USD</label><input type="radio" name="currencye" value="<?php echo $_SESSION['usd']; ?>" id="moneyeusd">
                    <br>
                    <legend>Programming</legend>
                    <input type="time" name="progtime" id="progtime" placeholder="time" value="<?php if($row>0){echo $array['progtime'];} else{} ?>">
                    <input type="number" name="progtarget" id="progtarget" placeholder="target" value="<?php if($row>0){echo $array['progtarget'];} else{} ?>">
                    <input type="number" name="progtask" id="progtask" placeholder="task" value="<?php if($row>0){echo $array['progtask'];} else{} ?>">
                    <legend>Marketing</legend>
                    <input type="time" name="marktime" id="marktime" placeholder="time" value="<?php if($row>0){echo $array['marktime'];} else{} ?>">
                    <input type="number" name="marktarget" id="marktarget" placeholder="target" value="<?php if($row>0){echo $array['marktarget'];} else{} ?>">
                    <input type="number" name="marktask" id="marktask" placeholder="task" value="<?php if($row>0){echo $array['marktask'];} else{} ?>">
                    <legend>Management</legend>
                    <input type="time" name="manatime" id="manatime" placeholder="time" value="<?php if($row>0){echo $array['manatime'];} else{} ?>">
                    <input type="number" name="manatarget" id="manatarget" placeholder="target" value="<?php if($row>0){echo $array['manatarget'];} else{} ?>">
                    <input type="number" name="manatask" id="manatask" placeholder="task" value="<?php if($row>0){echo $array['manatask'];} else{} ?>">
                    <legend>Design</legend>
                    <input type="time" name="desitime" id="desitime" placeholder="time" value="<?php if($row>0){echo $array['desitime'];} else{} ?>">
                    <input type="number" name="desitarget" id="desitarget" placeholder="target" value="<?php if($row>0){echo $array['desitarget'];} else{} ?>">
                    <input type="number" name="desitask" id="desitask" placeholder="task" value="<?php if($row>0){echo $array['desitask'];} else{} ?>">
                    <legend>Structuring</legend>
                    <input type="time" name="strutime" id="strutime" placeholder="time" value="<?php if($row>0){echo $array['strutime'];} else{} ?>">
                    <input type="number" name="strutarget" id="strutarget" placeholder="target" value="<?php if($row>0){echo $array['strutarget'];} else{} ?>">
                    <input type="number" name="strutask" id="strutask" placeholder="task" value="<?php if($row>0){echo $array['strutask'];} else{} ?>">
                    <legend>Education</legend>
                    <input type="time" name="eductime" id="eductime" placeholder="time" value="<?php if($row>0){echo $array['eductime'];} else{} ?>">
                    <input type="number" name="eductarget" id="eductarget" placeholder="target" value="<?php if($row>0){echo $array['eductarget'];} else{} ?>">
                    <input type="number" name="eductask" id="eductask" placeholder="task" value="<?php if($row>0){echo $array['eductask'];} else{} ?>">
                    <legend>Rest</legend>
                    <input type="time" name="resttime" id="resttime" placeholder="time" value="<?php if($row>0){echo $array['resttime'];} else{} ?>">
                    <input type="number" name="resttarget" id="resttarget" placeholder="target" value="<?php if($row>0){echo $array['resttarget'];} else{} ?>">
                    <input type="number" name="resttask" id="resttask" placeholder="task" value="<?php if($row>0){echo $array['resttask'];} else{} ?>">
                    <br>
                    <input type="number" name="run" id="run" placeholder="Running (m)" value="<?php if($row>0){echo $array['run'];} else{} ?>">
                    <input type="number" name="walk" id="walk" placeholder="Walking (m)" value="<?php if($row>0){echo $array['walk'];} else{} ?>">
                    <br>
                    <input type="submit" name="mainstat"  value="Send">
                </form>
                <?php } 
                else { ?>
    <legend>ADD main stats</legend>
                <form action="mainstat.php" method="POST">
                    <label for="wakeup">Wake up time</label>
                    <input type="time" name="wakeup" id="wakeup">
                    <br>
                    <label for="wakedown">Wake down time</label>
                    <input type="time" name="wakedown" id="wakedown">
                    <br>
                    <label for="spend">Spend money</label>
                    <input type="number" name="spend" id="spend">
                    <label for="moneysrur">RUR</label><input type="radio" name="currencys" value="1" id="moneysrur" checked>
                    <label for="moneyseur">EUR</label><input type="radio" name="currencys" value="<?php echo $_SESSION['eur']; ?>" id="moneyseur">
                    <label for="moneysusd">USD</label><input type="radio" name="currencys" value="<?php echo $_SESSION['usd']; ?>" id="moneysusd">
                    <br>
                    <label for="earn">Earn money</label>
                    <input type="number" name="earn" id="earn">
                    <label for="moneyerur">RUR</label><input type="radio" name="currencye" value="1" id="moneyerur" checked>
                    <label for="moneyeeur">EUR</label><input type="radio" name="currencye" value="<?php echo $_SESSION['eur']; ?>" id="moneyeeur">
                    <label for="moneyeusd">USD</label><input type="radio" name="currencye" value="<?php echo $_SESSION['usd']; ?>" id="moneyeusd">
                    <br>
                    <legend>Programming</legend>
                    <input type="time" name="progtime" id="progtime" placeholder="time">
                    <input type="number" name="progtarget" id="progtarget" placeholder="target">
                    <input type="number" name="progtask" id="progtask" placeholder="task">
                    <legend>Marketing</legend>
                    <input type="time" name="marktime" id="marktime" placeholder="time">
                    <input type="number" name="marktarget" id="marktarget" placeholder="target">
                    <input type="number" name="marktask" id="marktask" placeholder="task" >
                    <legend>Management</legend>
                    <input type="time" name="manatime" id="manatime" placeholder="time">
                    <input type="number" name="manatarget" id="manatarget" placeholder="target">
                    <input type="number" name="manatask" id="manatask" placeholder="task">
                    <legend>Design</legend>
                    <input type="time" name="desitime" id="desitime" placeholder="time">
                    <input type="number" name="desitarget" id="desitarget" placeholder="target">
                    <input type="number" name="desitask" id="desitask" placeholder="task">
                    <legend>Structuring</legend>
                    <input type="time" name="strutime" id="strutime" placeholder="time">
                    <input type="number" name="strutarget" id="strutarget" placeholder="target">
                    <input type="number" name="strutask" id="strutask" placeholder="task">
                    <legend>Education</legend>
                    <input type="time" name="eductime" id="eductime" placeholder="time">
                    <input type="number" name="eductarget" id="eductarget" placeholder="target">
                    <input type="number" name="eductask" id="eductask" placeholder="task">
                    <legend>Rest</legend>
                    <input type="time" name="resttime" id="resttime" placeholder="time">
                    <input type="number" name="resttarget" id="resttarget" placeholder="target">
                    <input type="number" name="resttask" id="resttask" placeholder="task">
                    <br>
                    <input type="number" name="run" id="run" placeholder="Running (m)">
                    <input type="number" name="walk" id="walk" placeholder="Walking (m)">
                    <br>
                    <input type="submit" name="mainstat"  value="Send">
                </form>
                <?php } ?>
            </div>
<!-- add stats  -->
            <div class="otherstatistic">
            <?php 
            if ($result = mysqli_query($conn, "SELECT * FROM otherstat WHERE day='$dayt' LIMIT 1 ")){
            $array = mysqli_fetch_array($result);
            $row = mysqli_num_rows($result);
            ?>
                <legend>ADD other stats</legend>
                <form action="otherstat.php" method="POST">
                <legend>Water use</legend>
                    <input type="number" name="wateruse" id="wateruse" value="<?php if($row>0){echo $array['wu'];} else{} ?>">
                    <br>
                    <legend>Hands and face wash</legend>
                    <input type="number" name="hf" id="hf" value="<?php if($row>0){echo $array['hf'];} else{} ?>">
                    <legend>Pee</legend>
                    <input type="number" name="pss" id="pss" value="<?php if($row>0){echo $array['pss'];} else{} ?>">
                    <legend>Poop</legend>
                    <input type="number" name="pp" id="pp"  value="<?php if($row>0){echo $array['pp'];} else{} ?>">
                    <legend>Ejclt</legend>
                    <input type="number" name="ejc" id="ejc" value="<?php if($row>0){echo $array['ejc'];} else{} ?>">
                    <br>
                    <legend>Art</legend>
                    <input type="number" name="art" id="art" value="<?php if($row>0){echo $array['art'];} else{} ?>">
                    <br>
                    <legend>Weight</legend>
                    <input type="number" name="weight" id="weight" value="<?php if($row>0){echo $array['weight'];} else{} ?>">
                    <br>
                    <legend>DSP</legend>
                    <input type="number" name="dia" id="dia" value="<?php if($row>0){echo $array['dia'];} else{} ?>">
                    <input type="number" name="sys" id="sys" value="<?php if($row>0){echo $array['sys'];} else{} ?>">
                    <input type="number" name="pulse" id="pulse" value="<?php if($row>0){echo $array['pulse'];} else{} ?>">
                    <br>
                    <legend>Coffee # Tea</legend>
                    <input type="number" name="coffee" id="coffee" value="<?php if($row>0){echo $array['coffee'];} else{} ?>">
                    <input type="number" name="tea" id="tea" value="<?php if($row>0){echo $array['tea'];} else{} ?>">
                    <br>
                    <legend>Water # Liquid</legend>
                    <input type="number" name="water" id="water" value="<?php if($row>0){echo $array['water'];} else{} ?>">
                    <input type="number" name="otherliquid" id="otherliquid" value="<?php if($row>0){echo $array['ol'];} else{} ?>">
                    <br>
                    <legend>Alchohol</legend>
                    <input type="number" name="alchohol" id="alchohol" value="<?php if($row>0){echo $array['alcho'];} else{} ?>">
                    <br>
                    <legend>Milk</legend>
                    <input type="number" name="milk" id="milk" value="<?php if($row>0){echo $array['milk'];} else{} ?>">
                    <br>
                    <input type="submit" name="otherstat" value="Send">
                </form>
                <?php } 
                else { ?>
                <form action="otherstat.php" method="POST">
                    <input type="number" name="wateruse" id="wateruse" placeholder="Water using">
                    <br>
                    <input type="number" name="hf" id="hf" placeholder="Hands and face wash">
                    <input type="number" name="pss" id="pss" placeholder="Pee">
                    <input type="number" name="pp" id="pp" placeholder="Poop">
                    <input type="number" name="ejc" id="ejc" placeholder="Ejclt">
                    <br>
                    <input type="number" name="art" id="art" placeholder="Ars">
                    <br>
                    <input type="number" name="weight" id="weight" placeholder="Weight (g)">
                    <br>
                    <input type="number" name="dia" id="dia" placeholder="DIA">
                    <input type="number" name="sys" id="sys" placeholder="SYS">
                    <input type="number" name="pulse" id="pulse" placeholder="Pulse">
                    <br>
                    <input type="number" name="coffee" id="coffee" placeholder="Coffee">
                    <input type="number" name="tea" id="tea" placeholder="Tea">
                    <br>
                    <input type="number" name="water" id="water" placeholder="Water">
                    <input type="number" name="otherliquid" id="otherliquid" placeholder="Liquid">
                    <br>
                    <input type="number" name="alchohol" id="alchohol" placeholder="Alchohol">
                    <br>
                    <input type="number" name="milk" id="milk" placeholder="Milk">
                    <br>
                    <input type="submit" name="otherstat" value="Send">
                </form>
                <?php } ?>
            </div>
<!-- add image  -->
            <div class="image">
            <?php 
            if ($result = mysqli_query($conn, "SELECT * FROM image WHERE day='$dayt' LIMIT 1 ")){
            $array = mysqli_fetch_array($result);
            $row = mysqli_num_rows($result);
            ?>
                <legend>ADD image</legend>
                <form action="image.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" id="image" required>
                    <input type="text" name="type" id="type" placeholder="food type" required  value="<?php if($row>0){echo $array['type'];} else{} ?>">
                    <br>
                    <input type="number" name="kcal" id="kcal" placeholder="kcal" required  value="<?php if($row>0){echo $array['kcal'];} else{} ?>">
                    <input type="number" name="carbohydrates" id="carbohydrates" placeholder="carbohydrates" required  value="<?php if($row>0){echo $array['carbohydrate'];} else{} ?>">
                    <input type="number" name="protein" id="protein" placeholder="protein" required  value="<?php if($row>0){echo $array['protein'];} else{} ?>">
                    <input type="number" name="fats" id="fats" placeholder="fats" required  value="<?php if($row>0){echo $array['fat'];} else{} ?>">
                    <br>
                    <input type="submit" name="imageadd" value="Post"/>
                </form>
                <?php } 
                else { ?>
                <legend>ADD image</legend>
                <form action="image.php" method="POST">
                    <input type="file" name="image" id="image" required>
                    <input type="text" name="type" id="type" placeholder="food type" required>
                    <br>
                    <input type="number" name="kcal" id="kcal" placeholder="kcal" required>
                    <input type="number" name="carbohydrates" id="carbohydrates" placeholder="carbohydrates" required>
                    <input type="number" name="protein" id="protein" placeholder="protein" required>
                    <input type="number" name="fats" id="fats" placeholder="fats" required>
                    <br>
                    <input type="submit" name="imageadd" value="Post">
                </form>
                <?php } ?>
            </div>
            <div class="postdata">
                <legend>POST DATA</legend>
                <form action="text.php" method="POST">
                    <textarea name="rutextdata" id="rutextdata" required placeholder="POST in Russian"></textarea>
                    <br>
                    <textarea name="entextdata" id="entextdata" required placeholder="POST in English"></textarea>
                    <br>
                    <input type="submit" name="textadd" value="Post">
                </form>
            </div>
<!-- SESSION redacting -->
            <div class="sessiondata">
                <legend>SESSION DATA</legend>
                <legend>
                now day    
                <?php
                echo $_SESSION['day'];

                $conn_adm = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_admin");
                if (!$conn_adm) { die("Connection ERROR: " . mysqli_connect_error()); }
                
                ?>
                </legend>
                <form action="" method="post">
                    <label for="nowdate">Day after 2020</label>
                    <input type="number" name="nowdate" id="nowdate" >
                    <input type="submit" name="updatedate" value="set">
                </form>
                <form action="" method="post" id="USD">
                    <label for="usdvalue">USD currency cost</label>
                    <input type="number" step="0.01" name="usdvalue" id="usdvalue" value="<?php if ($res = mysqli_query($conn_adm, "SELECT * FROM currency ")){$curr = mysqli_fetch_array($res); echo $curr['rur']; } ?>">
                    <input type="submit" name="updateusd" value="set">
                </form>
                <form action="" method="post" id="EUR">
                    <label for="eurvalue">EUR currency cost</label>
                    <input type="number" step="0.01" name="eurvalue" id="eurvalue" value="<?php if ($res = mysqli_query($conn_adm, "SELECT * FROM currency ")){$curr = mysqli_fetch_array($res); echo ($curr['rur']/$curr['eur']); } ?>">
                    <input type="submit" name="updateeur" value="set">
                </form>
                <form action="" method="post" id="exit">
                    <input type="submit" name="exit" value="exit">
                </form>
                
                <?php

                

                if (isset($_POST['updatedate'])){
                    $_SESSION['day']=$_POST['nowdate'];
                }
                if (isset($_POST['updateusd'])){
                    
                    $_SESSION['usd']=$_POST['usdvalue'];
                    $usd=$_POST['usdvalue'];
                    $changeusd = "UPDATE currency SET rur='$usd'";
                    if (mysqli_query($conn_adm, $changeusd)) {
                        echo "USD UPDATED";
                    } else {
                        echo "ERROR USD UPDATE: " . mysqli_error($conn_adm);
                    }
                }
                if (isset($_POST['updateeur'])){
                    
                    $_SESSION['eur']=$_POST['eurvalue'];
                    $eur=$_POST['eurvalue'];
                    $usd=$_SESSION['usd'];
                    $changeeur = "UPDATE currency SET eur='($usd/$eur)'";
                    if (mysqli_query($conn_adm, $changeeur)) {
                        echo "EUR UPDATED";
                    } else {
                        echo "ERROR EUR UPDATE: " . mysqli_error($conn_adm);
                    }
                }
                echo '<br>';
                echo 'USD: ';
                echo $_SESSION['usd'];
                echo  '<br> EUR: ';
                echo $_SESSION['eur'];
                ?>
            </div>
            
        </div>
        <script>
            let year = new Date(2020,0,0,0,0);
            let now = new Date();
            nowdate.value=((now-year)/86400000).toFixed();

        </script>
    </body>
</html>
<?php
}
?>