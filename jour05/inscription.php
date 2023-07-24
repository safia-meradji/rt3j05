<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <script>
        function validateForm() {
            // Effectuez ici les vérifications côté client en JavaScript
            // Vous pouvez utiliser la fonction "return false;" pour empêcher la soumission du formulaire en cas d'erreur.
        }
    </script>
</head>
<body>
    <h2>Inscription</h2>
    <form action="traitement_inscription.php" method="post" onsubmit="return validateForm();">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <!-- Ajoutez ici les autres champs du formulaire (nom, email, mot de passe, confirmation) -->
        <!-- Assurez-vous d'inclure un élément <span> pour afficher les messages d'erreur sous chaque champ en cas d'erreur. -->
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
