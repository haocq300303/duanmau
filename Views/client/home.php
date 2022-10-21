<div>
    <div class="slider rounded">
        <div id="carouselExampleDark" class="carousel carousel-dark slide  w-100 h-400px" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach ($product_specials as $key => $value) { ?>
                    <div class="carousel-item <?php echo $key == 0 ? 'active' : '';?>" data-bs-interval="<?php echo $key == 0 ? '10000' : $key == 1 ? '2000' : $key == 2 ? '2000' : ''; ?>">
                        <div class="image" style="height: 500px;width: 500px;margin: 0 auto">
                            <a href="?page=detail&idPro=<?php echo $value['id']; ?>">
                            <img src="Views/images/<?php echo $value['image'] ?>" class="d-block w-100 h-100" alt="special product">
                            </a>
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $value['price'] ?> $</h5>
                            <h3 style="color: yellow"><?php echo $value['name'] ?></h3>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="lists-product">
        <div class="row g-4">
            <?php foreach ($products as $key => $value) { ?>
            <div class="col-4">
                <div class="card w-100">
                    <a href="?page=detail&idPro=<?php echo $value['id']; ?>">
                    <img style="height: 304px;" src="Views/images/<?php echo $value['image'];?>" class="card-img-top" alt="image product">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="height: 48px;"><?php echo $value['name']; ?></h5>
                        <p style="color: red;font-weight: bold"><?php echo $value['price']; ?> $</p>
                        <p class="card-text"><?php echo $value['description']; ?></p>
                        <a href="?page=detail&idPro=<?php echo $value['id']; ?>" class="btn btn-primary">Xem ngay</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="pagination" style="margin-top: 30px; display:flex;justify-content:center;align-items: center;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
