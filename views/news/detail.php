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

 <!-- News Detail -->
 <main class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center"><?= htmlspecialchars($newsDetail['title']); ?></h2>
                <p class="text-muted text-center"><?= htmlspecialchars($newsDetail['created_at']); ?></p>
                <div class="text-center my-4">
                    <img src="assets/images/<?= htmlspecialchars($newsDetail['image']); ?>" alt="News Image" class="img-fluid rounded shadow"
                        style="max-width: 80%; height: auto;">

                        
                </div>
                <p class="fs-5 text-justify"><?= nl2br(htmlspecialchars($newsDetail['content'])); ?></p>
            </div>
        </div>
    </main>

 <!-- Footer -->
 <footer class="bg-dark text-white mt-auto py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Trường Đại Học Thủy Lợi</h5>
                    <p>SDT: 0942131233</p>
                    <p>Địa chỉ: 178 Tây Sơn</p>
                    <p>Email: Skibidi@gmail.com</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/images/robot.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
                </div>
            </div>
            <div class="text-center mt-3">
                <small>@2024 TRƯỜNG ĐẠI HỌC THỦY LỢI</small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gS" crossorigin="anonymous"></script>
</body>

</html>