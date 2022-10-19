<?php
    $id = $_SESSION['user']['id'];
if (isset($_POST['btn-edit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    update_account($id, $username, $email, $password);
    $message = "Cập nhật tài khoản thành công!!";
}

$row = get_one_user($id);

?>

<div>
    <div class="alert alert-danger" role="alert">
        <h2 class="text-center">CẬP NHẬT TÀI KHOẢN</h2>
    </div>
    <form class="d-flex flex-column gap-3 needs-validation" action="" method="post">
        <div class="w-100">
            <label for="validationCustom01" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="validationCustom01" value="<?php echo $row['username'] ?>" required>
            <div class="valid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="validationCustom03" value="<?php echo $row['email'] ?>" required>
            <div class="valid-feedback">
                Please choose a Email.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="validationCustom02" value="<?php echo $row['password'] ?>" required>
            <div class="valid-feedback">
                Please choose a password.
            </div>
        </div>
        <div class="w-100">
            <button class="btn btn-dark w-100" name="btn-edit" type="submit">Edit</button>
        </div>
    </form>
    </br>
    <?php echo isset($message) ? "<div class='alert alert-success' role='alert'>".$message."</div>" : ""; ?>
</div>

