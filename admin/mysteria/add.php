<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start();
$conn = new mysqli("31.31.196.251", "u0703038_search", "KO8nK123udCo336Cud", "u0703038_search");
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

$naming=$_POST['name'];
$link=$_POST['link'];
$version=$_POST['version'];
$mail=$_POST['mail'];
$rutext=$_POST['rutext'];
$entext=$_POST['entext'];
$date=$_POST['date'];


$name=$_FILES["files"]["name"];
$dir="logo/";
move_uploaded_file($_FILES["files"]["tmp_name"],"$dir".$_FILES["files"]["name"]);
echo $_FILES[' files ']['error'];

$sql = "INSERT INTO list (name,link,logo,ver,mail,ruxt,enxt,date) VALUES ('$naming','$link','$name','$version','$mail','$rutext','$entext','$date')";

echo '<br>';
if (mysqli_query($conn, $sql)) {echo "Created sucessfully"; ?> <script>location.href='https://diarium.info/admin/mysteria/';</script> <?php } else { echo "ERROR: " . $sql . "<br>" . mysqli_error($conn); }

?>