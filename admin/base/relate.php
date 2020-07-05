<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_data", "8^#JOLYqWhRO", "u0703038_database"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}

$idto=$_POST['idto'];
$idfrom=$_POST['idfrom'];
$relto=$_POST['relto'];
$relfrom=$_POST['relfrom'];

$sql1 = "INSERT INTO connected (idto,idfrom,rel) VALUES ('$idto','$idfrom','$relfrom')";
$sql2 = "INSERT INTO connected (idto,idfrom,rel) VALUES ('$idfrom','$idto','$relto')";
echo '<br>';
if (mysqli_query($conn, $sql1)) {
      echo "Created sucessfully";
      if (mysqli_query($conn, $sql2)) {
        echo "Created sucessfully";
        ?>
        <script>location.href='https://diarium.info/admin/base/';</script>
                <?php
        } else {
                echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
echo '<br>';


?>