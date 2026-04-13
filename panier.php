<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Votre Panier</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Votre Panier</h2>
    <table class="table table-bordered bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
$total_general = 0;
if (!empty($_SESSION['panier'])):
    foreach ($_SESSION['panier'] as $id => $quantite):
        $stmt = $pdo->prepare("SELECT * FROM produits WHERE id = ?");
        $stmt->execute([$id]);
        $p = $stmt->fetch();

        // Vérification de sécurité : on ne traite que si le produit existe
        if ($p): 
            $sous_total = $p['prix'] * $quantite;
            $total_general += $sous_total;
?>
            <tr>
                <td><?= htmlspecialchars($p['nom']) ?></td>
                <td><?= $p['prix'] ?> €</td>
                <td><?= $quantite ?></td>
                <td><?= $sous_total ?> €</td>
                <td><a href="action.php?action=supprimer&id=<?= $id ?>" class="btn btn-danger btn-sm">Retirer</a></td>
            </tr>
<?php 
        else:
            // Optionnel : supprimer du panier un produit qui n'existe plus en base
            unset($_SESSION['panier'][$id]);
        endif; 
    endforeach; 
else: 
?>
    <tr><td colspan="5" class="text-center">Le panier est vide.</td></tr>
<?php endif; ?>
        </tbody>
    </table>
    
    <div class="d-flex justify-content-between align-items-center">
        <a href="index.php" class="btn btn-secondary">Continuer mes achats</a>
        <?php if ($total_general > 0): ?>
            <div class="text-end">
                <h4>Total : <?= $total_general ?> €</h4>
                <a href="paiement.php" class="btn btn-primary btn-lg">Procéder au paiement</a>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>