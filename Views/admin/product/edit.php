<?php
$id = $_GET['editId'];
$error = [];
if(isset($_POST["btn-add"])){
    $name = $_POST["name_product"];
    $price = $_POST["price"];
    $reduced_price = $_POST["reduced_price"];
    $input_day = $_POST["input_day"];
    $id_category = $_POST["category"];
    $especially = $_POST["especially"];
    $image = $_FILES["image"]["name"];
    $desc = $_POST["desc"];
    $view = 0;

    if(isset($_FILES["image"])){
        $target_dir = "images/";
        $nameImg = $_FILES["image"]["name"];
        $target_file = $target_dir.$nameImg;
        $maxFileSize = 800000;
        $allowUpload = true;
        $allowTypes = ["jpg","png","jpeg","gif"];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if($_FILES["image"]["size"] > $maxFileSize){
            $error["img_size"] = "Khong duoc upload anh > ".$maxFileSize."(Byte)";
            $allowUpload = false;
        }

        if(!in_array($imageFileType,$allowTypes)){
            $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
            $allowUpload = false;
        }

        if($allowUpload == true){
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
        }
    }
    // Cau lenh insert add data
    if (!$error) {
        edit_product($id,$name, $price, $reduced_price, $input_day, $id_category, $especially, $image, $desc, $view);
        $message = "Edit thành công!";
    }
}
?>

<div class="alert alert-success" role="alert">
    <h2>QUẢN LÝ SẢN PHẨM</h2>
</div>
<form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="post" novalidate>
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Tên hàng hóa</label>
        <input type="text" name="name_product" class="form-control" id="validationCustom01" value="<?php echo $row['name']; ?>" required>
        <div class="invalid-feedback">
            Vui lòng nhập tên hàng hóa
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label fw-bold">Giá</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">$</span>
            <input type="text" name="price" class="form-control" id="validationCustomUsername"
                   aria-describedby="inputGroupPrepend" value="<?php echo $row['price']; ?>" required>
            <div class="invalid-feedback">
                Please choose a price.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label fw-bold">Giá khuyến mãi</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">$</span>
            <input type="text" name="reduced_price" class="form-control" value="<?php echo $row['reduced_price']; ?>"
                   id="validationCustomUsername" aria-describedby="inputGroupPrepend">
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label fw-bold">Ngày nhập kho</label>
        <input type="date" name="input_day" class="form-control" id="validationCustom02" value="<?php echo $row['input_day']; ?>" required>
        <div class="invalid-feedback">
            Vui lòng nhập ngày nhập kho
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label fw-bold">Loại hàng</label>
        <select class="form-select" name="category" id="validationCustom04" required>
            <?php foreach ($categories as $key => $value) { ?>
                <option <?php echo $row['id_category'] == $value['id'] ? "selected" : ""; ?> value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
            <?php } ?>
        </select>
        <div class="invalid-feedback">
            Vui lòng chọn loại hàng
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label fw-bold">Sản phẩm đặc biệt</label>
        <select class="form-select" name="especially" id="validationCustom03" required>
            <option <?php echo $row['especially'] == "false" ? "selected" : ''; ?> value="false">false</option>
            <option <?php echo $row['especially'] == "true" ? "selected" : ''; ?> value="true">true</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label fw-bold">Hình ảnh</label>
        <input type="file" name="image" class="form-control" id="validationCustom05" value="<?php echo $row['image']; ?>" required>
        <div class="invalid-feedback">
            <?php echo isset($error["img_size"]) ? $error["img_size"] : isset($error["img_type"]) ? $error["img_type"] : "Vui lòng chọn 1 hình ảnh"; ?>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom06" class="form-label fw-bold">Mô tả</label>
        <textarea name="desc" class="form-control" id="validationCustom06" cols="30" rows="5" required><?php echo $row['description']; ?></textarea>
        <div class="invalid-feedback">
            Vui lòng nhập mô tả
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="btn-add" type="submit">Thêm mới</button>
    </div>
</form>
<br>
<button type="button" class="btn btn-outline-secondary" onclick="window.location.reload()">Nhập lại</button>
<a href="?page=product&act=list" class="btn btn-outline-secondary" >Danh sách</a>
</br>
    </br>
<?php echo isset($message) ? "<div class='alert alert-success' role='alert'>".$message."</div>" : ""; ?>