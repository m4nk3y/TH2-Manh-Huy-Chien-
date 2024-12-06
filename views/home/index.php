<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">


        <a class="navbar-brand " href=""><img src="assets/images/logo.png" class="img-fluid rounded-top"

                                              alt="" />
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

                <?php if (isset($username_log)): ?>

                    <span class="btn btn-success mb-2 mr-2">Xin chào, <?php echo htmlspecialchars($username_log); ?>!</span>


                    <a name="" id="" class="btn btn-danger mb-2" href="index.php?controller=home&action=index" role="button">Đăng xuất</a>
                <?php else: ?>

                    <a name="" id="" class="btn btn-primary mb-2" href="index.php?controller=admin&action=login" role="button">Đăng nhập</a>
                <?php endif; ?>

                <form method="GET" action="index.php">
                    <input type="hidden" name="controller" value="news">
                    <input type="hidden" name="action" value="search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="query" placeholder="Search news..."
                               value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>



            </div>

        </div>
    </div>
</nav>

<div class="backg">
    <div class="container-lg mt-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="assets/images/baner-webthumb.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/web1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<header class="bg-primary text-white text-center py-3">

    <nav class="navbar navbar-expand-md navbar-dark bg-primary mt-2">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <?php
                    foreach ($categoryList as $category) { ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=news&action="><?= $category['name']?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container my-4">
    <div class="row">
        <!-- Main Image Section -->
        <div class="col-md-8">
            <div class="text-center mb-3">








                <?php if (isset($results) && !empty($results)): ?>
                    <div class="card mt-4">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0">Kết quả tìm kiếm</h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <?php foreach ($results as $item): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="index.php?controller=news&action=detail&id=<?= $item['id']; ?>" class="text-decoration-none">
                                            <?= htmlspecialchars($item['title']); ?>
                                        </a>

                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>












                <img src="assets/images/baner-webthumb.jpg" alt="Event" class="img-fluid rounded">

            </div>
            <h2 class="h5">Trường Đại học Thủy lợi gặp mặt LHS nước ngoài nhân dịp Quốc khánh</h2>
            <p>
                TLU Chiều 2/12, tại P225/A2, Trường Đại học Thủy lợi tổ chức buổi gặp mặt lưu học sinh nhân dịp
                Quốc khánh nước CHDCND Lào (02/12), Vương quốc Campuchia...
            </p>
        </div>

        <!-- Sidebar Section -->
        <aside class="col-md-4">
            <div class="card">
                <div class="card-header d-flex">
                    <button class="btn btn-primary w-50">TIN TỨC</button>
                    <button class="btn btn-outline-primary w-50">THÔNG BÁO</button>
                </div>
                <ul class="list-group">
                    <?php
                    foreach ($newList as $news) { ?>
                        <li class="list-group-item"><a href="index.php?controller=news&action=detail&id=<?= $news['id']; ?>" class="text-decoration-none">
                                <?= htmlspecialchars($news['title']); ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>




            </div>
        </aside>
    </div>
</main>

<!-- Top Banners Section -->
<div class="container mt-3">
    <div class="row g-3">
        <div class="col-md-4">

            <img src="assets/images/TuyenSinhDH.jpg" alt="Banner 1" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
            <img src="assets/images/TuyenSinhThacSi.jpg" alt="Banner 2" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
            <img src="assets/images/TuyenSinhTS.jpg" alt="Banner 3" class="img-fluid rounded">
        </div>
    </div>
</div>

<!-- Training Section -->
<div class="container mt-5">
    <h3 class="text-primary">ĐÀO TẠO</h3>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card h-100">

                <img src="assets/images/mai.jpg" alt="Thông báo" class="card-img-top object-fit-cover"
                     style="height: 250px;">
                <div class="card-body">
                    <p class="card-text">
                        Thông tin thời gian bảo vệ luận án tiến sĩ cấp Trường của NCS Nguyễn Minh Tiến...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">

                <img src="assets/images/tuongvy.jpg" alt="Chuẩn đầu ra 1"
                     class="card-img-top object-fit-cover" style="height: 250px;">
                <div class="card-body">
                    <p class="card-text">
                        Thông báo tổ chức thi chuẩn tiếng Anh đầu ra cho trình độ đại học hệ chính quy...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img src="assets/images/haiduong.jpg" alt="Chuẫn đầu ra 2"
                     class="card-img-top object-fit-cover" style="height: 250px;">
                <div class="card-body">
                    <p class="card-text">
                        Thông báo kết quả thi chuẩn tiếng Anh đầu ra cho sinh viên ĐHCQ đợt 3 năm 2024...
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <!-- Placeholder for future content -->
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none">Các chương trình đào tạo trình độ đại học...</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none">Thông tin luận án và thời gian bảo vệ luận án...</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none">Thông tin luận án tiến sĩ cấp Trường...</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none">Thông báo triển khai kế hoạch Tiếng Anh...</a>
                </li>
            </ul>
            <a href="#" class="d-block mt-2 text-end text-primary">» Xem tất cả</a>
        </div>
    </div>
</div>

</body>
<body>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</body>

</html>