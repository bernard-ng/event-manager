<div class="leading-bg">
    <header class="leading-header">
        <div class="container row col s12">
            <span class="left"><a href="/leading"><i class="icon icon-chevron-left"></i>&nbsp; Quitter</a></span>
            <span class="right"><a href="/login">Connexion &nbsp;<i class="icon icon-chevron-right"></i></a></span>
        </div>
    </header>
    <div class="container">
        <div class="row l12">
            <div class="row col l6 offset-l3 animated fast slideInUp">
                <div class="hero-titles-no-animated col l12 s12" id="loginBox" >
                    <div class="section-title hero-title-main-2"> <i class="icon icon-log-in"></i>Inscription</div>
                    <form method="POST" action="">
                        <div class="input-field col s12">
                            <span class="helper-text red-text darken-4">
                                <?= form_error('name') ?>
                            </span>
                            <input type="text" id="name" name="name" placeholder="Nom" value="<?= set_value('name', '', true) ?>" >
                        </div>

                        <div class="input-field col s12">
                            <span class="helper-text red-text darken-4">
                                <?= form_error('email') ?>
                            </span>
                            <input type="email" id="email" name="email" placeholder="email" value="<?= set_value('email', '', true) ?>" >
                        </div>

                        <div class="input-field col s12">
                            <span class="helper-text red-text darken-4">
                                <?= form_error('password') ?>
                            </span>
                            <input type="password" name="password" id="password" placeholder="Mot de passe" >
                        </div>

                        <div class="input-field col s12">
                            <span class="helper-text red-text darken-4">
                                <?= form_error('password_confirm') ?>
                            </span>
                            <input type="password" name="password_confirm" id="_confirm" placeholder="confrimer mot de passe" >
                        </div>

                        <div class="input-field s12">
                            <div class="col s12" id="connectOptions">
                                <button type="submit" class="btn blue darken-2 z-depth-2 waves-effect" id="connect">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
