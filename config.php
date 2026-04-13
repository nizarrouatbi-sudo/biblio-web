<?php
session_start();
$host = 'localhost';
$db   = 'boutique_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Initialisation du panier s'il n'existe pas
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}
?>