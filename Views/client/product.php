<div class="container">
    <div class="row">
        <div class="alert alert-info text-center fs-3 fw-bold" role="alert">
            <?php if(isset($_GET['category'])) {
                $id_category = $_GET['category'];
                foreach ($categories as $key => $item){
                    if($item['id'] == $id_category) {
                        echo $item['name'];
                        break;
                    }
                }
            } else {
                echo "All Products";
            } ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row g-3">
        <?php foreach ($results as $key => $value) { ?>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <a href="?page=detail&idPro=<?php echo $value['id'];?>">
                <img style="height: 301.33px;" class="card-img-top" src="Views/images/<?php echo $value['image']; ?>" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h4 class="card-title" style="height: 84px;">
                        <a href="?page=detail&idPro=<?php echo $value['id'];?>" style="text-decoration: none;">
                            <?php echo $value['name']; ?>
                        </a>
                    </h4>
                    <p class="card-text"><?php echo $value['description']; ?></p>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger btn-block"><?php echo $value['price']; ?> $</p>
                        </div>
                        <div class="col">
                            <a href="?page=detail&idPro=<?php echo $value['id'];?>" class="btn btn-success btn-block">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>