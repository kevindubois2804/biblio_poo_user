<?php require_once "LoginManager.class.php"; ?>
<?php ob_start() ?>

<!-- <h1>Ma page d'accueil</h1> -->


<?php


$loginmanager = new LoginManager();
if (isset($_POST['email']) && isset($_POST['passwrd'])) {
    $loginmanager->connexionUtilisateur($_POST['email'], $_POST['passwrd']);
}
?>

<?
$titre = "Bibliothèque de Mathieu AH AH AH";
$content = ob_get_clean();
require_once "template.view.php";
