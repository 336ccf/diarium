
<?php
if(isset($_POST['submit'])){
   $pass = $_POST['pass'];
   $file = file_get_contents('password.txt', true);
   if($pass == $file){
       header("Location: page.html");
       echo "Life is going";
   }
   else echo 'Пароль не верный';
}
?>