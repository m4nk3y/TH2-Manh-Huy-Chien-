<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card border rounded shadow p-4" style="width: 800px;">
            <div class="row">

                <div class="col-6 d-flex justify-content-center align-items-center" id="cot1">
                    <img src="assets/images/65.png" class="anhlogin img-fluid" alt="Login Image">
                </div>

                <div class="col-6">
                    <h3 class="text-center mb-4">Đăng nhập</h3>
                    <form method="post" action="index.php?controller=admin&action=signin">

                        <label for="" class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" />
                        <label for="" class="form-label">Mật Khẩu</label>
                        <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" />
                        <?php if (!empty($error)): ?>
                        <div class="alert alert-danger" role="alert" id="errorAlert">
                            <?php echo htmlspecialchars($error); ?>!
                        </div>
                        <script>
                        setTimeout(function() {
                            var alert = document.getElementById('errorAlert');
                            if (alert) {
                                alert.style.display = 'none';
                            }
                        }, 3000);
                        </script>
                        <?php else: ?>
                        <?php echo ""; ?>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary w-100 mt-4">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>