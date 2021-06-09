<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="<?= base_url(); ?>index.html" class="logo"><img src="assets/img/R_logo.png" alt="" class="img-fluid"></a>
    <!-- Uncomment below if you prefer to use an text logo -->
    <!-- <h1 class="logo"><a href="<?= base_url(); ?>index.html">Folio</a></h1> -->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link  scrollto" href="#journal">Blog</a></li>
        <li id="mode">
          <label class="switch">
            <input type="checkbox" id="checkbox_theme">
            <span class="slider round"></span>
            <i class="bi bi-sun-fill"></i>
            <i class="bi bi-moon-fill"></i>
          </label>
        </li>
        <!-- <li class="dropdown"><a href<?= base_url(); ?>="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href<?= base_url(); ?>="#">Drop Down 1</a></li>
              <li class="dropdown"><a href<?= base_url(); ?>="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href<?= base_url(); ?>="#">Deep Drop Down 1</a></li>
                  <li><a href<?= base_url(); ?>="#">Deep Drop Down 2</a></li>
                  <li><a href<?= base_url(); ?>="#">Deep Drop Down 3</a></li>
                  <li><a href<?= base_url(); ?>="#">Deep Drop Down 4</a></li>
                  <li><a href<?= base_url(); ?>="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href<?= base_url(); ?>="#">Drop Down 2</a></li>
              <li><a href<?= base_url(); ?>="#">Drop Down 3</a></li>
              <li><a href<?= base_url(); ?>="#">Drop Down 4</a></li>
            </ul>
          </li> -->
        <!-- <li><a class="nav-link scrollto" href<?= base_url(); ?>="#contact">Contact</a></li>
        <li class="dropdown"><a href<?= base_url(); ?>="#"><i class="bi bi-palette "></i></i></a>  
          <ul> 
            
            <li><a href<?= base_url(); ?>="#">
              <input type="radio" name="light" id="light">
              <label for="light">Light Mode</label>
            </a></li>
            <li><a href<?= base_url(); ?>="#">Drop Down 2</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <div class="flex">
            <input type="checkbox" class="checkbox_theme" id="checkbox_theme">
            <label for="checkbox_theme" type="button" onclick="button();" class="label_theme">
              <i class="bi bi-sun-fill"></i>
              <i class="bi bi-moon-stars-fill"></i>
              <div class="ball"></div>
            </label>
            <label for="checkbox_theme" type="button" onclick="button2();" class="label_theme2">
              <i class="bi bi-sun-fill"></i>
              <i class="bi bi-moon-stars-fill"></i>
              <div class="ball"></div>
            </label>
          </div>
        </li> -->
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div id="hero" class="home">

  <div class="container">
    <div class="hero-content">
      <!-- <h1>R<span class="typed_R" data-typed-items="if, iz"></span></h1> -->
      <h1>We are <span class="typed" data-typed-items=" R_"></span>
      </h1>
      <!-- <p><span class="typed_R" data-typed-items="This is my portfolio. Where I showcase my work."></span></p> -->
      <!-- <p>This is my portfolio, Where I showcase my work.</p> -->
      <p>Designer, Developer, And Blogger</p>

      <ul class="list-unstyled list-social">
        <li><a href<?= base_url(); ?>="#"><i class="bi bi-facebook"></i></a></li>
        <li><a href<?= base_url(); ?>="#"><i class="bi bi-twitter"></i></a></li>
        <li><a href<?= base_url(); ?>="#"><i class="bi bi-instagram"></i></a></li>
        <li><a href<?= base_url(); ?>="#"><i class="bi bi-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="assets/img/me.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">We're Designers, Developers, Bloggers</p>
            <p class="separator">We are students of a fourth semester informatics study on a college in the city of
              Jombang.</p>

          </div>

        </div>
      </div>
    </div>
  </div><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <div id="services">
    <div class="container">

      <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="services-block">
              <i class="bi bi-briefcase"></i>
              <span>UI/UX DESIGN</span>
              <p class="separator">Although not as an expert designer, we will strive to make the most of our designs.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="services-block">
              <i class="bi bi-card-checklist"></i>
              <span>WEB DEVELOPER</span>
              <p class="separator">Although not as an expert developer, we will strive to make the most of our work.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="services-block">
              <i class="bi bi-bar-chart"></i>
              <span>WEB DESIGN</span>
              <p class="separator">Although not as an expert designer, we will strive to make the most of our designs.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="services-block">
              <i class="bi bi-binoculars"></i>
              <span>ANDROID APPS</span>
              <p class="separator">Although not as an expert developer, we will strive to make the most of our work.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="services-block">
              <i class="bi bi-brightness-high"></i>
              <span>Blogger</span>
              <p class="separator">To an English person, it will seem like simplified English,told me what </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </div><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title section-portfolio text-center">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url(); ?>portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Journal Section ======= -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>journal</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-3 col-md-2">
            <div class="journal-info">

              <a href="blog-single.html"><img src="<?= base_url(); ?>assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="<?= base_url(); ?>blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                <p class="separator">To an English person, it will seem like simplified English
                </p>

              </div>

            </div>
          </div>
          
        </div>
      </div>
    </div>

  </div><!-- End Journal Section -->

  <!-- ======= Contact Section ======= -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>Jl. K.H Wahab Hasbullah</span></li>
                <li><span>Tambakberas, Jombang, East Java</span></li>
                <li><span>+62 8885092116 & +nomer mu piro hab</span></li>
                <li><span>Rif&Riz_portfolio@gmail.com</span></li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-3">

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="mt-0">
                  <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Contact Section -->

</main><!-- End #main -->