<?php require __DIR__ . '/../../../include/header.php' ?>

<div style="margin: 20px;">
    <?php require __DIR__ . '/../../../include/header.php' ?>
    <h2 class="mb-4">Edit News</h2>
    <form action="dashboard.php?route=edit&id=<?= $news['id'] ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= $news['title'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select id="category" name="category_id" class="form-select" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] == $news['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <?php if (!empty($news['image'])): ?>
                <div>
                    <img src="../../assets/images/<?= $news['image'] ?>" alt="<?= $news['title'] ?>" class="img-thumbnail" style="width: 100px; height: auto;">
                    <p>Current Image</p>
                </div>
            <?php endif; ?>
            <input type="file" id="image" name="image" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea id="content" name="content" class="form-control" rows="5" required><?= $news['content'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php require __DIR__ . '/../../../include/footer.php' ?>