<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès interdit</title>
</head>
<body>

<?php
http_response_code(403);
echo "Accès interdit - Vous n'avez pas les droits nécessaires pour accéder à cette ressource.";
?>

</body>
</html>
