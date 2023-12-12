<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Barbearia Masculina Isaac</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
<!--
-->
    </head>
    
    <body>

        <div class="container-fluid">
            <div class="row">

                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" class="logo-image img-fluid" align="">
                        </a>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Página Inicial</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Nossa história</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Serviços</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">lista de preços</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contactos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-8 col-12">
                                        <h1 class="text-white mb-lg-3 mb-4"><strong>Barbearia <em>Isaac</em></strong></h1>
                                        <p class="text-black">O seu destino para um visual impecável!  Colocamos estilo e elegância em cada corte.</p>
                                        <br>
                                        <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">Sobre Nós </a>

                                        <a class="btn custom-btn smoothscroll mb-2" href="#section_3">O que fazemos</a>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                                <img src="images/vintage-chair-barbershop.jpg" class="custom-block-image img-fluid" alt="">

                                <h4><strong class="text-white">Agende sua transformação agora.</strong></h4>

                                <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Reserve um assento</a>
                            </div>
                    </section>


                    <section class="about-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 mx-auto">
                                    <h2 class="mb-4">Melhores Barbeiros</h2>

                                    <div class="border-bottom pb-3 mb-5">
                                        <p>Conheça nossos talentosos barbeiros, eles proporcionam <a href="https://templatemo.com/page/1" target="_blank">Atendimento com Qualidade.</a> Veja nossa equipe em ação, dedicados a proporcionar a melhor experiência.</p>
                                    </div>
                                </div>

                                    <h6 class="mb-5">Conheça os Barbeiros</h6>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-male-hairdresser-with-scissors.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">Ricardo</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-facebook">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-instagram">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-whatsapp">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-mid-adult-bearded-male-barber-with-folded-arms.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">Samuel</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-facebook">
                                                        </a>
                                                    </li>

                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-instagram">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="featured-section section-padding">
                        <div class="section-overlay"></div>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <h2 class="mb-3">Obtenha 32% de Desconto</h2>

                                    <p>Todas as primeiras semanas do mês</p>

                                    <strong>Exclusivos para novos clientes</strong>
                                </div>

                            </div>
                        </div>
                    </section>


                    <section class="services-section section-padding" id="section_3">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">Services</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/woman-cutting-hair-man-salon.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Corte de cabelo</h4>

                                            <strong class="services-thumb-price">2500kz</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-their-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Lavagem</h4>

                                            <strong class="services-thumb-price">$1000kz</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Barbear</h4>

                                            <strong class="services-thumb-price">1500kz</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <img src="images/services/boy-getting-haircut-salon-front-view.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Crianças</h4>

                                            <strong class="services-thumb-price">2000kz</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="#" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Faça seu Agendamento</h2>

                                        <p>Por favor Preenha o fomulário e entraremos em contacto com você</p>
                                    </div>

                                    <div class="booking-form-body">
                                        <div class="row">

                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Nome Completo" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="tel" class="form-control" name="bb-phone" placeholder="Telemóvel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                                            </div>
                                        
                                            <div class="col-lg-6 col-12">
                                                <input class="form-control" type="time" name="bb-time" value="18:30" />
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                                    <option selected="">Selecione a Filial</option>
                                                    <option value="Grünberger">Talatona</option>
                                                    <option value="Behrenstraße">Cazenga</option>
                                                    <option value="Weinbergsweg">Vila Alice</option>
                                                </select>

                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Data" required>
                                            </div>

                                            <div class="col-lg-6 col-12">
                                                <input type="number" name="bb-number" id="bb-number" class="form-control" placeholder="Número de Pessoas" required>
                                            </div>
                                        </div>

                                        <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Comentário (Opcional)"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Submeter</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </section>


                    <section class="price-list-section section-padding" id="section_4">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12">
                                    <div class="price-list-thumb-wrap">
                                        <div class="mb-4">
                                            <h2 class="mb-2">Price List</h2>

                                            <strong>lista de Preços</strong>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Corte de Cabelo
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>2.500KZ</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Corte de Barba
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>1.500kz</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Corte de Navalha
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>3.500kz</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Barbear
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>2.000kz</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Estilo / Cor
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>1.300kz</strong>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                    <img src="images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </section>


                <section class="contact-section" id="section_5">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">   

                                <div class="col-lg-8 col-12 mx-auto">
                                    <h2 class="text-center">Diga Olá</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Informações de</strong> contacto</h5>

                                    <p class="text-white d-flex mb-1">
                                        <a href="tel: 120-240-3600" class="site-footer-link">
                                            (+244) 
                                            922-240-379
                                        </a>
                                    </p>

                                    <p class="text-white d-flex">
                                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                            hello@barber.beauty
                                        </a>
                                    </p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-instagram">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-youtube">
                                            </a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                    <div class="contact-block">
                                        <h6 class="mb-0">
                                            <i class="custom-icon bi-shop me-3"></i>

                                            <strong>Aberto Diáriamente</strong>

                                            <span class="ms-auto">08:00 AM - 8:00 PM</span>
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7702.122299518348!2d13.396786616231472!3d52.531268574169616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85180d9075183%3A0xbba8c62c3dc41a7d!2sBarbabella%20Barbershop!5e1!3m2!1sen!2sth!4v1673886261201!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Our Branches</h4>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Talatona</strong>

                                    <p>Talatona, rua 12, Luanda</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Cazenga</strong>

                                    <p>Cazenga, rua das pedras, Luanda</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <strong class="mb-1">Vila Alice</strong>

                                <p>Vila Alice, rua 49, Luanda</p>
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p class="copyright-text mb-0">Copyright © 2023 Barbearia Isaac 
                                    - Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>