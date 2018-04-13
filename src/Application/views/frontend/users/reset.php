<div class="leading-bg">
    <header class="leading-header">
        <div class="container row col s12">
            <span class="left"><a href="/leading"><i class="icon icon-chevron-left"></i>&nbsp; Leading</a></span>
            <span class="right"><a href="/signup">Inscription &nbsp;<i class="icon icon-chevron-right"></i></a></span>
            <div class="center"><a href="/leading">Storage admin</a></div>
        </div>
    </header>  
    <div class="container row col l6 s12">
        <div class="hero-titles-no-animated" id="loginBox" >
            <div class="section-title hero-title-main-2"> <i class="icon icon-log-in"></i> &nbsp; Rénitialisation mot de passe</div>
            <form method="POST" action="/login">
                <input type="password" id="password" name="password" placeholder="Nouveau mot de passe" >
                <input type="password" id="password_confirm" name="password_confirm"  placeholder="confirmez le mot de passe" >
                
                <div class="row">
                    <div class="col s12" id="connectOptions">
                        <button type="submit" class="submit-btn-full z-depth-2 waves-effect waves-light" id="connect">Envoyer</button>
                        <a href="/forgot" class="forgot">Mot de passe oublié</a>
                    </div>
                </div>
            </form>
        </div>  
    </div>
    <footer class="leading-footer">
        Developped by <strong>Bernard Ngandu<strong> &copy;
    </footer>
</div>