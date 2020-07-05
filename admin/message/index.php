<?php ini_set(‘session.gc_maxlifetime’, 2592000);
ini_set(‘session.cookie_lifetime’, 2592000);
session_start(); 
$conn = new mysqli("31.31.196.251", "u0703038_users", "U738S62ers", "u0703038_message"); if (!$conn) {die("Connection ERROR: " . mysqli_connect_error());}  if (!mysqli_set_charset($conn, "utf8")) {exit();} else {}
$dayt=$_SESSION['day'];
if ($_SESSION['admin']=='admin'){
    echo $_SESSION['admin'];
?>
<html>
    <title>Admin - MESSAGES</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="suicvairduCConstantinius">
    </head>
    <style>
    *{ color: rgba(0, 0, 0, 1); margin: 0; padding: 0; -webkit-appearance: none; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 1.7vmax;}
    body{display: flex; justify-content: space-around; align-items:center; flex-wrap: wrap; flex-direction: column;}.f1x{display: flex; justify-content: space-around; align-items: center;}
    .hidden{display: none;}

    .lines{width: 100vmin; height: auto; background-color: rgba(0, 0, 0, 0.033);}
    .lines>form{width: 100%; height: 10vmin; border-radius: 0.3vmin; background-color: rgba(0, 0, 0, 0.033); display: flex; align-items: center ; justify-content: space-around;}
    .lines>form>input[type="number"]{width: 5vmax; height: auto; background-color: transparent; border: none; outline: none; cursor: default;}
    .lines>form>input[type="submit"]{width: 20vmin; border: 0.1vmin solid black;}
    .lines>form>input[type="submit"]:hover, .lines>form>input[type="submit"]:focus{width: 20vmin; border: 0.1vmax solid red; cursor: pointer;}

    </style>
    <body>
        <a href="../">Back to MAIN admin page</a>
        <div class="lines">
            <?php
                if ($result = mysqli_query($conn, "SELECT * FROM `users`")){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                            <form action="" method="post">
                                <input type="number" name="chatid" id="chatid" value="<?php echo $row['id']; ?>" readonly>
                                <span class="name"><?php echo $row['name']; ?></span>
                                <span class="time"><?php echo $row['date']; ?></span>
                                <input type="submit" value="WRITE" name="correspondence" style="background-color: rgba(0, 255, 0, 0.3);">
                                <input type="submit" value="DELETE" name="delete" style="background-color: rgba(255, 0, 0, 0.3);">
                            </form>
                        <?php
                    }
                }
            if(isset($_POST['correspondence'])){
                $_SESSION['talkid']=$_POST['chatid'];
                ?>
                    <script>location.href='talk/';</script>
                <?php
            }
            if(isset($_POST['delete'])){
                
            }
            ?>
            
        </div>
        <script>
        
        </script>
    </body>
    </html>
    <?php
    } else { ?> <script>location.href='https://diarium.info/admin/';</script> <?php }
    ?>