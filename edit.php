<?php
session_start();
setcookie();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
    <label for="">Pseudo :</label>
    <input type="text" name="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>">
    <label for="">Mot de Passe :</label>
    <input type="text" name="password" value="<?php echo $_COOKIE['password']; ?>">
    <input type="submit" name="" value="Valider">
</form>

<?php

$_POST['pseudo'] = $_COOKIE['pseudo'];
$_POST['password'] = $_COOKIE['password'];

?>

</body>
</html>