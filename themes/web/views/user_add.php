<div class="app_formbox app_widget">
    <form class="app_form" action="<?= url("/add_profile"); ?>" method="post">
        <?= csrf_input(); ?>
        <div class="app_formbox_photo">
            <span class="field">Foto de Perfil:</span>
            <div><input data-image=".j_profile_image" type="file" class="radius"  name="photo"/></div>
        </div>

        <div class="label_group">
            <label>
                <span class="field">Nome:</span>
                <input class="radius" type="text" name="first_name" required/>
            </label>

            <label>
                <span class="field">Sobrenome:</span>
                <input class="radius" type="text" name="last_name" required />
            </label>
        </div>

        <label>
            <span class="field">Nome de usuário:</span>
            <input class="radius" type="user_name" name="user_name" placeholder="Nome de usuário" required/>
        </label>

        <label>
            <span class="field">Senha:</span>
            <input class="radius" type="password" name="password" placeholder="Senha" required/>
        </label>

        <div class="al-center">
            <div class="app_formbox_actions">
                <button class="btn">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
