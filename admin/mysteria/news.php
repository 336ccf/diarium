<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_my", "DiariumCC366", "u0703038_mysteria");
if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}
echo "Connected GOOD <br>";

if (!mysqli_set_charset($conn, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($conn));
    exit();
} else {
    printf("Текущий набор символов: %s\n", mysqli_character_set_name($conn));
}

$ruti=$_POST['rutitle'];
$rupn=$_POST['rupostnews'];
$enti=$_POST['entitle'];
$enpn=$_POST['enpostnews'];
$rank = $_SESSION['admin'];

$name=$_FILES["docs"]["name"];
$dir="files/";
move_uploaded_file($_FILES["docs"]["tmp_name"],"$dir".$_FILES["docs"]["name"]);
echo $_FILES["docs"]["error"];

$sql = "INSERT INTO news (ruti,enti,rupn,enpn,date,rank,file) VALUES ('$ruti','$enti','$rupn','$enpn',NOW(),'$rank','$name')";

echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "Created sucessfully";
      ?>
<script>location.href='https://diarium.info/admin/mysteria/';</script>
      <?php
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

?>