  <!-- info section -->

  <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 info_col">
            <div class="info_contact">
              <h4><?=$footAddress?></h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span> <?=$navLocation?> </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span><?=$navPhone?></span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span> <?=$navEmail?> </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 info_col">
            <div class="info_detail">
              <h4><?=$footInfo?></h4>
              <p>
                <?=$footPara?>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto info_col">
            <div class="info_link_box">
              <h4><?=$footLinks?></h4>
              <div class="info_links">
                <a class="active" href="index.php">
                  <img src="images/nav-bullet.png" alt="" />
                  <?=$navHome?>
                </a>
                <a class="" href="about.php">
                  <img src="images/nav-bullet.png" alt="" />
                  <?=$navAbout?>
                </a>
                <a class="" href="service.php">
                  <img src="images/nav-bullet.png" alt="" />
                  <?=$navServices?>
                </a>
                <a class="" href="contact.php">
                  <img src="images/nav-bullet.png" alt="" />
                  <?=$navContact?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 info_col">
            <h4><?=$footSubscribe?></h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit"><?=$footSubscribe?></button>
            </form>
          </div>
        </div>
      </div>
    </section>