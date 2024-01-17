<?php
require_once "Livre.Manager.class.php";
require_once "Livre.class.php";

$livreManager = new LivreManager;
$livreManager->chargementLivresParUtilisateur($_SESSION['utilisateur']['id_utilisateur']);

?>

<?php ob_start() ?>
<?php session_start(); ?>


<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $livresEnCours = $livreManager->getLivres();

    foreach ($livresEnCours as $livre) : ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?php echo $livre->getImage(); ?>" height="150px" alt="Livre pour <?php echo $livre->getTitre(); ?>"></td>
            <td class="align-middle"><?php echo $livre->getTitre(); ?></td>
            <td class="align-middle"><?php echo $livre->getNbDePages(); ?></td>
            <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="#" class="btn btn-success d-block">Ajouter un livre</a>
<?php
$titre = "Ceci est ma bibliothèque 😄😄😄😄";
$content = ob_get_clean();
require_once "template.view.php";
