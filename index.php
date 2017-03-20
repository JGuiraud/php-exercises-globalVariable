<?php
session_start();
setcookie();
$_SESSION["nom"] = "Guiraud";
$_SESSION["prenom"] = "Jérôme";
$_SESSION["age"] = "28";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<h2>Exercice 1</h2>
<p>Faire une page HTML permettant de donner à l'utilisateur :
- son User Agent
- son adresse ip
- le nom du serveur</p>

<?php
echo 'User_agent : '.$_SERVER['HTTP_USER_AGENT'] . "\n\n";
echo '<br>IP address : '.$_SERVER['REMOTE_ADDR'];
echo '<br>Server Name : '.$_SERVER['SERVER_NAME'];
// echo '<br>'.gethostname();

?>
<br>
<hr>
<h2>Exercice 2</h2>
<p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **nom**, **prenom** et **age** grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
<a href="page2.php" target="_blank">Page 2</a>

<br>
<hr>

<h2>Exercice 3, 4 et 5</h2>
<p>Ex 3 : Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
<p>Ex 4 : Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches</p>
<p>Ex 5 : Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

<form method="POST" action="">
    <label for="">Pseudo :</label>
    <input type="text" name="pseudo" placeholder="Pseudo">
    <label for="">Mot de Passe :</label>
    <input type="text" name="password" placeholder="Pseudo">
    <input type="submit" name="" value="Valider">
</form>

<a href="page3.php" target="_blank">Page 3</a><span> (to check and edit if needed)</span>

<?php
    if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])) {
        $_SESSION['pseudo'] = $_POST['pseudo'];
    }
    if(isset($_POST['password']) AND !empty($_POST['password'])) {
        $_SESSION['password'] = $_POST['password'];
    }
?>


</body>
</html>