<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="<?= theme("/assets/images/logo.png", CONF_VIEW_THEME_WEB); ?>"/>
        <title><?= CONF_SITE_TITLE ?></title>

        <!-- main CSS File -->
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css", CONF_VIEW_THEME_WEB); ?>"/>
        <link rel="stylesheet" href="<?= theme("/assets/css/app.css", CONF_VIEW_THEME_WEB); ?>">

        <!-- slider CSS Files -->
        <link href="<?= theme("/assets/slider/animate.css/animate.min.css", CONF_VIEW_THEME_WEB); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/font-awesome/css/font-awesome.min.css", CONF_VIEW_THEME_WEB); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/nivo-slider/css/nivo-slider.css", CONF_VIEW_THEME_WEB); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/owl.carousel/assets/owl.carousel.min.css", CONF_VIEW_THEME_WEB); ?>" rel="stylesheet">
        <link href="<?= theme("/assets/slider/style.css", CONF_VIEW_THEME_WEB); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Main Header Section ======= -->
        <header class="main_header">
            <div class="main_header_content">
                <a href="#" class="logo">
                    <img src="<?= theme("/assets/images/logo.png"); ?>" alt="LEO" title="LEO">
                </a>
                <div class="main_header_search">
                    <form action=" " method="post">
                        <div class="main_header_form">  
                            <input type="search" id="text-search" name="q" placeholder="Procurar cursos...">
                            <button type="submit" id="search"><i class="fa fa-search"></i></button>
                        </div>

                    </form>
                </div>
                <?php if ($user == 1): ?>
                    <div class="main_header_photo">
                        <img src="<?= image("image/2020/07/user.png", 50, 50); ?>" alt="">
                    </div>
                    <div class="main_header_profile">
                        <p>Seja bem-vindo,</p>
                        <b>John Doe</b>
                        <span class=" fa fa-angle-down"></span>
                    </div>
                <?php else: ?>
                    <div class="main_header_login">
                        <button>Log in</button>
                    </div>
                <?php endif; ?>
            </div>
        </header>
        <main>
            <!-- ======= Slider Section ======= -->
            <div id="home" class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                        <img src="<?= image("image/2020/07/post.jpg", 800, 200); ?>" alt="" title="#slider-direction-1" />
                        <img src="<?= image("image/2020/07/slider1.jpg", 800, 200); ?>" alt="" title="#slider-direction-2" />
                        <img src="<?= image("image/2020/07/slider3.jpg", 800, 200); ?>" alt="" title="#slider-direction-3" />
                    </div>

                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="slider-direction slider-one">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-course">
                                    <header class="slider-title">
                                        <h1>Lorem Ipsum</h1>
                                    </header>
                                    <article>
                                        <p>Aenen Lacinia bibedum luna sed contetur cum
                                            socias natake penaltis seltir magnis dis paturient montes
                                            nascetus ridiculus mus.Morbi leo risos, porta actosert
                                            latura ac, visibilit at ero.</p>
                                        <button>Ver Curso</button>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-course">
                                    <header class="slider-title">
                                        <h1>Lorem Ipsum</h1>
                                    </header>
                                    <article>
                                        <p>Aenen Lacinia bibedum luna sed contetur cum
                                            socias natake penaltis seltir magnis dis paturient montes
                                            nascetus ridiculus mus.Morbi leo risos, porta actosert
                                            latura ac, visibilit at ero.</p>
                                        <button>Ver Curso</button>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- direction 3 -->
                    <div id="slider-direction-3" class="slider-direction slider-three">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-course">
                                    <header class="slider-title">
                                        <h1>Lorem Ipsum</h1>
                                    </header>
                                    <article>
                                        <p>Aenen Lacinia bibedum luna sed contetur cum
                                            socias natake penaltis seltir magnis dis paturient montes
                                            nascetus ridiculus mus.Morbi leo risos, porta actosert
                                            latura ac, visibilit at ero.</p>
                                        <button>Ver Curso</button>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Slider -->
            <!-- ======= Course Section ======= -->
            <section class="main_courses">
                <header class="main_courses_header">
                    <h1>MEUS CURSOS</h1>
                    <hr>
                </header>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button class="button-course">Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button class="button-course">Ver Curso</button>
                </article>

                <article>
                    <a href="#">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <p><a href="#" class="category">Pelentesque Melesiada</a></p>
                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <button class="button-course">Ver Curso</button>
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
                    <spam data-modalopen=".app_modal_course">
                        <img src="<?= image("image/2020/07/add.png", 999); ?>" alt="Adicionar Curso" title="Adicionar Curso">
                    </spam>
                </article>


            </section>
        </main>
        <!-- ======= main footer Section ======= -->
        <section class="main_footer">
            <header>
                <h1><img src="<?= theme("/assets/images/logo_footer.png"); ?>" alt="LEO" title="LEO"></h1>
            </header>

            <article class="main_footer_our_pages">
                <header>
                    <h2>Maecenas faucibus mollis interdum. Morbi leo risus,porta ac consectertu ac, vestibulum at eros</h2>
                </header>
            </article>

            <article class="main_footer_links">
                <header>
                    <h2>//CONTATO</h2>
                </header>

                <ul>
                    <li class="main_footer_contact_li"><b>(21)98765-3434</b></li>
                    <li class="main_footer_contact_li"><b>contato@leolarning.com</b></li>
                </ul>
            </article>

            <article class="main_footer_about">
                <header>
                    <h2>//REDES SOCIAIS</h2>
                </header>
                <img src="<?= theme("/assets/images/icon_twitter.png"); ?>" alt="Twitter" title="Twitter">
                <img src="<?= theme("/assets/images/icon_youtube.png"); ?>" alt="Youtube" title="Youtube">
                <img src="<?= theme("/assets/images/icon_pinterest.png"); ?>" alt="Pinterest" title="Pinterest">
            </article>
        </section>
        <!-- ======= Main Footer Rights Section ======= -->
        <footer class="main_footer_rights">
            <p class="main_footer_rights_p">Copyright 2017 - All right reserved</p>
        </footer>
    </body>
</html>
<div class="app">
    <?= $v->insert("views/modals"); ?>
</div>
<!-- slider js Files -->
<script src="<?= theme("/assets/js/jquery/jquery.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery.form.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery-ui.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery.mask.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/wow/wow.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/nivo-slider/js/jquery.nivo.slider.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/owl.carousel/owl.carousel.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/main.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/tinymce/tinymce.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/scripts.js", CONF_VIEW_THEME_WEB); ?>"></script>


