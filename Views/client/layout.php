<?php
    session_start();
    if (isset($_POST['btn-login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkuser = checkuser($username, $password);
        if(is_array($checkuser)){
            $_SESSION['user'] = $checkuser;
        }else{
            $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
        }
    }

    if (isset($_POST['exit'])) {
        session_unset();
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>X-shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/css/styles.css">
</head>
<body>
<div class="container">
    <header>
        <div class="alert alert-success " role="alert">
            <h2 class="text-center">TRUNG TÂM MUA SẮM XSHOP</h2>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-dark rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand active" aria-current="page" href="/Xshop">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Xshop?page=product">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Xshop?page=introduce">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Xshop?page=contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Xshop?page=feedback">Góp ý</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Xshop?page=hoidap">Hỏi đáp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="row row-cols-2 g-col-20">
            <div class="col-9">
                <?php include $VIEW_NAME; ?>
            </div>
            <div class="col-3">
                <div class="account rounded">
                    <h4 class="alert alert-secondary" role="alert">
                        Tài khoản
                    </h4>
                    <?php
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                    <p class="text-center">Xin chào <?=$username?>!!!</p>
                    <form method="post" action="" class="mb">
                        <a href="?page=quenmk">Quên mật khẩu </a>
                        <br>
                        <a href="?page=capnhattk">Cập nhật tài khoản</a>
                        <br>
                        <?php
                        if($role == "ADMIN" ) { ?>
                            <a href="/Xshop/admin">Đăng nhập Admin</a>
                            <br>
                        <?php } ?>
                        <button class="btn btn-danger exit" type="submit" name="exit">Thoát</button>
                    </form>
                    <?php } else { ?>
                    <form class="d-flex flex-column needs-validation" action="" method="post">
                        <div class="w-100">
                            <label for="validationCustom01" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="w-100">
                            <label for="validationCustom02" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Please choose a password.
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ghi nhớ tài khoản?
                            </label>
                        </div>
                        <div class="w-100">
                            <button class="btn btn-primary btn-submit w-100" name="btn-login" type="submit">Đăng nhập</button>
                        </div>
                        <div class="w-100">
                            <a href="?page=register" class="btn btn-dark w-100" name="btn-signUp">Đăng ký</a>
                        </div>
                        <a href="?page=quenmk" class="link-primary text-decoration-none mt-2">Quên mật khẩu?</a>
                        <span style="color: red;margin-top: 5px;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
                    </form>
                    <?php } ?>
                </div>
                <div class="category rounded">
                    <h4 class="alert alert-secondary m-0" role="alert">
                        Danh mục
                    </h4>
                    <div class="list-group">
                        <?php foreach ($categories as $key => $value) { ?>
                            <a href="/Xshop?page=product&category=<?php echo $value['id'];?>" class="list-group-item list-group-item-action"><?php echo $value['name'];?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="products-favorite rounded">
                    <h4 class="alert alert-secondary m-0" role="alert">
                        Top 10 yêu thích
                    </h4>
                    <div class="card w-100">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($all_10_products as $key => $value) { ?>
                            <li class="list-group-item d-flex">
                                <a
                                    href="/Xshop?page=detail&idPro=<?php echo $value['id']; ?>"
                                    style="color: black;text-decoration: none;"
                                    class="d-flex"
                                >
                                <img class="item-img m-20" src="images/<?php echo $value['image']; ?>" alt="">
                                <p class="item-text"><?php echo $value['name']; ?></p>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

