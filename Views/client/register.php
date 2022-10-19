<?php
    if (isset($_POST['btn-signUp'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        insert_account($username, $email, $password);
        $message = "Đăng ký tài khoản thành công, vui lòng đăng nhập để vào hệ thống!!";
    }
?>

<div>
    <div class="alert alert-danger" role="alert">
        <h2 class="text-center">ĐĂNG KÝ THÀNH VIÊN</h2>
    </div>
    <form class="d-flex flex-column needs-validation" action="" method="post">
        <div class="w-100">
            <label for="validationCustom01" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="validationCustom03" value="" required>
            <div class="valid-feedback">
                Please choose a Email.
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
            <button class="btn btn-dark w-100" name="btn-signUp" type="submit">Đăng ký</button>
        </div>
    </form>
    </br>
<?php echo isset($message) ? "<div class='alert alert-success' role='alert'>".$message."</div>" : ""; ?>
</div>
