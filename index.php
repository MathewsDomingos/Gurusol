<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="author" content="Mateus Domingos Felipe" />
  <meta name="description" content="Gurusol - Energia Solar" />
  <title>Gurusol Energia Solar</title>
  <link href="assets/images/favicon/favicon.png" rel="icon" />

  <!--  Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
    rel="stylesheet" />

  <!--  Stylesheets-->
  <link href="assets/css/vendor.min.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- biblioteca de icones -->
  <script src="https://kit.fontawesome.com/5a85d5d3cc.js" crossorigin="anonymous"></script>

  <!-- Acessibilidade -->
  <script src="assets/js/vendor/libras.js"></script>
  <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

  <!-- Politica de privacidade (COOKIES)-->
  <script type="text/javascript" id="cookieinfo" src="assets/js/cookies.js"></script>
</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="dual-ring"></div>
  </div>

  <!-- WhatsApp Flutuante -->
  <div class="container-whatsapp-btn" id="whatsapp-btn"><a class="floatBtn-icon-wpp-storage" target="_blank"
      href="http://web.whatsapp.com/send?phone=+5563999460589"><img class="icon-wpp-storage"
        src="assets/imagens/whatsapp-icone.svg"></a></div>

  <!-- Acessibilidade -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <!-- Document Wrapper-->
  <div class="wrapper clearfix" id="wrapperParallax">
    <!-- 
      ============================
      Header
      ============================
      -->
      <?php include("./sections/header.php");?>
    <!-- End .header-->

    <!-- 
      ============================
      Slider #1 Section
      ============================
      -->
    <section class="slider slider-1" id="slider-1">
      <div class="container-fluid pe-0 ps-0">
        <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
          data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
          <!--  Start .slide-->
          <div class="slide bg-overlay bg-overlay-dark-slider">
            <div class="bg-section"><img src="assets/imagens/home_slider_1.jpg" alt="Background" /></div>
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-7">
                  <div class="slide-content">
                    <h1 class="slide-headline">A energia solar fotovoltaica é
                      limpa, gratuita e não agride o meio ambiente</h1>
                    <p class="slide-desc">Energia Sustentável</p>
                    <div class="slide-action">
                      <div class="slide-list">
                        <div class="icon"> <i class="flaticon-040-green-energy"></i></div>
                        <div class="icon"> <i class="flaticon-020-factory"></i></div>
                        <div class="icon"> <i class="flaticon-031-nuclear-plant"></i></div>
                      </div><a class="btn btn--primary" href="page-services.html"> <span>Saiba mais</span><i
                          class="energia-arrow-right"></i></a>
                    </div>
                  </div>
                  <!-- End .slide-content -->
                </div>
                <div class="col-12 col-lg-3 offset-lg-2 d-flex">
                  <div class="slider-panel-holder">
                    <div class="slider-panel"><i class="panel-icon flaticon-028-greenhouse"></i>
                      <h5 class="panel-title">Nossa Missão</h5>
                      <p class="panel-desc">Oferecer economia, segurança, qualidade, agilidade e satisfação ao nosso
                        cliente..</p><a href="page-services.html"><i class="energia-arrow-right"> </i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End .row-->
            </div>
            <!-- End .container-->
          </div>
          <!-- End .slide-->
          <!--  Start .slide-->
          <div class="slide bg-overlay bg-overlay-dark-slider">
            <div class="bg-section"><img src="assets/imagens/sliders/1.jpg" alt="Background" /></div>
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-7">
                  <div class="slide-content">
                    <h1 class="slide-headline">Produza sua própria eletricidade
                      &amp; economize na conta de luz.</h1>
                    <p class="slide-desc">Economize até 95%.</p>
                    <div class="slide-action">
                      <div class="slide-list">
                        <div class="icon"> <i class="flaticon-040-green-energy"></i></div>
                        <div class="icon"> <i class="flaticon-020-factory"></i></div>
                        <div class="icon"> <i class="flaticon-031-nuclear-plant"></i></div>
                      </div><a class="btn btn--primary" href="page-services.html"> <span>Saiba Mais</span><i
                          class="energia-arrow-right"></i></a>
                    </div>
                  </div>
                  <!-- End .slide-content -->
                </div>
                <div class="col-12 col-lg-3 offset-lg-2 d-flex">
                  <div class="slider-panel-holder">
                    <div class="slider-panel"><i class="panel-icon flaticon-019-electric-tower"></i>
                      <h5 class="panel-title">Nossa Visão</h5>
                      <p class="panel-desc">Fornecer energia limpa, com excelência e com preço justo.</p><a
                        href="page-services.html"><i class="energia-arrow-right"> </i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End .row-->
            </div>
            <!-- End .container-->
          </div>
          <!-- End .slide-->
        </div>
        <!-- End .slider-carousel-->
      </div>
      <!--  End .container-fluid-->
    </section>
    <!--
      ============================
      About #1 Section
      ============================
      -->
    <section class="about about-1" id="about-1">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="about-img">
              <div class="about-img-holder bg-overlay">
                <div class="bg-section"><img src="assets/imagens/capa_sobreNos.jpg" alt="about Image" /></div>
              </div>
              <div>
                <!-- Start .counter-->
                <div class="counter">
                  <div class="counter-icon"> <i class="flaticon-033-plug"></i></div>
                  <div class="counter-num"> <span class="counting" data-counterup-nums="954">34</span>
                    <p></p>
                  </div>
                  <div class="counter-name">
                    <h6>Clientes Felizes</h6>
                  </div>
                </div>
                <!-- End .counter-->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-7">
            <div class="heading heading-1">
              <p class="heading-subtitle heading-subtitle-bg">Sistemas Solares Comerciais E Residenciais Completos</p>
              <h2 class="heading-title">Somos Pioneiros No Mundo Da Energia Solar E Renovável!</h2>
            </div>
            <div class="about-block">
              <div class="row">
                <div class="col-12 col-lg-7">
                  <div class="block-left">
                    <p class="paragraph">A Gurusol é uma empresa com atuação no ramo de energia solar em Gurupi e região
                      desde agosto/2021, oferecemos aos nossos clientes sistemas fotovoltaicos on-grid e off-grid, em
                      projetos residenciais, comerciais e rurais. <br />
                      Nossa empresa é constituída por profissionais altamente qualificados, visando atender de forma
                      personalizada o cliente, onde os projetos de engenharia e instalação são realizados
                      internamente, passando ao cliente maior segurança e confiabilidade.

                    </p><a class="btn btn--secondary" href="page-about.html">Saiba Mais <i
                        class="energia-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-12 col-lg-5">
                  <div class="block-right">
                    <div class="prief-set">
                      <p>Contamos com ampla linha de módulos solares fotovoltaicos de diversas potências,
                        microinversores e inversores adequados para todas as aplicações desde pequenos sistemas de
                        bombeamento de água e cercas elétricas até sistemas conectados à rede.
                      </p>
                      <ul class="list-unstyled advantages-list">
                        <li>Redução na conta de luz.</li>
                        <li>Eletricidade em áreas remotas.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      Features #1 Section
      ============================
      -->
    <section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
      <div class="bg-section"> <img src="assets/images/background/2.jpg" alt="Background" /></div>
      <div class="container">
        <div class="heading heading-2 heading-light heading-light2">
          <div class="row">
            <div class="col-12 col-lg-5">
              <p class="heading-subtitle">Energia Sustentável, Confiável E Acessível!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-5">
              <h2 class="heading-title">Fornecendo Valor Aos Nossos Clientes Por Meio De Produtos E Inovação Contínuos.
              </h2>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
              <p class="heading-desc">Ao mesmo tempo em que melhora o rendimento e o desempenho dos produtos de energia
                solar, nossa experiência no setor fotovoltaico nos permite fornecer conhecimentos aprofundados de
                fornecimento de materiais, financiamento e cadeia de suprimentos para cada etapa.</p>

              <div class="actions-holder"><a class="btn btn--primary btn--inversed" href="page-contact.html">
                  Contate-Nos<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                  href="page-services.html">Nossas Soluções</a></div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .heading-->
        <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true"
          data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                <div class="feature-content">
                  <h4>Poupe seu dinheiro</h4>
                  <p>Economize dinheiro em serviços públicos ou aumente o valor de sua casa instalando painéis solares
                    como um ótimo <br />
                    opção.</p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                <div class="feature-content">
                  <h4>Casa é energia</h4>
                  <p>Todos os dias o sol nos fornece abundância de energia gratuita, colocando painéis solares em seu
                    telhado. <br /><br />
                  </p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-026-world"></i></div>
                <div class="feature-content">
                  <h4>Consultar &amp; Planejar</h4>
                  <p>Nossos sistemas solares industriais remotos são projetados para alimentar de forma confiável nossos
                    clientes críticos.<br /><br /></p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-008-plant"></i></div>
                <div class="feature-content">
                  <h4>Engenheiros certificados</h4>
                  <p>Nossos engenheiros de vendas em nossa equipe têm experiência e podem projetar qualquer sistema
                    solar completo.</p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                <div class="feature-content">
                  <h4>Poupe seu dinheiro</h4>
                  <p>Economize dinheiro em serviços públicos ou aumente o valor de sua casa instalando painéis solares
                    como um ótimo opção.<br /></p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
          <div>
            <div class="feature-panel-holder" data-hover="">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                <div class="feature-content">
                  <h4>Casa é energia</h4>
                  <p>Todos os dias o sol nos fornece abundância de energia gratuita, colocando painéis solares em seu
                    telhado. <br /><br />
                  </p>
                </div><a href="page-services.html"><i class="energia-arrow-right"></i> <span>Saiba mais</span> </a>
              </div>
              <!-- End .feature-panel-->
            </div>
          </div>
        </div>
        <!-- End .carousel-->
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="more-features">
              <p>Se você tiver alguma dúvida ou precisar de ajuda, sinta-se à vontade para entrar em contato com nossa
                equipe ou ligue para nós a qualquer momento
                <a href="tel:63 9 9946-0589">(63) 9 9946-0589</a>
              </p><a class="btn btn--bordered btn--white" href="page-contact.html">
                Orçamento Grátis<i class="energia-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-8">
            <!--
              ============================
              Video #1 Section
              ============================
              -->
            <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
              <div class="bg-section"><img src="assets/imagens/servicos/capa_video.jpg" alt="background" /></div><a
                class="popup-video btn-video" href="assets/imagens/servicos/video.mp4"> <i
                  class="fas fa-play"></i><span>Assista Nosso Video</span></a>
              <!-- End .popup-video-->
            </div>
          </div>
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      services #1 Section
      ============================
      -->
    <section class="services services-1 bg-grey" id="services-1">
      <div class="container">
        <div class="heading heading-3 text-center">
          <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
              <p class="heading-subtitle">Energize A Sociedade Com Energia Sustentável!</p>
              <h2 class="heading-title">Nossas Soluções.</h2>
            </div>
            <!-- End .col-lg-6-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .heading-->
        <div class="carousel owl-carousel carousel-dots dots-side" data-slide="3" data-slide-rs="1" data-autoplay="true"
          data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
          <div>
            <div class="service-panel">
              <div class="service-icon"><i class="flaticon-004-solar-panel"></i></div>
              <div class="service-content">
                <h4><a href="page-services.html">serviços de painéis<br />solares</a></h4>
                <p>O melhor dos painéis solares é que eles não exigem muita manutenção. No entanto, ainda
                  importante que sejam verificados regularmente</p>
                <ul class="list-unstyled advantages-list">
                  <li>Redução de altas contas de luz.</li>
                  <li>Eletricidade em áreas remotas.</li>

                </ul><a class="btn btn--secondary" href="page-services.html">Saiba Mais<i
                    class="energia-arrow-right"></i></a>
              </div>
            </div>
            <!-- End .service-panel-->
          </div>

          <div>
            <div class="service-panel">
              <div class="service-icon"><i class="fa-solid fa-bolt"></i></div>
              <div class="service-content">
                <h4><a href="page-services.html">Projetos<br />Elétricos</a></h4>
                <p>projetos de instalações elétricas, voltada para os mercados residenciais, comerciais e industriais de
                  pequeno e médio porte.</p>
                <ul class="list-unstyled advantages-list">
                  <li>Pontos de iluminação</li>
                  <li>Residencial & Comercial</li>

                </ul><a class="btn btn--secondary" href="page-services.html">Saiba Mais<i
                    class="energia-arrow-right"></i></a>
              </div>
            </div>
            <!-- End .service-panel-->
          </div>
        </div>
        <!-- End .carousel-->
        <div class="more-services">
          <p>Sistemas de energia sustentáveis, confiáveis ​​e acessíveis, <a href="page-contact.html">Encontre Sua
              Solução Agora!
            </a></p>
        </div>
        <!-- End more-services-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      Testimonials #1 Section
      ============================
      -->
    <section class="testimonial testimonial-1 bg-theme2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="carousel owl-carousel carousel-nav carousel-dots" data-slide="2" data-slide-rs="1"
              data-autoplay="true" data-nav="true" data-dots="true" data-space="40" data-loop="true" data-speed="800">
              <div class="testimonial-panel">
                <div class="testimonial-body">
                  <div class="testimonial-img"> <img src="websitego.jpeg" alt="Testimonial Author" />
                  </div>
                  <div class="testimonial-content">
                    <p>“Testo de exemplo, testo de exemplo testo de exemplo testo de exemplo testo de exemplo testo de
                      exemplo testo de exemplo testo de exemplo testo de exemplo testo de exemplo.”</p>
                    <div class="testimonial-meta">
                      <h6>(Nome da pessoa)</h6>
                      <p>(Empresa)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-panel">
                <div class="testimonial-body">
                  <div class="testimonial-img"> <img src="websitego.jpeg" alt="Testimonial Author" />
                  </div>
                  <div class="testimonial-content">
                    <p>“Testo de exemplo, testo de exemplo testo de exemplo testo de exemplo testo de exemplo testo de
                      exemplo testo de exemplo testo de exemplo testo de exemplo testo de exemplo.”</p>
                    <div class="testimonial-meta">
                      <h6>(Nome da pessoa)</h6>
                      <p>(Empresa)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-panel">
                <div class="testimonial-body">
                  <div class="testimonial-img"> <img src="websitego.jpeg" alt="Testimonial Author" />
                  </div>
                  <div class="testimonial-content">
                    <p>“Testo de exemplo, testo de exemplo testo de exemplo testo de exemplo testo de exemplo testo de
                      exemplo testo de exemplo testo de exemplo testo de exemplo testo de exemplo.”</p>
                    <div class="testimonial-meta">
                      <h6>(Nome da pessoa)</h6>
                      <p>(Empresa)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      Projects Modern #1 Section
      ============================
      -->
    <section class="projects projects-modern projects-modern-1" id="projects-modern-1">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 offset-lg-3">
            <div class="heading heading-5 text-center">
              <p class="heading-subtitle">Inovação, Qualidade E Melhoria Contínua</p>
              <h2 class="heading-title">Últimos Projetos, Soluções E Fornecimentos De Energia</h2>
            </div>
          </div>
        </div>
        <!-- End .row-->
        <div class="row">
          <div class="col-12">
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
              data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="3000">

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/1.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/2.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/3.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/4.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/5.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/6.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/7.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/8.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/9.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

              <div>
                <div class="project-panel" data-hover="">
                  <div class="project-panel-holder">
                    <div class="project-img"><a class="link"></a><img src="assets/imagens/servicos/10.svg"
                        alt="project image" /></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      Clients #1 Section
      ============================
      -->
    <section class="clients clientes clients-carousel clients-1" id="clients-1">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="d-none">Nossos Clientes.</h3>
          </div>
          <div class="col-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true" data-nav="false"
              data-dots="false" data-space="0" data-loop="true" data-speed="3000">
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
              <div class="client"><a href="javascript:void(0)"> </a><img src="assets/imagens/logotipo3.png"
                  alt="client" /></div>
            </div>
          </div>
        </div>
        <!-- End .row-->
      </div>
      <!-- End .container-->
    </section>
    <!--
      ============================
      Contact #1 Section
      ============================
      -->
    <section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
      <div class="bg-section"><img src="assets/images/background/3.jpg" alt="background" /></div>
      <div class="container">
        <div class="contact-panel contact-panel-3">
          <div class="heading heading-light heading-6">
            <p class="heading-subtitle">Melhorando O Desempenho Da Energia Solar.</p>
            <h2 class="heading-title">Descubra A Independência Usando O Poder Dos Painéis Solares!</h2>
            <p class="heading-desc">Oferecemos produtos, soluções e serviços em toda a cadeia de valor de energia.
              Apoiamos nossos clientes em seu caminho para um futuro mais sustentável - não importa o quão longe ao
              longo da jornada para energizar a sociedade com sistemas de energia acessíveis.</p>
            <div class="advantages-list-holder">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <ul class="list-unstyled advantages-list advantages-list-2">
                    <li>Confiabilidade E <br />Desempenho</li>
                    <li>Financiamento De <br />Material Solar</li>
                    <li>Entregue dentro <br>do prazo</li>
                  </ul>
                </div>
                <div class="col-12 col-lg-6">
                  <ul class="list-unstyled advantages-list advantages-list-2">
                    <li>Até 95% de economia<br /> nas contas de luz</li>
                    <li>Não denigre o meio<br />ambiente</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-action"><a class="btn btn--white" href="page-about.html">Saiba Mais <i
                  class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                href="page-contact.html">Orçamento
                Grátis</a></div>
            <div class="contact-quote"> <img src="assets/images/icons/noteicon.png" alt="icon" />
              <p>Receba uma cotação precisa dentro de 24hs ao preencher este formulário. Ou ligue: <a
                  href="tel:63999460589">(63) 9 9946-0589</a></p>
            </div>
          </div>
          <div class="contact-card">
            <div class="contact-body">
              <h5 class="card-heading">Solicite Um Orçamento</h5>
              <p class="card-desc">Temos muito orgulho em tudo o que fazemos, o controle sobre os produtos nos permite
                garantir que nossos clientes recebam o melhor serviço de qualidade.</p>

              <!--===================================================
                Formulário de contato
                ===================================================-->

              <!-- Script do envio do formulário sem mudar de página -->

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              <img src="assets/imagens/preloader-escuro.svg" alt="processing..." class="carregando" width="48" />

              <script>
                $(function () {
                  $("#solucoesFormulario").on("submit", function (event) {
                    event.preventDefault();

                    var data = $(this).serialize();
                    $.ajax({
                      url: "./assets/php/enviar.php",
                      type: "post",
                      data: data,

                      // chamada antes de enviar a requisição
                      // alteramos para mostra a imagem
                      beforeSend: function (xhr) {
                        $(".carregando").css('visibility', 'visible');
                      },

                      // chamada quando a requisição termina (seja com erro ou OK)
                      // alteramos e escondemos a imagem
                      complete: function (jqXHR, textStatus) {
                        $(".carregando").css('visibility', 'hidden');
                      },

                      success: function (data, textStatus, jqXHR) {
                        alert('Mensagem enviada com sucesso!');
                        window.location = 'index';
                      }
                    });
                  });
                });
              </script>

              <!-- Script do envio do formulário sem mudar de página -->
              <form class="contactForm" action="" method="post" autocomplete="off" id="solucoesFormulario" name="solucoesFormulario">
                <div class="row">

                  <!--Nome Completo-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Nome Completo</label>
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Insira o nome"
                      required="" maxlength="50" pattern="[0-9]{9}" />
                  </div>

                  <!--Email-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Endereço De Email</label>
                    <input class="form-control" type="text" id="email" name="email"
                      placeholder="Insira o endereço de Email" required="" maxlength="40"
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                  </div>

                  <!--Número De Telefone-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Número De Telefone</label>
                    <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Insira números"
                      required="" maxlength="13" OnKeyPress="formatar('00-00000-0000', this)" />
                  </div>

                  <!--Assunto-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Sujeito</label>
                    <input class="form-control" type="text" id="assunto" name="assunto" placeholder="Digite o assunto"
                      required="" maxlength="40" />
                  </div>

                  <div class="col-12">
                    <!--Mensagem-->
                    <div class="col-12 col-md-12">
                      <label class="form-label" for="contact-usage">Digite a mensagem</label>
                      <textarea class="placeHolder-mensagem" type="text" id="mensagem" name="mensagem"
                      placeholder="Digite a mensagem" required=""></textarea>
                    </div>

                    <!--Captcha-->
                    <!--<div class="g-recaptcha" data-sitekey="??????" data-callback="verifyRecaptchaCallback" 
                    data-expired-callback="expiredRecaptchaCallback"></div><br />-->

                    <!--Enviar-->
                    <button class="btn btn--secondary w-100">Enviar pedido <i class="energia-arrow-right"></i></button>
                  </div>
                </div>
              </form>

            </div>
            <!-- End .contact-body -->
          </div>
        </div>
        <!-- End .contact-panel-->
      </div>
      <!-- End .container-->
    </section>

    <!--
      ============================
      Footer #1
      ============================
      -->
    <?php include("./sections/footer.php");?>
    <!--
      ============================
      BackToTop
      ============================
      -->
    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
  </div>
  <!--  Footer Scripts== -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendor.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="assets/js/mask.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='assets/js/captcha.js'></script>
</body>

</html>