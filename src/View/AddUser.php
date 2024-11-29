<form method="POST" action="<?= Config::getBaseUrl() ?>/user/add">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter un utilisateur</button>
    <a href="<?= Config::getBaseUrl() ?>" class="btn btn-warning">Annuler</a>
</form>