<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <script>
        function validateForm() {
            // Effectuez ici les vérifications côté client en JavaScript
            // Vous pouvez utiliser la fonction "return false;" pour empêcher la soumission du formulaire en cas d'erreur.
        }
    </script>
</head>
<body>
    <h2>Connexion</h2>
    <form action="traitement_connexion.php" method="post" onsubmit="return validateForm();">
        <label for="email">Adresse email:</label>
        <input type="email" id="email" name="email" required>
        <!-- Ajoutez ici le champ pour le mot de passe -->
        <!-- Assurez-vous d'inclure un élément <span> pour afficher les messages d'erreur sous chaque champ en cas d'erreur. -->
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
