<div class="app_formbox app_widget">
    <form class="app_form" action="<?= url("/add_course"); ?>" method="post">
        <?= csrf_input(); ?>
        <div class="app_formbox_photo">
            <span class="field">Imagem:</span>
            <div><input data-image=".j_profile_image" type="file" class="radius"  name="photo"/></div>
        </div>

        <div class="label_group">
            <label>
                <span class="field">Title:</span>
                <input class="radius" type="text" name="title" required/>
            </label>

            <label>
                <span class="field">Subtitle:</span>
                <textarea class="radius" name="subtitle"></textarea>
            </label>
        </div>

        <div class="al-center">
            <div class="app_formbox_actions">
                <button class="btn">Cadastrar</button>
            </div>
        </div>
    </form>
</div>


