<header id="main-header">

   

    <div id="nav-container">
                <nav>
                    <a href="index.php" title="Accueil"><i class="fas fa-home"></i></a>
                    <a title="Annonces"><i class="fas fa-bullhorn"></i></a>
                    <a href="messagerie.php" title='Blog'><i class="fas fa-users"></i></a>
                </nav>
            </div>

            <div id="user-space">
                <div id="user-coords">
                    <img src="images/user-avatar.png" alt="...">
                    <p>Utilisateur</p>
                </div>
                <div id="user-config">
                    <select class="form-select">
                        <option>Arabe</option>
                        <option>Anglais</option>s
                        <option>Allemand</option>
                        <option>Chinois</option>
                        <option>Espagnol</option>
                        <option>Français</option>
                        <option>Italien</option>
                        <option>Japonais</option>
                        <option>Turque</option>
                        <option>Portugais</option>
                    </select>
                </div>
            </div>
        </header>

        <div id="header-menu">
            <nav>
                <a href="#">Annonces</a>
                <a href="#">Ajouter une annonce</a>
            </nav>
        </div>

        <div id="user-menu">
            <nav>
                <a href="#">Profil</a>
                <a href="#">Paramétres</a>
                @csrf
                    <a href="{{ route('logout') }}">Déconnexion</a>
            </nav>
        </div>

</header>