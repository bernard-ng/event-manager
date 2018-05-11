<header style="margin-bottom: 50px !important;">
    <div class="navbar-fixed z-depth-2">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <div class="row container">
                    <a href="/<?= $this->uri->segment(1) ?>" class="brand-logo">
                        <?= ucfirst($this->uri->segment(1)) ?>
                    </a>
                    <ul class=" right hide-on-med-and-down">
                        <li><a href="/admin">Administration</a></li>
                        <li><a href="/settings">Paramètres</a></li>
                        <li><a href="/logout">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
