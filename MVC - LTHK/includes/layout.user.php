<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../assets/images/logo-lthk.png" type="image/x-icon" />
  <title><?= $title ?? 'La tribu happy kids' ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.css" />
  <link rel="stylesheet" href="../assets/css/aos.css" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.bis.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />

</head>

<body>
  <div class="section-wrapper">

    <!-- Navbar START  -->
    <header class="main-header sticky-top top-0 start-0 w-100 transition-300 d-flex align-items-center">
      <nav class=" navbar-expand-lg navbar-light col-11 mx-auto position-relative">

        <div class="menu-wrapper position-relative d-flex justify-content-between align-items-center white">
          <!-- Main logo -->
          <div class="left-navbar position-relative d-flex align-items-center">
            <div class="position-relative me-120">
              <a href="index.php">
                <img src="../assets/images/logo-lthk.png" class="nav-logo bradius-10"></img>
              </a>
            </div>
          </div>

          <!-- Navbar, avec point actif  -->
          <div class="collapse navbar-collapse navbar-links  align-items-center justify-content-center float-left">
            <ul class="navbar-nav navlist mx-auto">
              <li class="nav-item fsize-18 position-relative">
                <a class="nav-link
								 <?= activeLink('login', 'account') ?>" href="index.php">Accueil</a>
              </li>
              <li class="nav-item fsize-18 ms-5 position-relative">
                <a class="nav-link 
								<?= activeLink('about') ?>" href="index.php?action=about">Qui suis-je</a>
              </li>
              <li class="nav-item fsize-18 ms-5 position-relative">
                <a class="nav-link 
								<?= activeLink('shop', 'product', 'cart', 'checkout') ?>" href="index.php?action=shop"> Boutique </a>
              </li>
              <li class="nav-item fsize-18 ms-5 position-relative">
                <a class="nav-link 
								<?= activeLink('blog') ?>" href="index.php?action=blog">Blog</a>
              </li>
              <li class="nav-item fsize-18 ms-5 position-relative">
                <a class="nav-link 
								<?= activeLink('contact') ?>" href="index.php?action=contact">Contact</a>
              </li>
            </ul>
          </div>

          <!-- Panier et espace client -->
          <div class="connect-box d-flex flex-row align-items-center my-2 my-lg-0">
            <div>
              <a href="index.php?action=cart">
                <button type="button" class="btn btn-rounded-grey white bradius-35 border-0 position-relative">
                  <span class="cart-items position-absolute bradius-35"><?= artCount() ?></span>
                  <i class="fa-solid fa-cart-shopping fsize-12 d-flex justify-content-center align-items-center"> </i>
                </button>
              </a>
            </div>
            <div>
              <a href="index.php?action=account" class="connexion-link fsize-20 me-20 ms-2 my-sm-0 ">
                <b>Bonjour, <?= $_SESSION['pseudo'] ?></b>
              </a>
            </div>
          </div>

          <!-- Bouton hamburger  -->
          <a href="#" class="mobile-nav position-relative me-20 justify-content-end align-items-center transition-500">
            <span class="w-50 bg-white transition-500"></span>
          </a>

        </div>
      </nav>
    </header>
    <!-- Navbar END  -->

    <!-- Loader START -->
    <div class="loader bg-peach position-fixed top-0 start-0 h-100 w-100">
      <div class="fl fl-spinner spinner6">
        <div class="rect1 h-100 bg-white d-inline-block"></div>
        <div class="rect2 h-100 bg-white d-inline-block"></div>
        <div class="rect3 h-100 bg-white d-inline-block"></div>
        <div class="rect4 h-100 bg-white d-inline-block"></div>
        <div class="rect5 h-100 bg-white d-inline-block"></div>
      </div>
    </div>
    <!-- Loader END  -->



    <?= $content ?>



    <footer id="contact" class="mt-75 position-relative d-block pt-0 white bg-peach" data-aos="fade-up" data-aos-delay="100">
      <div class="footer-wrapper position-relative d-block px-0 pt-120 pb-100">
        <div class="container">
          <div class="row">

            <!-- Main logo et description  -->
            <div class="footer-widget-1 col-md-12 col-lg-6 col-xl-6 pe-5 " data-aos="fade-down" data-aos-delay="200">
              <div>
                <a href="index.php">
                  <img src="../assets/images/logo-lthk.png" class="nav-logo bradius-10"></img>
                </a>
              </div>
              <div>
                <p class="my-4 pe-5 fsize-16 lheight-32" data-aos="fade-up" data-aos-delay="200">
                  La Tribu Happy Kids est une communauté de spécialistes de l'enfance
                  et de mamans avec qui je partage mes astuces d'orthophonistes, des
                  activités de relaxation, des jeux autour des émotions ainsi que ma
                  passion pour mon metier !
                </p>
              </div>
            </div>

            <!-- Vertical navbar  -->
            <div class="footer-widget-2 col-md-6 col-lg3 col-xl-3">
              <h4 class="pb-4" data-aos="fade-right">Liens</h4>
              <ul class="list-unstyled links-list position-relative">
                <li class="mt-1 fsize-16 w-75" data-aos="fade-up"><a href="index.php" class="d-block position-relative transition-500">Accueil</a></li>
                <li class="mt-1 fsize-16 w-75" data-aos="fade-up"><a href="index.php?action=about" class="d-block position-relative transition-500 mt-18">Qui suis-je ?</a></li>
                <li class="mt-1 fsize-16 w-75" data-aos="fade-up"><a href="index.php?action=shop" class="d-block position-relative transition-500 mt-18">Boutique</a></li>
                <li class="mt-1 fsize-16 w-75" data-aos="fade-up"><a href="index.php?action=blog" class="d-block position-relative transition-500 mt-18">Blog</a></li>
                <li class="mt-1 fsize-16 w-75" data-aos="fade-up"><a href="index.php?action=contact" class="d-block position-relative transition-500 mt-18">Contact</a></li>
              </ul>
            </div>

            <!-- Réseaux sociaux et mail de contact  -->
            <div class="footer-widget-3 col-md-6 col-lg3 col-xl-3">
              <h4 class="pb-4" data-aos="fade-left">Contact</h4>
              <div class="footer-social d-flex flex-row py-20 px-0" data-aos="fade-up">
                <a href="https://www.facebook.com/latribuhappykids/" target="_blank" rel="nofollow" class="clr-fb mt-6 position-relative d-block transition-1400">
                  <span class="fa-brands fa-facebook-f lightPurple bg-white d-flex align-items-center justify-content-center bradius-50-percent"></span>
                </a>
                <a href="https://www.instagram.com/latribuhappykids/" target="_blank" rel="nofollow" class="clr-fb mt-6 ms-2 position-relative d-block transition-1400">
                  <span class="fa-brands fa-instagram lightPurple bg-white d-flex align-items-center justify-content-center bradius-50-percent"></span>
                </a>
                <a href="https://www.tiktok.com/@latribuhappykids/" target="_blank" rel="nofollow" class="clr-fb mt-6 ms-2 position-relative d-block transition-1400">
                  <span class="fa-brands fa-tiktok lightPurple bg-white d-flex align-items-center justify-content-center bradius-50-percent"></span>
                </a>
              </div>
              <p data-aos="fade-up" data-aos-delay="50">
                <a href="mailto:latribuhappykids@gmail.com" class="contact-mail">
                  <u>latribuhappykids@gmail.com</u>
                </a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- section-wrapper END  -->


  <!-- Scroll-to-top  -->
  <a href="#" class="to-top position-fixed bottom-50 end-50 bradius-50-percent z-200 d-flex align-items-center justify-content-center fsize-40 transition-400 intensePurple bg-white">
    <i class="fa-solid fa-circle-chevron-up"></i>
  </a>


  <!-- Hamburger START  -->
  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay "></div>
    <div class="mobile-nav__content bg-peach position-relative h-100 py-30 px-20 transition-500 z-10">
      <span class="mobile-nav__close position-absolute top-20 end-20 d-block"></span>

      <!-- Main logo  -->
      <div class="logo-box d-flex justify-content-center align-items-center mt-1 mb-5">
        <a href="index.php" aria-label="logo image"><img class="nav-logo bradius-10" src="../assets/images/logo-lthk.png" alt="" width="155"></a>
      </div>

      <!-- Vertical navbar  -->
      <div class="mobile-nav__container mt-3">
        <ul class="navbar-nav white mx-auto py-20">
          <li class="nav-item ms-4 position-relative transition-500">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item ms-4 position-relative transition-500">
            <a class="nav-link" href="index.php?action=about">Qui suis-je</a>
          </li>
          <li class="nav-item ms-4 position-relative transition-500">
            <a class="nav-link" href="index.php?action=shop"> Boutique </a>
          </li>
          <li class="nav-item ms-4 position-relative transition-500">
            <a class="nav-link" href="index.php?action=blog">Blog</a>
          </li>
          <li class="nav-item ms-4 position-relative transition-500">
            <a class="nav-link" href="index.php?action=contact">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Réseaux sociaux  -->
      <div class="mobile-nav__social my-2">
        <div class="d-flex justify-content-evenly align-items-center">
          <a href="https://www.facebook.com/latribuhappykids/" target="_blank" class="bg-transparent bradius-50-percent transition-500 d-flex align-items-center justify-content-center text-center">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/latribuhappykids/" target="_blank" class="bg-transparent bradius-50-percent transition-500 d-flex align-items-center justify-content-center text-center">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="https://www.tiktok.com/@latribuhappykids" target="_blank" class="bg-transparent bradius-50-percent transition-500 d-flex align-items-center justify-content-center text-center">
            <i class="fa-brands fa-tiktok"></i>
          </a>
        </div>
      </div>

      <!-- Panier et espace client  -->
      <div class="mobile-connect__box pt-4 mx-auto d-flex justify-content-center align-items-center">
        <div>
          <a href="index.php?action=cart">
            <button type="button" class="btn btn-rounded-grey white bradius-35 border-0 position-relative">
              <span class="cart-items position-absolute bradius-35"><?= artCount() ?></span>
              <i class="fa-solid fa-cart-shopping fsize-12 d-flex justify-content-center align-items-center">
              </i>
            </button>
          </a>
        </div>
        <div>
          <a href="index.php?action=account" class="connexion-link fsize-20 me-20 ms-2 my-sm-0 ">
            <b>Bonjour, <?= $_SESSION['pseudo'] ?></b>
          </a>
        </div>
      </div>

    </div>
  </div>
  <!-- Hamburger END  -->


  <!-- Script JS	-->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/swiper-bundle.js"></script>
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/app.js"></script>
</body>

</html>