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
    <?php foreach ($listpro as $list) : ?>
      <div class="col-sm-6 col-xl-3">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="./views/src/images/w1.png" alt="">
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