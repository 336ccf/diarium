<?php
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_data", "8^#JOLYqWhRO", "u0703038_database"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}

$names=$_POST['name'];
$type=$_POST['type'];
$type=trim($type);
$desc=$_POST['description'];
$icontype=$_POST['icontype'];

$phone=$_POST['phone'];

$email=$_POST['email'];
$link=$_POST['link'];
$link=trim($link);
$email=trim($email);

$location=$_POST['location'];

$name=$_FILES["files"]["name"];
$dir="files/";
move_uploaded_file($_FILES["files"]["tmp_name"],"$dir".$_FILES["files"]["name"]);
echo $_FILES['files']['error'];

$sql = "INSERT INTO data (name,type,description,icontype,email,phone,link,location,image,date) VALUES ('$names','$type','$desc','$icontype','$email','$phone','$link','$location','$name',NOW())";
echo '<br>';
if (mysqli_query($conn, $sql)) {
      echo "Created sucessfully";
    ?>
        <script>location.href='https://diarium.info/admin/base/';</script>
    <?php
} else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
?>