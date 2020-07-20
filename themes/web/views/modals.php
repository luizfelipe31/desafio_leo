<div class="app_modal" data-modalclose="true">
    <!--MODAL BEGINNING-->
    <div class="app_modal_box app_modal_beginning">
        <div id="div-content">
            <?= $v->insert("views/modal_beginning"); ?>
        </div>
    </div
    <!--LOGIN-->
    <div class="app_modal_box app_modal_login">
        <div id="div-content">
            <?= $v->insert("views/login"); ?>
        </div>
    </div>
    <!--ADD USER -->
    <div class="app_modal_box app_modal_user">
        <div id="div-content">
            <?= $v->insert("views/user"); ?>
        </div>
    </div
    <!--USER-->
    <div class="app_modal_box app_modal_user_add">
        <div id="div-content">
            <?= $v->insert("views/user_add"); ?>
        </div>
    </div
    <!--COURSE-->
    <div class="app_modal_box app_modal_course">
        <div id="div-content">
            <?= $v->insert("views/course"); ?>
        </div>
    </div>
    <!--ADD COURSE-->
    <div class="app_modal_box app_modal_add_course">
        <div id="div-content">
            <?= $v->insert("views/course_add"); ?>
        </div>
    </div>
</div>

