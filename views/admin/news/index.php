<?php require __DIR__ . '/../../../include/header.php' ?>

<div style="margin: 20px">
    <div style="display: flex; justify-content:center">
        <h1 class="mb-4">News Management</h1>
    </div>

    <div style="display: flex; justify-content:center;">
        <a href="dashboard.php?route=add" class="btn btn btn-success mb-3">Add News</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsList as $news): ?>
                <tr>
                    <td><?= $news['id'] ?></td>
                    <td><?= $news['title'] ?></td>
                    <td><?= $news['category_name'] ?></td>
                    <td>
                        <?php if (!empty($news['image'])): ?>
                            <img src="../../assets/images/<?= $news['image'] ?>" alt="<?= $news['title'] ?>" class="img-thumbnail" style="width: 100px; height: auto;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="dashboard.php?route=edit&id=<?= $news['id'] ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="dashboard.php?route=delete&id=<?= $news['id'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require __DIR__ . '/../../../include/footer.php' ?>