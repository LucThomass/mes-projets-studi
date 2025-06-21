<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="traitement.php" method="post">
        <label for="user_input">Entrez une valeur :</label>
        <input type="text" id="user_input" name="user_input" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
// On récupère la valeur du champ "user_input" envoyé en POST depuis le formulaire HTML
$user_input = $_POST['user_input'];
// On filtre la valeur du champ "user_input" avec la fonction htmlspecialchars() pour supprimer les caractères indésirables
 $sanitized_input = htmlspecialchars($user_input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
echo "Valeur traitée : " . $sanitized_input;
?>