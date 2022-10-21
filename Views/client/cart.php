<?php $tongtien = 0; ?>
<div>
    <div class="alert alert-danger" role="alert">
        <h2>GIỎ HÀNG</h2>
    </div>
    <?php if(isset($_SESSION['mycart'])) {
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Tên sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
            foreach ($_SESSION['mycart'] as $key => $value){
            $tongtien += $value[4];
            ?>
            <tr>
                <td><img src="Views/images/<?php echo $value[0];?>" style="width: 50px;height: 50px;border-radius: 50%;" alt="ảnh sp"></td>
                <td style="width: 200px;" ><?php echo $value[1] ?></td>
                <td>$ <?php echo $value[2] ?></td>
                <td><?php echo $value[3]; ?></td>
                <td>$ <?php echo $value[4] ?></td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="const result = confirm('Bạn có chắc chắn muốn xóa không?');
                            if(result){
                            location.href='?page=cart&deleteId=<?php echo $key; ?>'
                            }"
                    >Xóa
                    </button>
                </td>
            </tr>
        <?php }?>
        <tr><td style="color: red;">Tổng tiền: $ <?php echo $tongtien; ?> </td> </tr>
        </tbody>
    </table>
    <div class="actions" style="margin-top: 10px;">
        <?php if(isset($_SESSION['user'])){ ?>
            <button
                    type="submit"
                    class="btn btn-outline-primary"
                    name="btn-add"
                    onclick="alert('Vui lòng thanh toán bằng phương thức chuyển khoản ngân hàng:' +
                     ' Stk: 838688888888 ' +
                      'Tên chủ tk: Chu Quang Hào');"
            >
                Thanh toán
            </button>
        <?php } else { ?>
            <span style="margin-top: 10px;color: red;">Vui lòng đăng nhập để thực hiện chức năng thanh toán</span>
        <?php } ?>
    </div>
    <?php } else {echo 'Không có bất kỳ sản phẩm nào!';} ?>
</div>


