<div class="app_formbox app_widget">
    <form class="app_form" action="<?= url("/update_profile"); ?>" method="post">
        <?= csrf_input(); ?>
        <input type="hidden" name="id" value="<?= $user_login->id; ?>">
        <div class="app_formbox_photo">
            <span class="field">Mudar a Foto de Perfil:</span>
            <div><input data-image=".j_profile_image" type="file" class="radius"  name="photo"/></div>
        </div>

        <div class="label_group">
            <label>
                <span class="field">Nome:</span>
                <input class="radius" type="text" name="first_name" required
                       value="<?= $user_login->first_name; ?>"/>
            </label>

            <label>
                <span class="field">Sobrenome:</span>
                <input class="radius" type="text" name="last_name" required
                       value="<?= $user_login->last_name; ?>"/>
            </label>
        </div>

        <label>
            <span class="field">Nome de usuário:</span>
            <input class="radius" type="user_name" name="user_name" placeholder="Nome de usuário" required
                   value="<?= $user_login->user_name; ?>"/>
        </label>

        <div class="al-center">
            <div class="app_formbox_actions">
                <button class="btn">Atualizar</button>
                <a class="fa fa-icon-signout" title="Sair" href="<?= url("/logout"); ?>">Log Out</a>
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </div>
        </div>
    </form>
</div>
