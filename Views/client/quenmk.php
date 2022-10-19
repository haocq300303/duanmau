<?php
if (isset($_POST['btn-send'])) {
    $email = $_POST['email'];
    $result = checkEmail($email);
    if (is_array($result)){
        $message = "Mật khẩu của bạn là: ".$result['password'];
    } else {
        $message = "Email không hợp lệ";
    }
}
?>

<div>
    <div class="alert alert-danger" role="alert">
        <h2 class="text-center">LẤY LẠI MẬT KHẨU</h2>
    </div>
    <form class="d-flex flex-column needs-validation" action='' method="post">
        <div class="w-100">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="validationCustom01" required>
            <div class="valid-feedback">
                Please choose a email.
            </div>
        </div>
        <div class="w-100 mt-3">
            <span style="color: red;"><?php echo isset($message) ? $message : ""; ?></span>
        </div>
        <div class="w-100 mt-3">
            <button class="btn btn-dark w-100" name="btn-send" type="submit">Gửi</button>
        </div>
    </form>
</div>
