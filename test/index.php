<?php
session_start();
#$admin_login="123"; 
$admin_login="qwe"; //Логин админа
$admin_password="321"; //Пароль админа

if(isset($_POST['password'])):
$_SESSION[$_POST['login']]=$_POST['password'];
header("Location: {$_SERVER['PHP_SELF']}");
exit;
endif;
if($_SESSION[$admin_login]!=$admin_password)
{
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
Логин: <input type="text" name="login"><br>
Пароль: <input type="password" name="password"><br>
<input type="submit" value="Войти">
</form>
<?php
exit;
}
else
{
   echo " ID ползователя - " . $admin_login . ".<br>";
   echo "Пароль - " . $admin_password . ".";
}
?>
