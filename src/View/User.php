<ul class="list-group">
    <li class="list-group-item">ID : <?= $user["id"] ?></li>
    <li class="list-group-item">Nom : <?= $user["nom"] ?></li>
    <li class="list-group-item">Email : <?= $user["email"] ?></li>
</ul>
<br>
<a href="<?= Config::getBaseUrl() ?>" class="btn btn-warning">Retour à l'accueil</a>