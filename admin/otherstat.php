<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
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


$sql = "INSERT INTO stat (day,date,wu,hf,pss,pp,ejc,art,weight,dia,sys,pulse,coffee,tea,water,ol,alcho,milk) VALUES ('$day',NOW(),$wu,$hf,$pss,$pp,$ejc,$art,$weight,$dia,$sys,$pulse,$coffee,$tea,$water,$ol,$alcho,$milk)";

echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "Created sucessfully";
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

?>