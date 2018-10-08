<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'un tag</h1>

<form action="create_query.php" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="tag" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>