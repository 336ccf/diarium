<?php 
ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_data", "8^#JOLYqWhRO", "u0703038_database"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
$dayt=$_SESSION['day'];
if ($_SESSION['admin']=='admin'){
    echo $_SESSION['admin'];
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

    .create{width: 100%; height: auto; background-color: rgba(0, 0, 0, 0.033); display: flex; justify-content: space-around; align-items: center; flex-direction: column;}
    .addsite{width: 80vmin; height: auto; background-color: rgba(0, 0, 0, 0.033); display: flex; flex-direction: column;margin-bottom: 10vmin;}

    .addsite>form>input{width: 100%; height: 5vmin; text-indent: 1.5vw; margin-top: 2vmin; margin-bottom: 2vmin;}
    .addsite>form>textarea{resize: vertical; width: 100%; height: 25vmin; text-indent: 1.5vw;}
    #list{list-style: none; height: auto; display: flex; justify-content: space-around; align-items: center; }
    #list>img{width:80vmin;}

    .setrelate>form>input{width: 100%; height: 5vmin; text-indent: 1.5vw; margin-top: 2vmin; margin-bottom: 2vmin;}
    .setrelate>form>textarea{resize: vertical; width: 100%; height: 25vmin; text-indent: 1.5vw;}

    .editdata{width: 80vw; background-color: rgba(0, 0, 0, 0.033);}
    .editdata>form{margin-bottom: 2.5vmin;}

    #delete{color:red;background-color:transparent; cursor:not-allowed;}
    #update{color:black;border: 0.1vmin solid black;}#update:hover{ padding-left: 1vw; padding-right: 1vw;cursor:pointer}
    #page{color:green;border: 0.1vmin solid black;}#page:hover{ padding-left: 1vw; padding-right: 1vw;cursor:pointer}

    #identification,.reicontype{width: 3vw; background-color: transparent; border: none; outline: none;}
    #rename,#retype{width: 10vw; background-color: transparent;}
    #redescription{width: 100%; background-color: transparent;}
    #rephone,#remail,#renlink{width: 33%; background-color: transparent;}

    </style>
    <body>
        <div class="title">
            Panel for redacting DATA BASE
        </div>
        <div class="backlink">
            <a href="../">Back to admin panel HOME page</a>
        </div>
        <div class="checkdata">
            <a href="http://mysteria.space/">Go to DATALIST PAGE</a>
        </div>
        <div class="create">
            <div class="addsite">
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" id="name" required placeholder="Name">
                    <input type="text" name="type" id="type" required placeholder="Type">
                    
                    <select name="icontype" id="icontype">
                        <option value="1">agency</option>
                        <option value="2">art</option>
                        <option value="3">bank</option>
                        <option value="4">base</option>
                        <option value="5">communication</option>
                        <option value="6">company</option>
                        <option value="7">education factory</option>
                        <option value="8">factory</option>
                        <option value="9">government</option>
                        <option value="10">personallity</option>
                        <option value="11">production</option>
                        <option value="12">sport</option>
                        <option value="13">www</option>
                    </select>
                    <input type="text" name="description" id="description" required placeholder="Description">

                    <input type="tel" name="phone" id="phone" required placeholder="Phone">
                    <input type="email" name="email" id="email" required placeholder="E-mail">
                    <input type="url" name="link" id="link" required placeholder="Link">
                    
                    <input type="text" name="location" id="location" required placeholder="Location">
                    
                    <input type="file" id="files" name="files" required/>
                    <ul id="list"></ul>

                    <input type="submit" value="Add" name="adddata">
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
                            };})(f); fr.readAsDataURL(f); }}document.getElementById('files').addEventListener('change', showFile, false);
                    </script>
                <div class="setrelate">
                    <legend>Relate</legend>
                    <form action="relate.php" method="post" enctype="multipart/form-data">
                        <input type="number" name="idto" id="idto" required placeholder="ID to">
                        <textarea name="relto" id="relto" cols="30" rows="10" required placeholder="Relate to"></textarea>

                        <input type="number" name="idfrom" id="idfrom" required placeholder="ID from">
                        <textarea name="relfrom" id="relfrom" cols="30" rows="10" required placeholder="Relate from"></textarea>

                        <input type="submit" value="Add" name="setrelate">
                    </form>
                </div>
            </div>
            <div class="editdata">
                <legend>Edit</legend>
                <?php
                    if ($result = mysqli_query($conn, "SELECT * FROM `data`")){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="number" name="identification" id="identification" readonly value="<?php echo $row['id']; ?>">
                    <input type="text" name="rename" id="rename" placeholder="Name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="retype" id="retype" required value="<?php echo $row['type']; ?>">
                    <input type="text" name="reicontype" id="reicontype<?php echo $row['id']; ?>" class="reicontype" value="<?php echo $row['icontype']; ?>">
                    <span id="icontype<?php echo $row['id']; ?>"></span>
                    <input type="text" name="redescription" id="redescription" required value="<?php echo $row['description']; ?>">

                    <input type="tel" name="rephone" id="rephone" placeholder="Version" value="<?php echo $row['phone']; ?>">
                    <input type="email" name="remail" id="remail" placeholder="E-mail" value="<?php echo $row['email']; ?>">
                    <input type="url" name="relink" id="renlink" placeholder="Link" value="<?php echo $row['link']; ?>">

                    <input type="submit" name="updater" value="UPDATE" id="update">
                    <input type="submit" name="deleter" value="DELETE" id="delete">
                    <input type="submit" name="pager" value="OPEN" id="page">

                    <p id="relates<?php echo $row['id']; ?>">
                    <?php
                    $id=$row['id'];
                    if ($resul = mysqli_query($conn, "SELECT * FROM `connected` WHERE `idto`='$id'")){
                        while($ro = mysqli_fetch_array($resul)){
                            $idfrom=$ro['idfrom'];
                            echo '<input type="submit" value="'.$idfrom.'" name="openrelate">';
                        }
                    }
                    ?>
                    </p>
                </form>
                <script>
                if(reicontype<?php echo $row['id']; ?>.value==1){icontype<?php echo $row['id']; ?>.innerHTML='agency'}
                else if(reicontype<?php echo $row['id']; ?>.value==2){icontype<?php echo $row['id']; ?>.innerHTML='art'}
                else if(reicontype<?php echo $row['id']; ?>.value==3){icontype<?php echo $row['id']; ?>.innerHTML='bank'}
                else if(reicontype<?php echo $row['id']; ?>.value==4){icontype<?php echo $row['id']; ?>.innerHTML='base'}
                else if(reicontype<?php echo $row['id']; ?>.value==5){icontype<?php echo $row['id']; ?>.innerHTML='communication'}
                else if(reicontype<?php echo $row['id']; ?>.value==6){icontype<?php echo $row['id']; ?>.innerHTML='company'}
                else if(reicontype<?php echo $row['id']; ?>.value==7){icontype<?php echo $row['id']; ?>.innerHTML='education'}
                else if(reicontype<?php echo $row['id']; ?>.value==8){icontype<?php echo $row['id']; ?>.innerHTML='factory'}
                else if(reicontype<?php echo $row['id']; ?>.value==9){icontype<?php echo $row['id']; ?>.innerHTML='government'}
                else if(reicontype<?php echo $row['id']; ?>.value==10){icontype<?php echo $row['id']; ?>.innerHTML='personallity'}
                else if(reicontype<?php echo $row['id']; ?>.value==11){icontype<?php echo $row['id']; ?>.innerHTML='production'}
                else if(reicontype<?php echo $row['id']; ?>.value==12){icontype<?php echo $row['id']; ?>.innerHTML='sport'}
                else if(reicontype<?php echo $row['id']; ?>.value==14){icontype<?php echo $row['id']; ?>.innerHTML='www'}
                </script>
                        <?php }} 
                        if (isset($_POST['updater'])){

                            $ident=$_POST['identification'];
                            $name=$_POST['name'];
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

                            $sql = "UPDATE `data` SET `name`='$name',`type`='$type',`description`='$desc',`icontype`='$icontype', `email`='$email', `phone`='$phone', `link`='$link', `location`='$location' WHERE id='$ident'";
        
                            if (mysqli_query($conn, $sql)) {
                                  echo "UPDATED sucessfully";
                            } else {
                                  echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                        if (isset($_POST['deleter'])){
        
                            $ident=$_POST['identification'];
        
                            $swr = "DELETE FROM `data` WHERE `id`='$ident'";
        
                            if (mysqli_query($conn, $swr)) {
                                  echo "DELETED sucessfully";
                            } else {
                                  echo "ERROR: " . $swr . "<br>" . mysqli_error($conn);
                        }
                    }
                        ?>

            </div>
        </div>
    </body>
</html>
<?php
} else { ?> <script>location.href='https://diarium.info/admin/';</script> <?php }
?>