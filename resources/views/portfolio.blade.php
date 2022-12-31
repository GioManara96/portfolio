<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/3ac5c91e2b.js" crossorigin="anonymous"></script>

    <!-- Chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('parts.menu')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2 class="mb-4">About me</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 text-center" data-aos="fade-right">
                    <img src="assets/img/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Full Stack Web Developer</h3>
                    <p class="fst-italic">
                        Sono un giovane sviluppatore web. Ho scoperto questa professione all'università e ho deciso di
                        renderla il mio futuro. Sono cordiale, disponibile e pronto a mettermi in gioco.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Nome:</strong> <span>Giovanni
                                        Manara</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Nascita:</strong> <span>25 Agosto
                                        1996</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Cellulare:</strong> <span>+39
                                        3466084544</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Città:</strong> <span>Padova (PD),
                                        Italia</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Età:</strong> <span
                                        id="age"></span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Titolo:</strong> <span>Laurea
                                        triennale</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>giovanni.manara96@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End About Me -->

        @include('parts.interessi')

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Uno sguardo sulla mia vita</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Chi sono</h3>
                    <div class="resume-item pb-0">
                        <h4>Giovanni Manara</h4>
                        <p><em>Un giovane web developer junior, fresco di formazione in full stack-web developing, sono
                                pronto a mettermi in gioco,
                                mettendo a disposizione le mie conoscenze, ma soprattuto ad imparare sempre cose nuove.
                            </em></p>
                        <p>
                        <ul>
                            <li>via Castelfidardo, 18bis, Padova (PD)</li>
                            <li>+39 3466084544</li>
                            <li>giovanni.manara96@gmail.com</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Formazione</h3>
                    <div class="resume-item">
                        <h4>Corso professionale per full-stack web developer</h4>
                        <h5>2022 - 2023</h5>
                        <p><em>Accademia Delle Professioni, Noventa Padovana, PD</em></p>
                    </div>
                    <div class="resume-item">
                        <h4>Laurea Magistrale in Bioinformatica</h4>
                        <h5>2019 - 2022</h5>
                        <p><em>Università TorVergata, Roma</em></p>
                        <p>Alle fine del 2019 mi sono iscritto a questo corso, attratto dal lato informatico che
                            offriva. Proprio qui
                            ho conosciuto per la prima volta le applicazioni web e ho deciso di cambiare rotta,
                            dedicandomi completamente
                            alla mia passione.
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Laurea triennale in Biotecnologie</h4>
                        <h5>2015 - 2019</h5>
                        <p><em>Università del Piemonte Orientale, Novara, NO</em></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Esperienza</h3>
                    @include('parts.esperienza')
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Skills acquisite</p>
            </div>

            <canvas id="myChart"></canvas>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('parts.projects')
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contatti</h2>
                <p>Contattami</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Indirizzo</h3>
                        <p>Via Castelfidardo, 18bis, Padova, PD</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Profili Social</h3>
                        <div class="social-links">
                            <?php
                            $socials = DB::table('aggiungi_socials')
                                ->orderBy('position', 'asc')
                                ->limit(2)
                                ->get();
                            ?>
                            @foreach ($socials as $social)
                                <a href="{{ $social->url }}" class="{{ $social->class }}" target="_blank"
                                    title="clicca per aprire la pagina social">
                                    <i class="bi bi-{{ $social->class }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>giovanni.manara96@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Chiamami</h3>
                        <p>+39 3466084544</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and powered by Laravel
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
