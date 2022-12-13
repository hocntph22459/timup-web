<?php include "./views/header.php"; ?>
<!-- slider section -->
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Đồng hồ thông minh
                </h1>
                <p>
                  Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Liên hệ chúng tôi
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="./views/src/images/slider-img.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Đồng hồ thông minh
                </h1>
                <p>
                  Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Liên hệ chúng tôi
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="./views/src/images/slider-img.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Đồng hồ thông minh
                </h1>
                <p>
                  Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit amet, lobortis semper quam.
                </p>
                <div class="btn-box">
                  <a href="" class="btn1">
                    Liên hệ chúng tôi
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="./views/src/images/slider-img.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
  </div>

</section>
<!-- end slider section -->
</div>

<!-- shop section -->

<section class="shop_section layout_padding">
  <div class="container">
    <form class="d-flex" role="search" style="margin-right: 50px;" action="?url=categories-sanpham" method="post">
      <!-- <input class="form-control me-2" type="text" placeholder="Tìm kiếm" aria-label="Search" name="iddm"> -->
      <select class="form-select" aria-label="Default select example" style="width: 120px; margin-right:10px ;" name="iddm">
        <option value="0" selected>Tất cả</option>
        <?php foreach ($listcate as $dm) : ?>
          <option value="<?= $dm['id'] ?>"><?= $dm['name'] ?></option>
        <?php endforeach ?>
      </select>
      <button class="btn btn-outline-success" type="submit" name="btn" style="width: 100px;">Tìm</button>
    </form>
    <div class="heading_container heading_center">
      <h2>
        Latest Watches
      </h2>
    </div>
    <?php foreach ($listproall as $list) : ?>
      <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <a href="?url=deltail-products&id=<?=$list['id'] ?>"><img src="<?= $list['image'] ?>" alt=""></a>
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
  </div>
</section>

<!-- end shop section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6 col-lg-5 ">
        <div class="img-box">
          <img src="./views/src/images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6 col-lg-7">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              Về chúng tôi
            </h2>
          </div>
          <p>
            Có rất nhiều biến thể của các đoạn văn trong Lorem Ipsum,
            nhưng phần lớn đã bị thay đổi dưới một số hình thức, bằng cách thêm vào
            sự hài hước hoặc những từ ngữ ngẫu nhiên trông thậm chí không đáng tin
            chút nào. Nếu bạn định sử dụng một đoạn văn của Lorem Ipsum, bạn cần chắc
            chắn rằng không có điều gì đáng xấu hổ ẩn giấu ở giữa văn bản. Tất cả các
          </p>
          <a href="">
            Đọc thêm
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- feature section -->

<section class="feature_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Các tính năng của đồng hồ của chúng tôi
      </h2>
      <p>
        Học sinh có thể được giáo dục, nhưng nó sẽ xảy ra vào thời điểm mà sẽ có một số công việc và nỗi đau lớn.
      </p>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="./views/src/images/f1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Theo dõi sức khỏe
            </h5>
            <p>
              Khách hàng là rất quan trọng, khách hàng sẽ được theo dõi bởi khách hàng,
            </p>
            <a href="">
              <span>
                Đọc thêm
              </span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="./views/src/images/f2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Cảnh báo & Thông báo
            </h5>
            <p>
              Khách hàng là rất quan trọng, khách hàng sẽ được theo dõi bởi khách hàng,
            </p>
            <a href="">
              <span>
                Đọc thêm
              </span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="./views/src/images/f3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              tin nhắn
            </h5>
            <p>
              Khách hàng là rất quan trọng, khách hàng sẽ được theo dõi bởi khách hàng,
            </p>
            <a href="">
              <span>
                Đọc thêm
              </span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="./views/src/images/f4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Bluetooth
            </h5>
            <p>
              Khách hàng là rất quan trọng, khách hàng sẽ được theo dõi bởi khách hàng,
            </p>
            <a href="">
              <span>
                Đọc thêm
              </span>
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Xem thêm
      </a>
    </div>
  </div>
</section>

<!-- end feature section -->

<!-- contact section -->

<section class="contact_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <div class="heading_container">
            <h2>
              Liên hệ chúng tôi
            </h2>
          </div>
          <form action="">
            <div>
              <input type="text" placeholder="Full Name " />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                Gủi
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="./views/src/images/contact-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->

<!-- client section -->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        lời chứng thực
      </h2>
    </div>
    <div class="carousel-wrap ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="./views/src/images/c1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Mark Thomas
                  </h5>
                  <h6>
                    Customer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                mensbry là website chuyên kinh doanh các mặt
                hàng thời trang , phù hợp cho mọi lứa tuổi nam nữ .
                chúng tôi cam kết về giá thành và chất lượng sản phẩm
                mà chúng tôi cung cấp cảm ơn sự tin tưởng của khách hàng đã dành cho chúng tôi!
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="./views/src/images/c2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Alina Hans
                  </h5>
                  <h6>
                    Customer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum
                dolore eu fugia
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end client section -->
<?php include "./views/footer.php"; ?>