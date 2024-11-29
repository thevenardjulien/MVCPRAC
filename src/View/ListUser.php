<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <a href="<?= Config::getBaseUrl() ?>/user/add" class="btn btn-info">Ajouter un utilisateur</a>
        <br /><br />
        <?php foreach ($data as $user) :  ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="<?= Config::getBaseUrl() ?>/user/select/<?= $user['id'] ?>" class="btn btn-info">Voir</a>
                    <a href="<?= Config::getBaseUrl() ?>/user/update/<?= $user['id'] ?>" class="btn btn-warning">Modifier</a>
                    <a href="<?= Config::getBaseUrl() ?>/user/delete/<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>