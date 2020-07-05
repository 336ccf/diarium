<?php
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_dayler");
if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}
echo "Connected GOOD <br>";

$day=$_SESSION['day'];
$wu=$_POST['wateruse'];
$hf=$_POST['hf'];
$pss=$_POST['pss'];
$pp=$_POST['pp'];
$ejc=$_POST['ejc'];
$art=$_POST['art'];
$weight=$_POST['weight'];
$dia=$_POST['dia'];
$sys=$_POST['sys'];
$pulse=$_POST['pulse'];
$coffee=$_POST['coffee'];
$tea=$_POST['tea'];
$water=$_POST['water'];
$ol=$_POST['otherliquid'];
$alcho=$_POST['alchohol'];
$milk=$_POST['milk'];

$sql = "UPDATE otherstat SET date=NOW(), wu='$wu',hf='$hf',pss='$pss',pp='$pp',ejc='$ejc',art='$art',weight='$weight',dia='$dia',sys='$sys',pulse='$pulse',coffee='$coffee',tea='$tea',water='$water',alcho='$alcho',milk='$milk',ol='$ol' WHERE id=$day";

echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "UPDATED sucessfully";
      ?>
<script>history.back();</script>
      <?php
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
      ?>
<script>setTimeout(() => history.back(), 1000);</script>
      <?php
}

?>