<?php include 'config.php'; 
if (empty($_SESSION['panier'])) header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Paiement Sécurisé</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Paiement par Carte</h4>
                </div>
                <div class="card-body">
                    <form action="confirmation.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nom sur la carte</label>
                            <input type="text" class="form-control" required placeholder="M. Jean Dupont">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Numéro de carte</label>
                            <input type="text" class="form-control" required placeholder="XXXX XXXX XXXX XXXX">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Expiration</label>
                                <input type="text" class="form-control" placeholder="MM/AA" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">CVC</label>
                                <input type="text" class="form-control" placeholder="123" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 btn-lg">Payer maintenant</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>