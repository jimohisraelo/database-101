<header class="header_section">
        <div class="header_top">
          <div class="container-fluid">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> <?=$navPhone?> </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> <?=$navEmail?> </span>
              </a>
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> <?=$navLocation?> </span>
              </a>
            </div>
          </div>
        </div>
        <div class="header_bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="index.php">
                <span> <?=$navHeader?> </span>
              </a>

              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class=""> </span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"
                      ><?=$navHome?> <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.php"><?=$navServices?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> <?=$navAbout?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?=$navContact?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-user" aria-hidden="true"></i> <?=$navLogin?></a
                    >
                  </li>
                  <form class="form-inline">
                    <button
                      class="btn my-2 my-sm-0 nav_search-btn"
                      type="submit"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>