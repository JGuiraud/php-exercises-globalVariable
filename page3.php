<?php
session_start();
setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, null, null, false, true);
setcookie('password', $_SESSION['password'], time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<p> <?php if(isset($_SESSION['pseudo'])){
echo 'Votre pseudo est : '.$_COOKIE['pseudo'].' et votre mode de passe est : '.$_COOKIE['password'];
    } else {
    echo 'error!';
    }
    ?>
</p>
<a href="edit.php" target="_blank">Edit</a>


</body>
</html>