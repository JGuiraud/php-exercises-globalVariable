<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h2>Exercice 2</h2>
    <p>Je m'appelle
        <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?> et j'ai <?php echo $_SESSION['age']; ?> ans.</p>

</body>
</html>