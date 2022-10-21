<?php
if(isset($_POST['add-comment'])) {
    $content = $_POST['content'];
    $id_user = $_SESSION['user']['id'];
    $name_user = $_SESSION['user']['username'];
    $id_product = $row['id'];
    $date_comment = date('d-m-y h:i:s');
    insert_comment($content, $id_user, $name_user, $id_product, $date_comment);
}

if(isset($_POST['add-cart'])) {
    $image = $row['image'];
    $name = $row['name'];
    $price = $row['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;
    $arr = [$image, $name, $price, $quantity, $total];
    if(isset($_SESSION['mycart']) === false) {
        $_SESSION['mycart'] = [];
    }
    array_push($_SESSION['mycart'],$arr);
}
$results = get_all_comment_by_id($row['id']);
?>

<div class="w-full">
    <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="Views/images/<?php echo $row['image'];?>">
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <form action="" method="post">
                        <h5>Name product</h5>
                        <div class="col-lg-12">
                            <span class="m-0 p-0 color-black"><?php echo $row['name']; ?></span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <h5>Price</h5>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">$<?php echo $row['price']; ?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span><?php echo $row['description']; ?></span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" name="quantity" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">
                                    <button
                                            name="add-cart"
                                            class="btn btn-danger w-100"
                                            onclick="alert('Thêm thành công!')"
                                    >
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-success w-100">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border p-2 mt-3">
            <h3 class="text-center">Comments</h3>
                <div class="text-dark mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            <?php
                            if (count($results) > 0) {
                            foreach ($results as $key => $value) {?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                             src="https://www.pngkey.com/png/full/115-1150152_default-profile-picture-avatar-png-green.png" alt="avatar" width="40"
                                             height="40" />
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="text-primary fw-bold mb-0">
                                                    <?php echo $value['name_user'];?>
                                                    <span class="text-dark ms-2"><?php echo $value['content'];?></span>
                                                </h6>
                                                <p class="mb-0"><?php echo $value['date_comment'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } } else { ?>
                                <span class="price-pro" style="margin-bottom: 20px;display: block">Chưa có bình luận nào!!</span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php
            if(!isset($_SESSION['user'])){
                echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            }else{
            ?>
                <form action="" method="post">
                    <div class="form-floating">
                        <textarea class="form-control" name="content" spellcheck="false" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Write comment</label>
                    </div>
                    <div class="d-flex justify-content-end mt-1">
                        <button class="btn btn-primary" type="submit" name="add-comment">Submit</button>
                    </div>
                </form>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center pt-3">
                <h4>More Product</h4>
            </div>
        </div>
        <div class="row mt-3 p-0 text-center pro-box-section">
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="Views/images/product3.png">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="Views/images/product12.png">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="Views/images/product5.png">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="Views/images/product8.png">
                </div>
            </div>
        </div>
    </div>
</div>