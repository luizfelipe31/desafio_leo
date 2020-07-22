<div class="login">
    <article class="login_box radius">
        <form name="login" action="<?= url("/login"); ?>" method="post">
            <?= csrf_input(); ?>
            <label>
                <span class="field fa fa-user"> Usuário:</span>
                <input name="user_name" type="text" placeholder="Informe nome de usuário" required/>
            </label>

            <label>
                <span class="field fa fa-lock"> Senha:</span>
                <input name="password" type="password" placeholder="Informe sua senha:" required/>
            </label>

            <button class="radius gradient gradient-green gradient-hover ">Entrar</button>
        </form>

        <footer>
            <p><h3><a title="Cadastrar" data-modalopen=".app_modal_user_add" style="cursor:pointer">INSCREVA-SE</a></h3></p>
        </footer>
    </article>
</div>




