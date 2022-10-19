<div class="alert alert-success" role="alert">
    <h2>QUẢN LÝ THỐNG KÊ</h2>
</div>
<table class="table">
    <thead>
    <tr>
        <th>MÃ DANH MỤC</th>
        <th>TÊN DANH MỤC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ THẤP NHẤT</th>
        <th>GIÁ CAO NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php foreach ($results as $key => $value){ ?>
        <tr>
            <td><?php echo $value['madm'] ?></td>
            <td><?php echo $value['tendm'] ?></td>
            <td><?php echo $value['countsp'] ?></td>
            <td><?php echo $value['minprice'] ?> $</td>
            <td><?php echo $value['maxprice'] ?> $</td>
            <td><?php echo $value['avgprice'] ?> $</td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="actions" style="margin-top: 10px;">
    <a href="#" class="btn btn-warning">Biểu đồ</a>
</div>


