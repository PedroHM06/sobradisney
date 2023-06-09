<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <?php
    session_start(); //Inicia uma nova sessão ou resume uma sessão existente
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
        session_unset(); //remove todas as variáveis de sessão
        echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'exemplo.html';
                </script>";
    }
    $logado = $_SESSION['login'];
    ?>

    <title>Hotel Sobradisney</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Loading -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Loading  -->

        <!-- Cabeçalho -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Sobradisney</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">Sobradisney@gmail.com</p>
                            </div>

                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D"><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href="https://br.linkedin.com/?src=go-pa&trk=sem-ga_campid.12619604099_asid.148548608796_crid.656532769089_kw.linked_d.c_tid.kwd-103941963_n.g_mt.e_geo.1001541&mcid=6821526239111716925&cid=&gclid=EAIaIQobChMIzO-937GJ_wIVEzfUAR15_AtKEAAYASAAEgJfUPD_BwE&gclsrc=aw.ds&original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a class="" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Sobradisney</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="gerenciador.php" class="nav-item nav-link active">Pagina Inícial</a>
                                <a href="gerenciador.php" class="nav-item nav-link">Sobre</a>
                                <a href="gerenciador.php" class="nav-item nav-link">Serviços</a>
                                <a href="gerenciador.php" class="nav-item nav-link">Quartos</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Outros</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="bookingLogado.php" class="dropdown-item">Reserva</a>
                                        <a href="gerenciador.php" class="dropdown-item">Nosso Time</a>
                                        <a href="gerenciador.php" class="dropdown-item">Avaliações</a>
                                    </div>
                                </div>
                                <a href="contactLogado.php" class="nav-item nav-link">Contato</a>
                            </div>

                            <!-- Botão de sair-->

                            <a href="logout.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">SAIR<i class="fa fa-arrow-right ms-3"></i></a>
                            <a href="readDados.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">CONFIG<i class="fa fa-arrow-right ms-3"></i></a>

                            <!---->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Cabeçalho -->


        <!-- Início do Carrossel -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Vida de
                                    luxo</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Venha conhecer uma nova vida
                                </h1>
                                <a href="room.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nossos Quartos</a>
                                <a href="booking.html" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Reserve um Quarto</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Vida de
                                    luxo</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Venha conhecer uma nova vida
                                </h1>
                                <a href="room.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nossos Quartos</a>
                                <a href="booking.html" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Reserve um Quarto</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Final do Carrossel -->


        <!-- Início da Reserva-->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adultos</option>
                                        <option value="1">1 Adulto</option>
                                        <option value="2">2 Adultos</option>
                                        <option value="3">3 Adultos</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Crianças</option>
                                        <option value="1">1 Criança</option>
                                        <option value="2">2 Crianças</option>
                                        <option value="3">3 Crianças</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim da Reserva -->


        <!-- Sobre nós começo -->
        <a name="sobre nós">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <h6 class="section-title text-start text-primary text-uppercase">Sobre Nós</h6>
                            <h1 class="mb-4">Bem-vindo ao <span class="text-primary text-uppercase">Hotel
                                    Sobradisney</span></h1>
                            <p class="mb-4">Venha se livrar de todos os pesos que o mundo externo te dá, aqui você
                                poderá relaxar e curtir apenas as maravilhas dos nosso serviços</p>
                            <div class="row g-3 pb-4">
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">10</h2>
                                            <p class="mb-0">Quartos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">2</h2>
                                            <p class="mb-0">Empregados</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="border rounded p-1">
                                        <div class="border rounded text-center p-4">
                                            <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                            <h2 class="mb-1" data-toggle="counter-up">0</h2>
                                            <p class="mb-0">Clientes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="room.html">Eu Quero</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Final do Sobre Nós -->


            <!-- Quartos -->
            <a name="Quartos">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title text-center text-primary text-uppercase">Nossos Quartos </h6>
                            <h1 class="mb-5">Explore Nossos <span class="text-primary text-uppercase">Quartos</span>
                            </h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/room-1.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">R$100/Diária</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">Jequitibá Suite</h5>
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Camas</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Banheiros</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        </div>
                                        <p class="text-body mb-3">Um otímo quarto para você que esta buscando aconchego
                                            com barulho de grilos</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="service.html">Mais
                                                Informações</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.html">Reserve
                                                Agora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/room-2.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$150/Diária</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">Central Executivo</h5>
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Cama</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Banheiros</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi/Banheira</small>
                                        </div>
                                        <p class="text-body mb-3">Quarto bem localizado, para você que está procurando
                                            um pouco mais de movimento</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="service.html">Mais
                                                Informações</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.html">Reserve
                                                Agora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="img/room-3.jpg" alt="">
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$500/Diária</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">Quadra 8 Salgada</h5>
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>4 Camas</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>5 Banheiros</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi/Piscina</small>
                                        </div>
                                        <p class="text-body mb-3">Com o preço fora do usual, aqui você pode ou não ter
                                            conforto, depende do conjunto</p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="service.htmls">Mais Informações</a>
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.html">Reserve
                                                Agora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final Quartos -->


                <!-- Video Start -->
                <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-md-6 bg-dark d-flex align-items-center">
                            <div class="p-5">
                                <h6 class="section-title text-start text-white text-uppercase mb-3">Vida Relaxante</h6>
                                <h1 class="text-white mb-4">Descubra como Sobradinho é tranquilo e relaxante</h1>
                                <p class="text-white mb-4">Diferente de outros lugares de Brasília, Sobradinho foi feita
                                    para turistas, sendo considera a melhor cidade do DF. Fonte: Vozes da minha cabeça
                                </p>
                                <a href="room.html" class="btn btn-primary py-md-3 px-md-5 me-3">Nossos Quartos</a>
                                <a href="booking.html" class="btn btn-light py-md-3 px-md-5">Reservas</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="video">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Serviços -->
                <a name="Serviços">
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h6 class="section-title text-center text-primary text-uppercase">Nossos Serviços</h6>
                                <h1 class="mb-5">Explore Nossos <span class="text-primary text-uppercase">Serviços</span></h1>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-hotel fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Quartos & Hoteis</h5>
                                        <p class="text-body mb-0">Temos uma vasta opções de hoteis, contando ao todo 1
                                            hotel com 10 quartos</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">All-NotInclusive</h5>
                                        <p class="text-body mb-0">Você pode até pensar que sim, mas não temos a opção de
                                            café da manhã, nem almoço e nem janta</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-spa fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Spa & Fitness</h5>
                                        <p class="text-body mb-0">Ficando no quarto Jequitibá, você tem acesso total ao
                                            parque durante todo o dia</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Piscinas</h5>
                                        <p class="text-body mb-0">Por uma pequena taxa de R$5,50 você pode pegar nosso
                                            ônibus particular e ir até o lago</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Eventos & Festas</h5>
                                        <p class="text-body mb-0">A sextas-feiras ocorre a famosa feira da lua, e lá
                                            você pode encontrar de tudo, de tudo mesmo!</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                    <a class="service-item rounded" href="">
                                        <div class="service-icon bg-transparent border rounded p-1">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Academia</h5>
                                        <p class="text-body mb-0">Temos uma esteira e um sonho</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Serviços -->


                    <!-- Avaliações -->
                    <a name="Avaliações">
                        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
                            <div class="container">
                                <div class="owl-carousel testimonial-carousel py-5">
                                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                                        <p>Perfeitos quartos e lanches</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Ivete Sangalo</h6>
                                                <small>Artista</small>
                                            </div>
                                        </div>
                                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                                    </div>
                                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                                        <p>Muito divertido, vi até uma capivara passeando pela cidade</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Salvador</h6>
                                                <small>Professor</small>
                                            </div>
                                        </div>
                                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                                    </div>
                                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                                        <p>Gostei da localizado, principalmente da Quadra 8, que parece muito Aguás
                                            Claras</p>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-1">Stuart</h6>
                                                <small>Little</small>
                                            </div>
                                        </div>
                                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Avaliações -->


                        <!-- Time -->
                        <a name="Time">
                            <div class="container-xxl py-5">
                                <div class="container">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h6 class="section-title text-center text-primary text-uppercase">Nosso Time
                                        </h6>
                                        <h1 class="mb-5">Explore A Gente <span class="text-primary text-uppercase">Lá
                                                Ele</span></h1>
                                    </div>
                                    <div class="row g-4">

                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="rounded shadow overflow-hidden">
                                                <div class="position-relative">
                                                    <img class="img-fluid" src="img/Dudu.jpg" alt="">
                                                </div>
                                                <div class="text-center p-4 mt-3">
                                                    <h5 class="fw-bold mb-0">Eduardo Ribeiro</h5>
                                                    <small>Chefe</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="rounded shadow overflow-hidden">
                                                <div class="position-relative">
                                                    <img class="img-fluid" src="img/pedro.jpg" alt="">
                                                </div>
                                                <div class="text-center p-4 mt-3">
                                                    <h5 class="fw-bold mb-0">Pedro Henrique</h5>
                                                    <small>Chefe</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Time -->


                            <!-- NOVIDADES -->
                            <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 border rounded p-1">
                                        <div class="border rounded text-center p-1">
                                            <div class="bg-white rounded text-center p-5">
                                                <h4 class="mb-4">Deixe seu email para <span class="text-primary text-uppercase">Novidades</span></h4>
                                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                                    <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                                    <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Newsletter Start -->


                            <!-- Rodapé -->
                            <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
                                <div class="container pb-5">
                                    <div class="row g-5">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="bg-primary rounded p-4">
                                                <a href="index.html">
                                                    <h1 class="text-white text-uppercase mb-3">Sobradisney</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                                Contato</h6>
                                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Projeção de
                                                Sobradinho, Quadra 1</p>
                                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>61 999125003</p>
                                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>Sobradisney@gmail.com</p>
                                            <div class="d-flex pt-2">
                                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-12">
                                            <div class="row gy-5 g-4">
                                                <div class="col-md-6">
                                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                                        Empresa</h6>
                                                    <a class="btn btn-link" href="about.html">Sobre Nós</a>
                                                    <a class="btn btn-link" href="contact.html">Converse Conosco</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                                        Serviços</h6>
                                                    <a class="btn btn-link" href="service.html">All-NotInclusive</a>
                                                    <a class="btn btn-link" href="service.html">Spa & Fitness</a>
                                                    <a class="btn btn-link" href="service.html">Piscinas</a>
                                                    <a class="btn btn-link" href="service.html">Eventos & Festas</a>
                                                    <a class="btn btn-link" href="service.html">Academia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="copyright">
                                        <div class="row">
                                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                                &copy; <a class="border-bottom" href="#">Sobradisney</a>, All Right
                                                Reserved.

                                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML
                                                    Codex</a>
                                            </div>
                                            <div class="col-md-6 text-center text-md-end">
                                                <div class="footer-menu">
                                                    <a href="">Home</a>
                                                    <a href="">Cookies</a>
                                                    <a href="">Help</a>
                                                    <a href="">FQAs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer End -->


                            <!-- Back to Top -->
                            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>