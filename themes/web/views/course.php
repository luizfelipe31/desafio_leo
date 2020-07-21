<div class="app_formbox app_widget">
    <form class="app_form" action="<?= url("/update_course"); ?>" method="post">
        <?= csrf_input(); ?>
        <input type="hidden" name="id" id="id" />
        <div class="app_formbox_photo">
            <span class="field">Imagem:</span>
            <div><input data-image=".j_profile_image" type="file" class="radius"  name="photo"/></div>
        </div>

        <div class="label_group">
            <label>
                <span class="field">Title:</span>
                <input class="radius" id="title" type="text" name="title" required/>
            </label>

            <label>
                <span class="field">Subtitle:</span>
                <textarea class="radius"  name="subtitle" id="subtitle"></textarea>
            </label>
        </div>

        <div class="al-center">
            <div class="app_formbox_actions">
                <button class="btn">Atualizar</button>
            </div>
        </div>
    </form>
</div>


