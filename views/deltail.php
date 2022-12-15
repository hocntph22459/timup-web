<?php include "./views/header.php"; ?>
<!-- shop section -->
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
            Sản Phẩm Chi Tiết
            </h2>
        </div>
        <?php foreach ($listdeltail as $list) : ?>
        <div class="row">
            <div class="col-md-6">
                <img src="<?= $list['image'] ?>" alt="" style="border-radius: 40px; width:300px;">
            </div>
            <div class="col-md-6">
                    <!--add giỏ hàng -->
                    <h3><?= $list['name'] ?></h3>
                    <form action="?url=cart" method="post">
                    <div class="mb-3 mt-3">
                        size:
                        <select class="form-control my-4" name="attributes" class="form-select" aria-label="Default select example">
                            <?php foreach ($list_attributes as $attributes) : ?>
                                <option name="" value="<?= $attributes['id'] ?>"><?= $attributes['size'] ?> - <?= $attributes['color'] ?> </option>
                            <?php endforeach; ?>
                        </select>

                        <input type="text" name="image" value="./views/src/image/products/<?= $spct['image'] ?>" hidden>
                        <input type="text" name="name" value="<?= $list['name'] ?>" hidden>
                        <input type="text" name="price" value="<?= $list['price'] ?>" hidden>
                        </div>
                        <div class="mb-3 mt-3">
                            SỐ LƯỢNG:
                            <input type="number" class="form-control my-4" placeholder="chọn số lượng" name="soluong" value="1">
                        </div>
                        <!--đăng nhập mới mua hàng -->
                        <?php if (!isset($_SESSION['id'])) : ?>
                            <p><a class="btn btn-success" href="?url=login">Thêm vào giỏ hàng</a></p>
                        <?php endif ?>
                        <?php if (isset($_SESSION['id'])) : ?>
                            <button name="addtocart" class="btn btn-success" type="submit">Thêm vào giỏ hàng</button>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        <div class="tile" style="margin-top: 64px;">
            <h2>sản phẩm liên quan</h2>
        </div>
        <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="<?= $list['image']?>" alt="" >
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <?= $list['name'] ?>
                                </h6>
                                <h6>
                                    giá tiền:
                                    <span>
                                    <?= $list['price'] ?>
                                        vnđ
                                    </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                <?= $list['tinhtrang'] ?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    <?php endforeach ?>
    <div class="btn-box">
        <a href="">
            View All
        </a>
    </div>
    <?php if (isset($_SESSION['email'])) : ?>
                    <form class="review-form" action="" method="post" id="">
                        <div class="form-group">
                            <!-- <label>Your rating</label> -->
                            <!-- <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div> -->
                        </div>
                        <div class="form-group">
                            <label>Bình luận của bạn</label>
                            <textarea class="form-control" rows="10" name="contents"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" name="" class="form-control" value="<?= $_SESSION['id']['name'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" name="comment_submit">Gửi</button>
                    </form>
                <?php else : ?>
                    <form class="review-form" action="" method="post" id="">
                        <div class="form-group">
                            <!-- <label>Your rating</label> -->
                            <!-- <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div> -->
                        </div>
                        <div class="form-group">
                            <label>Bình luận của bạn</label>
                            <textarea class="form-control" rows="10" name="contents"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" value="<?= $_SESSION['id']['name'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                     <a class="btn btn-success" href="?url=login">Gửi</a>
                    </form>
                <?php endif; ?>
        </div>

</section>

<!-- end shop section -->
<?php include "./views/footer.php"; ?>


