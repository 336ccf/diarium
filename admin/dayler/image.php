<?php
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_dayler");
if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}
echo "Connected GOOD <br>";

$day=$_SESSION['day'];

$path='/i';

$name=$_FILES["image"]["name"];
$dir="webdoc/image/";
move_uploaded_file($_FILES["image"]["tmp_name"],"$dir".$_FILES["image"]["name"]);

echo $_FILES[' image ']['error'];

$type=$_POST['type'];

$kcal=$_POST['kcal'];
$ch=$_POST['carbohydrates'];
$pro=$_POST['protein'];
$fat=$_POST['fats'];

$sql = "INSERT INTO image (day,date,dir,name,type,kcal,carbohydrate,protein,fat) VALUES ('$day',NOW(),'$dir','$name','$type',$kcal,$ch,$pro,$fat)";

echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "Created sucessfully";
      ?>
<script>location.href='https://diarium.info/admin/dayler/';</script>
      <?php
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

?>