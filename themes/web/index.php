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

        <?= csrf_input(); ?>

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
    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
    <body>
        <div class="ajax_response"><?= flash(); ?></div>
        <!-- ======= Main Header Section ======= -->
        <header class="main_header">
            <div class="main_header_content">
                <a href="#" class="logo"><input type="hidden" id="access" value="<?=$count_access;?>" />
                    <img src="<?= theme("/assets/images/logo.png"); ?>" alt="LEO" title="LEO">
                </a>
                <div class="main_header_search">
                        <div class="main_header_form"> 
                            <form name="search" action="<?= url("/buscar"); ?>" method="post" enctype="multipart/form-data">
                                <input type="search" id="text-search" name="s" <?php if(isset($search)):echo "value={$search}"; endif;?> placeholder="Procurar cursos...">
                                <button type="submit" id="search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                </div>
                <?php if ($user_login): ?>
                    <div class="main_header_photo" data-modalopen=".app_modal_user">
                        <?php
                        $photo = $user_login->photo;
                        $userPhoto = ($photo ? image($user_login->photo, 50, 50) : image("image/2020/07/user.png", 50, 50));
                        ?>
                        <img src="<?= $userPhoto; ?>" alt="">
                    </div>
                    <div class="main_header_profile" data-modalopen=".app_modal_user">
                        <p>Seja bem-vindo,</p>
                        <b><?= $user_login->first_name; ?></b>
                        <span class=" fa fa-angle-down"></span>
                    </div>
                <?php else: ?>
                    <div class="main_header_login">
                        <button data-modalopen=".app_modal_login">Log in</button>
                    </div>
                <?php endif; ?>
            </div>
        </header>
        <main>
            <!-- ======= Slider Section ======= -->
            <div id="home" class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                        <img src="<?= image("image/2020/07/slider1.jpg", 800, 200); ?>" alt="" title="#slider-direction-1" />
                        <img src="<?= image("image/2020/07/slider2.jpg", 800, 200); ?>" alt="" title="#slider-direction-2" />
                        <img src="<?= image("image/2020/07/slider3.jpg", 800, 200); ?>" alt="" title="#slider-direction-3" />
                    </div>

                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="slider-direction slider-one">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-course">
                                    <header class="slider-title">
                                        <h1><?= str_limit_chars($courses_headers1->title, 25) ?></h1>
                                    </header>
                                    <article>
                                        <p><?= str_limit_chars($courses_headers1->subtitle, 150) ?></p>
                                        <button onclick="modal_header(<?= $courses_headers1->id ?>)">Ver Curso</button>
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
                                        <h1><?= str_limit_chars($courses_headers2->title, 25) ?></h1>
                                    </header>
                                    <article>
                                        <p><?= str_limit_chars($courses_headers2->subtitle, 150) ?></p>
                                        <button onclick="modal_header(<?= $courses_headers2->id ?>)">Ver Curso</button>
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
                                        <h1><?= str_limit_chars($courses_headers3->title, 25) ?></h1>
                                    </header>
                                    <article>
                                        <p><?= str_limit_chars($courses_headers3->subtitle, 150) ?></p>
                                        <button onclick="modal_header(<?= $courses_headers3->id ?>)">Ver Curso</button>
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
                    <?php $userCourse = ($user_login ? "MEUS CURSOS" : "CURSOS"); ?>
                    <h1><?= $userCourse; ?></h1>
                    <hr>
                </header>
                <?php
                if ($courses):
                    foreach ($courses as $course):
                        ?>
                        <article>
                            <a href="#">
                                <img src="<?= image($course->photo, 1350, 750); ?>" alt="<?= $course->title; ?>" title="<?= $course->title; ?>">
                            </a>
                            <p><a href="#" class="category"><?= str_limit_chars($course->title, 25); ?></a></p>
                            <h2><a href="#" class="title"><?= str_limit_chars($course->subtitle, 90); ?></a></h2>
                            <button class="button-course" data-modalopen=".app_modal_course" data-id="<?= $course->id; ?>">Ver Curso</button>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>

                <article class="article_add">
                    <spam <?php if ($user_login): ?> data-modalopen=".app_modal_add_course" <?php else: ?> onclick="javascript:alert('Necessário está logado para adicionar um curso novo')" <?php endif ?>>
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
<script>
    var path = '<?php echo url(); ?>'
</script>

<!-- jquery -->
<script src="<?= theme("/assets/js/jquery/jquery.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery.form.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery-ui.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/jquery/jquery.mask.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/wow/wow.min.js", CONF_VIEW_THEME_WEB); ?>"></script>

<!-- slider js Files -->
<script src="<?= theme("/assets/slider/nivo-slider/js/jquery.nivo.slider.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/owl.carousel/owl.carousel.min.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/slider/main.js", CONF_VIEW_THEME_WEB); ?>"></script>
<script src="<?= theme("/assets/js/tinymce/tinymce.min.js", CONF_VIEW_THEME_WEB); ?>"></script>

<!-- main js Files -->
<script src="<?= theme("/assets/js/scripts.js", CONF_VIEW_THEME_WEB); ?>"></script>


