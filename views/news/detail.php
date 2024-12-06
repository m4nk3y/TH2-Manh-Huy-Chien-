<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand " href="index.php?contoller=home&action=home"><img src="assets/images/logo.png" class="img-fluid rounded-top" alt="" />
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">

                    </li>
                </ul>
                <div class="d-flex flex-column ">

                    <?php
                    session_start();
                     if (isset($_SESSION['username_log'])): ?>

                    <span class="btn btn-success mb-2 mr-2">Xin chào,
                        <?php echo htmlspecialchars($_SESSION['username_log']); ?>!</span>


                    <a name="" id="" class="btn btn-danger mb-2" href="index.php?controller=home&action=index"
                        role="button">Đăng xuất</a>
                    <?php else: ?>

                    <a name="" id="" class="btn btn-primary mb-2" href="index.php?controller=admin&action=login"
                        role="button">Đăng nhập</a>
                    <?php endif; ?>

                    <form method="GET" action="index.php">
                        <input type="hidden" name="controller" value="news">
                        <input type="hidden" name="action" value="search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="query" placeholder="Tìm kiếm..."
                                value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
                            <button class="btn btn-primary" type="submit">Tìm</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </nav>
</header>

<main class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center"><?= htmlspecialchars($newsDetail['title']); ?></h2>
            <p class="text-muted text-center"><?= htmlspecialchars($newsDetail['created_at']); ?></p>
            <div class="text-center my-4">
                <img src="assets/images/<?= htmlspecialchars($newsDetail['image']); ?>" alt="News Image"
                    class="img-fluid rounded shadow" style="max-width: 80%; height: auto;">
            </div>
            <p class="fs-5 text-justify"><?= nl2br(htmlspecialchars($newsDetail['content'])); ?></p>
        </div>
    </div>
</main>
<footer class="mt-auto text-white text-center ">
    <div class="container-lg ">

    </div>
    <div class="row text-white" id="fut1">
        <div class="col-3"></div>
        <div class="col-6 text-center">
            <h4 class="card-title my-4 text-center">@2024 TRƯỜNG ĐẠI HỌC THỦY LỢI</h4>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row text-white" id="fut">
        <div class="col-3"></div>
        <div class="col-3">
            <img class="card-img-top mt-2 mx-2 mb-2" src="assets/images/robot.png" alt="Logo" />
        </div>
        <div class="col-3">
            <div class="content d-flex my-3">

                <div class="card-body my-2 mx-3">
                    <h4>TRƯỜNG ĐẠI HỌC THỦY LỢI</h4>
                    <p class="h5">SDT: 0942131233</p>
                    <p class="h5">Địa chỉ: 178 Tây Sơn</p>
                    <p class="h5">Email: Skibidi@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gS" crossorigin="anonymous"></script>
</body>

</html>