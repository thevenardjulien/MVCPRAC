<p>Êtes vous sûr de vouloir supprimer l'utilisateur <strong><?= $user["nom"] ?></strong> (ID : <?= $user["id"] ?> ) ?</p>
<a href="<?= Config::getBaseUrl() ?>/user/delete" class="btn btn-danger">Confirmer la suppression</a>
<a href="<?= Config::getBaseUrl() ?>" class="btn btn-warning">Annuler</a>