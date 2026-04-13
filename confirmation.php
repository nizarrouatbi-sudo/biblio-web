<?php 
include 'config.php';
// On vide le panier après le succès du paiement
$_SESSION['panier'] = [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Succès</title>
</head>
<body class="bg-light text-center mt-5">
    <div class="container">
        <div class="alert alert-success py-5 shadow">
            <h1 class="display-4">Merci pour votre commande !</h1>
            <p class="lead">Le paiement a été validé avec succès.</p>
            <hr>
            <a href="index.php" class="btn btn-outline-success">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>