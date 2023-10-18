<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/post.php');
if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];
            post($identifier);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
            die;
        }
    } else {
        echo "Erreur 404 : La maison d'Eliott n'est pas trouvable (c'est une ref svp ayez là).";
    }
} else {
    homepage();
}