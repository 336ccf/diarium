<?php
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_dayler");
if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}
echo "Connected GOOD <br>";

$day=$_SESSION['day'];
$up=$_POST['wakeup'];
$down=$_POST['wakedown'];
$minus=$_POST['spend'];
$plus=$_POST['earn'];
$progtime=$_POST['progtime'];
$progtarget=$_POST['progtarget'];
$progtask=$_POST['progtask'];
$marktime=$_POST['marktime'];
$marktarget=$_POST['marktarget'];
$marktask=$_POST['marktask'];
$manatime=$_POST['manatime'];
$manatarget=$_POST['manatarget'];
$manatask=$_POST['manatask'];
$desitime=$_POST['desitime'];
$desitarget=$_POST['desitarget'];
$desitask=$_POST['desitask'];
$strutime=$_POST['strutime'];
$strutarget=$_POST['strutarget'];
$strutask=$_POST['strutask'];
$eductime=$_POST['eductime'];
$eductarget=$_POST['eductarget'];
$eductask=$_POST['eductask'];
$resttime=$_POST['resttime'];
$resttarget=$_POST['resttarget'];
$resttask=$_POST['resttask'];
$run=$_POST['run'];
$walk=$_POST['walk'];

$currencys=$_POST['currencys'];
$currencye=$_POST['currencye'];

$partu = explode(':', $up);
$sleephu=$partu[0];
$sleepmu=$partu[1];
$sleepu=($sleephu*60)+($sleepmu*1);

$partd = explode(':', $down);
$sleephd=$partd[0];
$sleepmd=$partd[1];
$sleepd=($sleephd*60)+($sleepmd*1);

if($sleepu>$sleepd){
      $sleep=$sleepu-$sleepd;
}
else{
      $sleep=$sleepu+(1440-$sleepd);
}

$minus=$currencys*$minus;
$plus=$currencye*$plus;
$up=date('H:i:s', strtotime($_POST['wakeup']));
$down=date('H:i:s', strtotime($_POST['wakedown']));
$progtime=date('H:i:s', strtotime($progtime));
$marktime=date('H:i:s', strtotime($marktime));
$manatime=date('H:i:s', strtotime($manatime));
$desitime=date('H:i:s', strtotime($desitime));
$strutime=date('H:i:s', strtotime($strutime));
$eductime=date('H:i:s', strtotime($eductime));
$resttime=date('H:i:s', strtotime($resttime));


$sql = "INSERT INTO stat (day,sleep,date,up,down,plus,minus,progtime,progtarget,progtask,marktime,marktarget,marktask,manatime,manatarget,manatask,desitime,desitarget,desitask,strutime,strutarget,strutask,eductime,eductarget,eductask,resttime,resttarget,resttask,run,walk) VALUES ('$day','$sleep',NOW(),'$up','$down','$plus','$minus','$progtime',$progtarget,$progtask,'$marktime',$marktarget,$marktask,'$manatime',$manatarget,$manatask,'$desitime',$desitarget,$desitask,'$strutime',$strutarget,$strutask,'$eductime',$eductarget,$eductask,'$resttime',$resttarget,$resttask,$run,$walk)";

echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "Created sucessfully";
      ?>
<script>location.href='https://diarium.info/admin/dayler/';</script>
      <?php
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
      ?>
<script>setTimeout(() => history.back(), 1000);</script>
      <?php
}

?>