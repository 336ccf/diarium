<?php
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_admin", "diariumCc366", "u0703038_dayler");
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

$day=$_SESSION['day'];

$rutextdata=$_POST['rutextdata'];
$entextdata=$_POST['entextdata'];

$sql = "INSERT INTO day (day,date,rutext,entext) VALUES ('$day',NOW(),'$rutextdata','$entextdata')";

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