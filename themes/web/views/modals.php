<div class="app_modal" data-modalclose="true">
    <!--login-->
    <div class="app_modal_box app_modal_login">
        <p class="title icon-user">Login:</p>
        <div id="div-content"></div>
    </div
    <!--ADD COURSE-->
    <div class="app_modal_box app_modal_course">
        <p class="title icon-upload">Adicionar Curso:</p>
        <form class="app_form" enctype="multipart/form-data" action="<?= url("/"); ?>" method="post">
            <?= csrf_input(); ?>
        </form>
    </div>
</div>

