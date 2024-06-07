<?php
// Vérifier si l'utilisateur est connecté
if(isset($_SESSION['email'])) {
    // Afficher le message de bienvenue
    echo '<h1>Bienvenue '.$_SESSION['email'].'</h1>';
} else {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('location:connexion.php');
    exit;
}
?></P>
?>