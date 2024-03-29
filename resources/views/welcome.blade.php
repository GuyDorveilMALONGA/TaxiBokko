<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  </script>

  <title>TaxiSûr</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/favicon.png') }}') }}" rel="icon">
  <link href="{{ asset('images/apple-touch-icon.png') }}') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">Taxi<span>Sûr</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li class="dropdown"><a href="#passagers"><span>Passagers</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#cc">Comment ça marche</a></li>
              <li><a href="#prix">Nos prix & engagements</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#chauffeurs"><span>Chauffeurs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#cc1">Comment ça marche</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#business"><span>Business</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#cc2">Comment ça marche</a></li>
              <li><a href="#tarif">Les offres Smart Busiess</a></li>
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/register-driver" class="get-started-btn scrollto">Inscriptions</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image:url({{ asset('images/taxi1.jpg') }})">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>WELCOME</h1>
          <h2>Le vtc local qui vous accompagne en toute sécurité dans tous vos trajets.</h2>
          <hr>
          <a href="https://www.apple.com/app-store/"><img src="images/appstore.png" class="img-thumbnail" alt="playstore m-4" style="background-color:transparent; border:0em; margin-bottom:5px "></a>
          
          <a href="https://play.google.com/store/apps?hl=fr&gl=US"><img src="images/playstore.png" class="img-thumbnail" alt="playstore m-4" style="background-color:transparent; border:0em; margin-bottom:5px "></a>

        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-roadster-fill"></i>
            <h3><a href="/login">Compte Passager</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-steering-2-fill"></i>
            <h3><a href="/login-driver">Compte Chauffeur</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-hand-coin-fill"></i>
            <h3><a href="/#cc2">Compte Business</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color:#f7f7f7">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('images/im9.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>A propos de TaxiSûr</h3>
            <p class="fst-italic">
            Le meilleur choix de transport pour une agréable journée.
            </p>
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> -->
            <p>
              TaxiSûr est le service VTC à la demande qui vous accompagnera en toute sécurité dans tous vos déplacements locaux.
            </p>
            <p>Via notre application vous pourrez commander votre chauffeur et vous déplacer vers la destination de votre choix en indiquant simplement la géolocalisation de votre destination finale.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- PASSAGER -->
    <!-- ======= Services Section ======= -->
    <section id="cc" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Passagers</h2>
          <p>Comment ça marche ?</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-devices"></i></div>
              <!-- <h4><a href="">Lorem Ipsum</a></h4> -->
              <p>Activez l’application TaxiSûr, saisissez votre destination via géolocalisation puis validez le montant estimé de votre trajet.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <!-- <h4><a href="">Sed ut perspiciatis</a></h4> -->
              <p>Votre chauffeur, vous récupère et vous dépose en toute sécurité à la destination indiquée.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-star-half"></i></div>
              <!-- <h4><a href="">Magni Dolores</a></h4> -->
              <p>Vous recevrez votre facture et pourrez noter votre trajet et votre chauffeur.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="prix" class="features">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Passagers</h2>
        <p>Nos prix et engagements</p>
      </div>

        <div class="row">
          <div class="image col-lg-6" style='background-image: url({{ asset("images/unnamed.png")}});' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Sécurité</h4>
              <p>Vous pouvez compté sur nous pour la sécurité et la confidentialité</p>
            </div>
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bxs-timer"></i>
              <h4>Ponctualité</h4>
              <p>Nous sommes à votre disposition, votre heure c'est notre heure</p>
            </div>
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Discrétion</h4>
              <p>Dans le calme nous faisons, chez nous vous vous sentiriez comme chez vous</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->
<!-- FIN PASSAGER -->

<!-- CHAUFFEURS -->
    <!-- ======= Services Section ======= -->
    <section id="cc1" class="services" style="background-color:#ffc107">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chauffeurs</h2>
          <p>Comment ça marche ?</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-devices"></i></div>
              <!-- <h4><a href="">Lorem Ipsum</a></h4> -->
              <p>Activez l’application TaxiSûr, saisissez votre destination via géolocalisation puis validez le montant estimé de votre trajet.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <!-- <h4><a href="">Sed ut perspiciatis</a></h4> -->
              <p>Votre chauffeur, vous récupère et vous dépose en toute sécurité à la destination indiquée.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-star-half"></i></div>
              <!-- <h4><a href="">Magni Dolores</a></h4> -->
              <p>Vous recevrez votre facture et pourrez noter votre trajet et votre chauffeur.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
<!-- FIN CHAUFFEURS -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Essayer pour voir plus</h3>
          <p class="text">Nos brix sont tres abordables</p>
          <a class="cta-btn" href="#">Prix</a>
          <a class="cta-btn" href="#">Engagement</a>
        
        
        </div>

      </div>
    </section><!-- End Cta Section -->

    <section id="cc2" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Business</h2>
          <p>Business</p>
        </div>

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>RESERVER VOTRE CHAUFFEUR EN AVANCE<br/> Planning chauffeur bloqué au moment de votre réservation.</h3>
            <p>Un prix fixe est communiqué à l’avance, aucune majoration
              Un accueil privilégié aux Aéroports, attente avec pancarte gratuite.</p>
            <p>Suivi de l’arrivée de vol ou de train
              Vous recevez le numéro de votre chauffeur par SMS.</p>
          </div>
          <div class="offset-lg-1 col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <!-- <h4><a href="">Sed ut perspiciatis</a></h4> -->
              <p>Infos flash</p>
              <ul>
                <li><i class="ri-check-double-line"></i> Vous pouvez comme tous nos clients fideles beneficié des reductions.</li>
                <li><i class="ri-check-double-line"></i> Tenter de remporter nos t-shirt, en prenant 2 courses dans la joiurnée.</li>
                <li><i class="ri-check-double-line"></i> Le meillleur du confort, c'est chez nous.</li>
              </ul>
              <a href="#contact" class="get-started-btn scrollto" style="color:black">Contactez-notre Equipe</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contactez nous</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rue lib 109 SICAP LIBERTE IV</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>guydorveilmalonga@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Phone:</h4>
                <p>+221 77 762 99 53</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Message envoyé !!!</div>
              </div>
              <div class="text-center"><button type="submit">Laissez nous un message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ISI<span>.</span></h3>
              <p>
                Medina <br>
                Groupe ISI<br><br>
                <strong>Phone:</strong> +221 77 762 99 53<br>
                <strong>Email:</strong> guydorveilmalonga@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Transport</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Logistique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Livraison</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Entretien</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Boite aux lettres</h4>
            <p>Vous pouvez vous abonnez à notre boite aux lettres</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="s'inscrire">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2023 <strong><span>ISI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Guy Dorveil MAlONGA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>


</body>



</html>