<?php
    $id = $_GET['editId'];
    if (isset($_POST['btn-edit'])) {
        $name = $_POST['name-category'];
        edit_category($name,$id);
        $message= "Edit thành công";
    }
?>

<div class="alert alert-success" role="alert">
    <h2>QUẢN LÝ LOẠI HÀNG</h2>
</div>
<form class="form" action="" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fw-bold">Mã loại</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="Auto number" disabled>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label fw-bold">Tên loại</label>
        <input type="text" class="form-control" name="name-category" id="formGroupExampleInput2" placeholder="Enter tên loại" value="<?php echo !isset($message) && isset($row['name']) ?  $row['name'] : ''; ?>">
    </div>
    <button type="submit" class="btn btn-outline-secondary" name="btn-edit">Edit</button>
    <button type="button" class="btn btn-outline-secondary">Nhập lại</button>
    <a href="?page=category&act=list" class="btn btn-outline-secondary" >Danh sách</a>
</form>
<br>

<?php echo isset($message) ? "<div class='alert alert-success' role='alert'>.$message.</div>" : ""; ?>

