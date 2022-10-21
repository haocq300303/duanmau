<div>
    <div class="alert alert-success" role="alert">
        <h2>QUẢN LÝ SẢN PHẨM</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã</th>
            <th scope="col">Tên</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Giá</th>
            <th scope="col">Giá km</th>
            <th scope="col">Loại</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Sp đặc biệt</th>
            <th scope="col">Views</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value){ ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $value['id'] ?></td>
                <td style="width: 200px;"><?php echo $value['name'] ?></td>
                <td><img src="Views/images/<?php echo $value['image'];?>" style="width: 50px;height: 50px;border-radius: 50%;" alt="ảnh sp"></td>
                <td style="width: 200px;" ><?php echo $value['description'] ?></td>
                <td><?php echo $value['price'] ?></td>
                <td><?php echo $value['reduced_price'] ?></td>
                <td><?php echo $value['id_category']; ?></td>
                <td><?php echo $value['input_day'] ?></td>
                <td><?php echo $value['especially'] ?></td>
                <td><?php echo $value['view'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='?page=product&act=edit&editId=<?php echo $value['id']; ?>'">Sửa</button>
                    <button type="button" class="btn btn-danger" onclick="
                        const result = confirm('Bạn có chắc chắn muốn xóa không?');
                        if(result){
                        location.href='?page=product&act=list&deleteId=<?php echo $value["id"]; ?>'
                        }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="actions" style="margin-top: 10px;">
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
        <a href="?page=product&act=add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
    </div>
</div>


