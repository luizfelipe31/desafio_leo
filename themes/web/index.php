<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="<?= theme("/assets/images/logo.png"); ?>"/>
        <title><?= CONF_SITE_TITLE ?></title>

        <!-- main CSS File -->
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>"/>
        
        <!-- slider CSS Files -->
        <link href="<?= theme("/assets/slider/animate.css/animate.min.css"); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/nivo-slider/css/nivo-slider.css"); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/owl.carousel/assets/owl.carousel.min.css"); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/style.css"); ?>" rel="stylesheet">
    </head>
    <body>

        <header class="main_header">
            <div class="main_header_content">
                <a href="#" class="logo">
                    <img src="<?= theme("/assets/images/logo.png"); ?>" alt="LEO" title="LEO">
                </a>
            </div>
        </header>
        <main>
            <!-- ======= Slider Section ======= -->
            <div id="home" class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="" title="#slider-direction-1" />
                        <img src="<?= theme("/assets/images/slider2.jpg"); ?>" alt="" title="#slider-direction-2" />
                        <img src="<?= theme("/assets/images/slider3.jpg"); ?>" alt="" title="#slider-direction-3" />
                    </div>

                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="slider-direction slider-one">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slider-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- direction 3 -->
                    <div id="slider-direction-3" class="slider-direction slider-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slider-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Slider -->
            <section class="main_blog">
                <header class="main_blog_header">
                    <h1>MEUS CURSOS</h1>
                    <hr>
                </header>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>
                </article>

                <article class="article_add">
                    <a href="#">
                        <img src="<?= theme("/assets/images/add.png"); ?>" alt="Adicionar Curso" title="Adicionar Curso">
                    </a>
<!--                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button>Ver Curso</button>-->
                </article>


            </section>
        </main>
        <section class="main_footer">
            <header>
                <h1><img src="<?= theme("/assets/images/logo_footer.png"); ?>" alt="LEO" title="LEO"></h1>
            </header>

            <article class="main_footer_our_pages">
                <header>
                    <h2 class="main_footer_our_pages_li">Maecenas faucibus mollis interdum. Morbi leo risus,porta ac consectertu ac, vestibulum at eros</h2>
                </header>
            </article>

            <article class="main_footer_contact">
                <header>
                    <h2>//CONTATO</h2>
                </header>

                <ul>
                    <li class="main_footer_contact_li"><b>(21)98765-3434</b></li>
                    <li class="main_footer_contact_li"><b>contato@leolarning.com</b></li>
                </ul>
            </article>

            <article class="main_footer_media">
                <header>
                    <h2>//REDES SOCIAIS</h2>
                </header>

                <h1><img src="<?= theme("/assets/images/icon_pinterest.png"); ?>" alt="Pinterest" title="Pinterest"></h1>
                <h1><img src="<?= theme("/assets/images/icon_twitter.png"); ?>" alt="Twitter" title="Twitter"></h1>
                <h1><img src="<?= theme("/assets/images/icon_youtube.png"); ?>" alt="Youtube" title="Youtube"></h1>
            </article>
        </section>
        <footer class="main_footer_rights">
            <p class="main_footer_rights_p">Copyright 2017 - All right reserved</p>
        </footer>
    </body>
</html>
<!-- slider js Files -->
<script src="<?= theme("/assets/js/jquery/jquery.min.js"); ?>"></script>
<script src="<?= theme("/assets/slider/wow/wow.min.js"); ?>"></script>
<script src="<?= theme("/assets/slider/nivo-slider/js/jquery.nivo.slider.js"); ?>"></script>
<script src="<?= theme("/assets/slider/owl.carousel/owl.carousel.min.js"); ?>"></script>
<script src="<?= theme("/assets/slider/main.js"); ?>"></script>

