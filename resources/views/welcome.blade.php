<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Lourenna Fernandes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/SIMBOLO FUNDO BRANCO.pdf.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

  <!-- ========================================================
  * Template Name: Append
  * Updated: Jun 01 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <!-- ======= Header ======= -->
  <header class="header d-flex align-items-center sticky-top" id="header">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center me-auto me-xl-0" href="index.html">

        <h1>Lourenna Fernandes</h1>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Inicio</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#team">Equipe</a></li>
          <li><a href="#contact">Contatos</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a href="http://legalcodesolution.test/admin" target="_blank" class="btn-getstarted"><i class="bi bi-person-fill"></i></a>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="{{ asset('img/capafbLayout.png') }}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Bem-vindos!</h2>
          </div>
          <div class="col-lg-5">
            <p>Informe seus dados é iremos entrar em contato via WhatsApp.</p>
            <livewire:formcliente/>

          </div>
        </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    <section id="clients" class="clients">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter" class="img-fluid" alt=""></i></a>
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook" class="img-fluid" alt=""></i></a>
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://br.linkedin.com/" target="_blank"><i class="bi bi-linkedin" class="img-fluid" alt=""></i></a>
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube" class="img-fluid" alt=""></i></a>
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <a href="https://www.reddit.com" target="_blank"><i class="bi bi-reddit" class="img-fluid" alt=""></i></a>
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
        
       
          <div class="col-xl-5 content">
            <h3>Sobre nós</h3>
            <h2>{{ $sobre['titulo'] }}</h2>
            <p>{{ $sobre['subtitulo'] }}</p>
            <!--<a href="portfolio-details.html" class="read-more"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>--->
          </div>
        

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">
            @foreach ($destaques as $info)
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                <img src="{{asset('img/'.$info['imagem'])}}" alt="" class="">
                  <h3>{{ $info['titulo']}}</h3>
                  <p>{{ $info['descricao']}}</p>
                </div>
              </div> <!-- End Icon Box -->
            @endforeach
            </div>

          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!---info session-->
    <section id="container-200" class="container-200">

      <div class="container-200" data-aos="fade-up" data-aos-delay="600">
        <div class="row 5 gy">
          <div id="box"class="info" >
            <i class="bi bi-eye" style="font-size: 50px"></i>
            <h3>Visão</h3>
            <p>{{ $sobre['visao'] }}</p>
          </div>
          <div id="box" class="info">
            <i class="bi bi-bullseye" style="font-size: 50px"></i>
            <h3>Missão</h3>
              <p>{{ $sobre['missao'] }}</p>
          </div>
          <div id="box" class="info">
            <i class="bi bi-house-heart" style="font-size: 50px"></i>
            <h3>Valores</h3>
            <p>{{ $sobre['valores'] }}</p>
          </div>
        </div>
      </div>

    </section>

 <!-- Service Section - Home Page -->
    <section id="services" class="faq">

      <div class="container">
        <!-- Services Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Serviços</h2>
        </div><!-- End Section Title -->
      
        @foreach ($servico as $texto)
            <div class="row gy-4">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                  <div class="faq-container">
                    <div class="faq-item">
                      <h3><span class="num"> <div class="icon flex-shrink-0"><i class="bi bi-caret-right-fill"></i></div></span><span>{{ $texto['titulo'] }}</span></h3>
                      <div class="faq-content">
                        <p>{{ $texto['descricao'] }}</p>
                      </div>
                      <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                  </div>
            </div>
          @endforeach
      </div>
    </section><!-- End Faq Section -->
      


      <!-- Team Section - Home Page -->
      <section id="team" class="team">

          <div class="container" >
            <div class="row gy-5">
              <div class="container-88" data-aos="fade-up" data-aos-delay="100">
              <!--  Section Title--->
                <div class="container section-title">
                  <h2>Nossa Equipe</h2>
                </div>
              <!---- End Section Title -->
                 
                @foreach ($equipe as $pessoa)

                <div class="card" >
                  <div class="image"> 
                    <img src="{{ asset('img/'.$pessoa['foto']) }}" alt="" class="img">
                  </div>

                  <div class="content-card">
                    <h4>{{ $pessoa['nome'] }}</h4>
                    <h6>{{ $pessoa['subtitulo'] }}</h6>
                    <p>{{ $pessoa['texto'] }}</p>
                    <p><i class="fa-solid fa-building-columns"></i><strong>{{ $pessoa['formacao'] }}</strong></p>
                  
                  </div>
                </div>
                @endforeach

            </div>
          </div>
        </div> 
      </section><!-- End Team Section -->


    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!-- Contact Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contatos</h2>
        <p>Estamos aqui para ouvir você e ajudar a solucionar suas questões jurídicas. Seja para esclarecer dúvidas, agendar uma consulta ou buscar assistência legal, nossa equipe está pronta para atendê-lo(a) com profissionalismo e dedicação.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        
        <div class="info-center">
          <div>

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Endereço</h3>
                  <p>{{ $contato['endereco'] }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Telefone</h3>
                  <p>{{ $contato['telefone'] }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>E-mail</h3>
                  <p>{{ $contato['email'] }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Atendimento</h3>
                  <p>{{ Carbon\Carbon::parse($contato['atendimento'])->format('d/m/Y') }}</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>
        </div>
      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Lourenna Fernandes</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="/"><i class="fa-solid fa-house"></i></a>
            <a href="#about" ><i class="bi bi-file-person"></i></a>
            <a href="#servicos"><i class="bi bi-list-check"></i></i></a>
            <a href="#contact" ><i class="bi bi-telephone-fill"></i></a>
          </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Lourenna Fernandes</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/append-bootstrap-website-template/ -->
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>


  
  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }} "></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js ') }} "></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }} "></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }} "></script>
  <script src="{{ asset('vendor/aos/aos.js') }} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }} "></script>

  <!--js awesome-->
  <script src="https://kit.fontawesome.com/c1b6724cd2.js" crossorigin="anonymous"></script>

</body>

</html>