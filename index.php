<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ma Boutique</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">TechShop</a>
        <a href="panier.php" class="btn btn-outline-light">Panier (<?= array_sum($_SESSION['panier']) ?>)</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <?php
        $stmt = $pdo->query("SELECT * FROM produits");
        while ($row = $stmt->fetch()) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nom'] ?></h5>
                        <p class="card-text text-muted"><?= $row['description'] ?></p>
                        <h4 class="text-primary"><?= $row['prix'] ?> €</h4>
                        <a href="action.php?action=ajouter&id=<?= $row['id'] ?>" class="btn btn-success w-100">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>