<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_search", "KO8nK123udCo336Cud", "u0703038_search");
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
    <title>Mysteria admin</title>
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

    .create{width: 100%; height: auto; background-color: rgba(0, 0, 0, 0.033); display: flex; justify-content: space-around; align-items: center; }
    .addsite,.setnew,.setnews{width: 80vw; height: auto; background-color: rgba(0, 0, 0, 0.033); display: flex; flex-direction: column;margin-bottom: 10vmin;}

    .addsite>form>input{width: 100%; height: 5vmin; text-indent: 1.5vw; margin-top: 2vmin; margin-bottom: 2vmin;}
    .addsite>form>textarea{resize: vertical; width: 100%; height: 25vmin; text-indent: 1.5vw;}
    #list{list-style: none; width: 100%; height: auto; display: flex; justify-content: space-around; align-items: center; }

    .setnew>form{display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; background-color: rgba(0, 0, 0, 0.033);}
    .setnew>form>input{width: 10vw; font-size: 1vmax;background-color: transparent; outline: none; border: 0.1vmax solid rgba(0, 0, 0, 0.9); margin-bottom: 1vmin;}
    #identification{background-color: transparent; outline: none; border: none; font-weight: 1000; text-align: center;}
    .setnew>form>input[type="file"]{width: 20vw;border: none;}
    .setnew>form>input[type="submit"]{width: 50vw;}
    .setnew>form>input[type="submit"]:hover{background-color: rgba(0, 0, 0, 0.033);width: 60vw;}

    .setnews>form{display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; background-color: rgba(0, 0, 0, 0.033);}
    .setnews>form>input{width: 100%; text-indent: 2vw;}
    .setnews>form>textarea{width: 100%; margin-bottom: 5vmin; text-indent: 2vw;}

    #delete{color:red;background-color:transparent; cursor:not-allowed;}
    #update{color:black;background-color:rgba(0,0,0,0.3)}#update:hover{background-color:rgba(0,0,0,0.5)}
    </style>
    <body>
        <div class="title">
            Panel for redacting MYSTERIA.SPACE
        </div>
        <div class="backlink">
            <a href="../">Back to admin panel HOME page</a>
        </div>
        <div class="checkdata">
            <a href="http://mysteria.space/">Go to MYSTERIA PAGE</a>
        </div>
        <div class="create">
            <div class="addsite">
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" id="name" required placeholder="Name">
                    <input type="file" id="files" name="files" required/>
                    <ul id="list"></ul>
                    <input type="url" name="link" id="link" required placeholder="Link">
                    <input type="text" name="version" id="version" required placeholder="Version">
                    <input type="email" name="mail" id="mail" required placeholder="E-mail">
                    <textarea name="rutext" id="rutext" cols="30" rows="10" required placeholder="RU"></textarea>
                    <textarea name="entext" id="entext" cols="30" rows="10" required placeholder="EN"></textarea>
                    <input type="date" name="date" id="date" required placeholder="date">
                    <input type="submit" value="Add_">
                </form>
                <script>
                function showFile(e) {
    var files = e.target.files;
    for (var i = 0, f; f = files[i]; i++) {
      if (!f.type.match('image.*')) continue;
      var fr = new FileReader();
      fr.onload = (function(theFile) {
        return function(e) {
          var li = document.createElement('li');
          li.innerHTML = "<img src='" + e.target.result + "' />";
          document.getElementById('list').insertBefore(li, null);
        };
      })(f);
 
      fr.readAsDataURL(f);
    }
  }
 
  document.getElementById('files').addEventListener('change', showFile, false);


                </script>
                <div class="setnews">
                    <form action="news.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="rutitle" id="rutitle" required placeholder="Заголовок">
                        <textarea name="rupostnews" id="rupostnews" cols="30" rows="10" required placeholder="Текст"></textarea>

                        <input type="text" name="entitle" id="entitle" required placeholder="Title">
                        <textarea name="enpostnews" id="enpostnews" cols="30" rows="10" required placeholder="Text"></textarea>

                        <input type="file" name="docs" id="docs">

                        <input type="submit" value="POST">

                    </form>
                </div>
                <div class="setnew">
                    <?php
                    $conn = new mysqli("31.31.196.251", "u0703038_search", "KO8nK123udCo336Cud", "u0703038_search");
                    if (!$conn) { die("Conn ection ERROR: " . mysqli_connect_error()); }
                    echo "Connected GOOD <br>";
                    if (!mysqli_set_charset($conn, "utf8")) {    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($conn));    exit();     } else {    printf("Текущий набор символов: %s\n", mysqli_character_set_name($conn));    }
                    if ($result = mysqli_query($conn, "SELECT * FROM `list`")){
                        while($row = mysqli_fetch_array($result)){
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="text" name="identification" id="identification" readonly value="<?php echo $row['id']; ?>">
                                <input type="text" name="rename" id="rename" placeholder="Name" value="<?php echo $row['name']; ?>">
                                <input type="url" name="relink" id="renlink" placeholder="Link" value="<?php echo $row['link']; ?>">
                                <input type="text" name="reversion" id="reversion" placeholder="Version" value="<?php echo $row['ver']; ?>">
                                <input type="email" name="remail" id="remail" placeholder="E-mail" value="<?php echo $row['mail']; ?>">
                                <input type="text" name="reruxt" id="reruxt" placeholder="RU" value="<?php echo $row['ruxt']; ?>">
                                <input type="text" name="reenxt" id="reenxt" placeholder="EN" value="<?php echo $row['enxt']; ?>">
                                <input type="date" name="redate" id="redate" value="<?php echo $row['date']; ?>">
                                <input type="submit" name="updater" value="UPDATE" id="update">
                                <input type="submit" name="deleter" value="DELETE" id="delete">
                            </form>
                            <?php
                        }
                    }
                if (isset($_POST['updater'])){

                    $ident=$_POST['identification'];
                    $name=$_POST['rename'];
                    $link=$_POST['relink'];
                    $version=$_POST['reversion'];
                    $mail=$_POST['remail'];
                    $rutext=$_POST['rerutext'];
                    $entext=$_POST['reentext'];
                    $date=$_POST['redate'];

                    $sql = "UPDATE `list` SET `name`='$name',`link`='$link',`ver`='$version',`mail`='$mail',`ruxt`='$rutex',`enxt`='$entext',`date`='$date' WHERE id='$ident'";

                    if (mysqli_query($conn, $sql)) {
                          echo "UPDATED sucessfully";
                    } else {
                          echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            if (isset($_POST['deleter'])){

                    $ident=$_POST['identification'];

                    $sql = "DELETE FROM `list` WHERE id='$ident'";

                    if (mysqli_query($conn, $sql)) {
                          echo "DELETED sucessfully";
                    } else {
                          echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
                ?>
            </div>

            </div>
        </div>
    </body>
</html>
<?php
}
?>