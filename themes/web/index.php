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
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>"/>
        <title><?= CONF_SITE_TITLE ?></title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


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

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="<?= theme("/assets/images/post.jpg"); ?>" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

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


