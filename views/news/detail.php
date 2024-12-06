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
<h2><?= htmlspecialchars($newsDetail['title']); ?></h2>
<p><?= htmlspecialchars($newsDetail['created_at']); ?></p>
<p><?= htmlspecialchars($newsDetail['content']); ?></p>
<p><?= htmlspecialchars($newsDetail['image']); ?></p>

<footer class="mt-auto text-white text-center ">
    <div class="container-lg "></div>
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
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gS
