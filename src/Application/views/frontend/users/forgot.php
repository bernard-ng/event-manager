<div class="leading-bg">
    <header class="leading-header">
        <div class="container row col s12">
            <span class="left"><a href="/leading"><i class="icon icon-chevron-left"></i>&nbsp; Connexion</a></span>
            <span class="right"><a href="/signup">Inscription &nbsp;<i class="icon icon-chevron-right"></i></a></span>
            <div class="center"><a href="/leading">Storage admin</a></div>
        </div>
    </header>  
    <div class="container row col l6 s12">
        <div class="hero-titles-no-animated" id="loginBox" >
            <div class="section-title hero-title-main-2"> <i class="icon icon-repeat"></i> &nbsp; Mot de passe oublié</div>
            <form method="POST" action="/forgot" enctype="multipart/form-data">
                <input type="email" id="email" name="email" placeholder="Adresse mail" value="<?= htmlspecialchars($post->get("email")); ?>" >
                
                <div class="file-field input-field ">
                    <span class="qrcode-btn z-depth-4 waves-effect waves-light col s2 " style="display: inline-block;">
                        <span><i class="icon icon-qrcode"></i></span>
                        <input type="file" name="thumb">
                    </span>
                    <span class="file-paht-wrapper col s10 " style="display: inline-block;" >
                        <input class="file-path" placeholder="cliquer pour ajoutez le QrCode" type="text">
                    </span>
                </div>
                
                <div class="row">
                    <div class="col s12" id="connectOptions">
                        <button type="submit" class="submit-btn-full z-depth-2 waves-effect waves-light" id="connect">envoyer</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>
    <footer class="leading-footer">
        Developped by <strong>Bernard Ngandu<strong> &copy;
    </footer>
</div>