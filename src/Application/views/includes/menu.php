<header style="margin-bottom: 50px !important;">
    <div class="navbar-fixed z-depth-2">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <div class="row container">
                    <a href="/" class="brand-logo">
                        <?= ucfirst($this->uri->segment(1)) ?>
                    </a>
                    <a href="#" data-activates="mobile-side-nav" class="show-on-large button-collapse btn blue-grey darken-4 right">
                        Menu
                    </a>
                    <ul class=" right hide-on-med-and-down">
                        <li><a href="/leading">Sortir</a></li>
                        <li><a href="/admin">Administration</a></li>
                        <li><a href="/settings">Paramètres</a></li>
                        <li><a href="/logout">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
