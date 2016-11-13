<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CHOCOSHOP</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Choco<span>Shop</span></h1>
            <p class="animated fadeInRightBig">Conectando apreciadores de chocolate a chocolaterias</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Conhecer</a>
          </div>
        </div>

        <!--
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Oxygen</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
      -->
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="scroll active"><a href="#home">Home</a></li>-->
            <li class="scroll"><a href="#services">O que fazemos</a></li>
            <li class="scroll"><a href="#about-us">Mercado Potencial</a></li>
            <li class="scroll"><a href="#blog">Viabilização</a></li>
            <li class="scroll"><a href="#team">Time</a></li>
            <li class="scroll"><a href="#contact">Contato</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>O que fazemos</h2>
            <p>Conectamos os melhores produtores de chocolate com seu apreciadores!</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-check-square-o"></i>
            </div>
            <div class="service-info">
              <h3>Qualidade garantida</h3>
              <p>Todos os produtos disponíveis serão avaliados por criteriosos avaliadores especializados e pelos nossos clientes.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-truck"></i>
            </div>
            <div class="service-info">
              <h3>Entrega fácil</h3>
              <p>Os melhores chocolates do mundo vão estar disponíveis na porta de sua casa de forma rápida e fácil.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-globe"></i>
            </div>
            <div class="service-info">
              <h3>Peça em qualquer lugar</h3>
              <p>Peça seus chocolates de onde você estiver, seja em casa, no trabalho, na faculdade ou em qualquer outro lugar</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-money"></i>
            </div>
            <div class="service-info">
              <h3>Cabe no seu bolso</h3>
              <p>Na nossa infinidade de produtos e parceiros, certamente um deles tesá o preço que você quer pagar!</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="service-info">
              <h3>Multiplataforma</h3>
              <p>Você poderá acessar ao ChocoShop da forma que você preferir, seja Android, iOS, Windows ou Web.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-heart"></i>
            </div>
            <div class="service-info">
              <h3>Feito com amor</h3>
              <p>Feito com muito carinho pelos nossos desenvolvedores para te conectar com o que você mais ama! </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Mercado potencial</h2>
            <p>Nosso público-alvo é composto principalmente por jovens com vida corrida nas classes A e B.</p>
            <p>Nesta primeira fase vamos nos centrar nas regiões mtropolitanas de São Paulo, Rio de Janeiro, Belo Horizonte e Campinas.</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->
  </section><!--/#pricing-->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Viabilização do projeto</h2>
          <p>Como você pode tornar nosso sonho real</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
            </div>
            <div class="entry-header">
              <h3><a href="#">Nos ajude a encontrar parceiros</a></h3>
            </div>
            <div class="entry-content">
              <p>Com mais chocolateiros parceiros poderemos ofecer mais produtos e com mais qualidade em nossa plataforma. </p>
            </div>
          </div>
          <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
            </div>
            <div class="entry-header">
              <h3><a href="#">Nos ajude financeiramente</a></h3>
            </div>
            <div class="entry-content">
              <p>Com dinheiro poderemos desenvolver nossa plataforma com os recursos mais modernos. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#blog-->

 <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Nossa Equipe</h2>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>João Vítor</h3>
                <h4>Administração e Qualidade</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Luis Antonio</h3>
                <h4>Back-ender</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Matheus</h3>
                <h4>Financeiro e Logistica</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/4.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Pedro Júnior</h3>
                <h4>Front-ender</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#team-->
  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contate-nos</h2>
            <p>Se interessou pelo ChocoShop e quer ser um investidor? Entre em contato e faça parte desse time.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6 col-md-offset-3">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Assunto" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensagem" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 ChocoShop.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Feito com &#9749; e &#10084; pelo time da ChocoShop</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
