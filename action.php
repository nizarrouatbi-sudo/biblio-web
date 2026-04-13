<?php
include 'config.php';

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? null;

if ($action == 'ajouter' && $id) {
    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]++;
    } else {
        $_SESSION['panier'][$id] = 1;
    }
}

if ($action == 'supprimer' && $id) {
    unset($_SESSION['panier'][$id]);
}

header('Location: panier.php');
exit();
?>