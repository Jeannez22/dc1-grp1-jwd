<?php
require_once '../../../model/database.php';

$liste_tags = getAllEntities("tag");

$error_msg = null;
if(isset($_GET['errcode'])){
    $errcode = $_GET['errcode'];
    switch($errcode){
        case 23000:
            $error_msg="Erreur lors de la suppression";
            break;
        default:
            $error_msg ="Une erreur est survenue";
            break;
    }
}
require_once '../../layout/header.php';
?>

<h1>Gestion des tags</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>
<?php if($error_msg) : ?>
<div class="alert alert-danger">
    <i class="fa fa-exclamation-triangle"></i>
    <?php echo $error_msg ?>
</div>
<?php endif; ?>
<table class="table table-striped table-bordered table-condensed">
    <thead class="thead-light">
        <tr>
            <th>Titre</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_tags as $tag) : ?>
            <tr>
                <td><?php echo $tag['titre']; ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $tag['id']; ?>" class="btn btn-primary">
                        <i class=" fa fa-edit"></i>
                    Modifier
                    </a>
                    <form action='delete_query.php' method='POST'>
                        <input type="hidden" name="id" value="<?php echo $tag['id'];?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"> </i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>