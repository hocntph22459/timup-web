<?php include "./views/header.php"; ?>
<!-- shop section -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Watches
      </h2>
    </div>
    <div class="row">
    <?php foreach ($listproall as $list) : ?>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
            <a href="?url=deltail-products&id=<?=$list['id'] ?>"><img src="<?= $list['image'] ?>" alt=""></a>
            </div>
            <div class="detail-box">
              <h6>
                <?= $list['name']?>
              </h6>
              <h6>
                Price:
                <span>
                  $300
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                Featured
              </span>
            </div>
          </a>
        </div>
      </div>
      <!-- <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $125
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $110
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w4.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $145
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w5.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $195
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6  col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w6.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $170
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Smartwatch
              </h6>
              <h6>
                Price:
                <span>
                  $230
                </span>
              </h6>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div>
          </a>
        </div> -->
      <!-- </div> -->
    </div>
    <?php endforeach ?>
    <div class="btn-box">
      <a href="">
        View All
      </a>
    </div>
  </div>
</section>

<!-- end shop section -->
<?php include "./views/footer.php"; ?>