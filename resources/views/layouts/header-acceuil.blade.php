<header id="main-header">

<div class="d-flex" id="logo-container">
    <a href="index.php"><img src="images/logo.png" alt="..." id="logo"></a>
    <a href="#">Publicité</a>

    <!--@livewire('live-search')-->
    <!--<livewire:search/>-->
    <form type="get" action="{{ route('search') }}" onsubmite="search(event)" id="searchForm"><!--pour la recherche on ajoute onsubmite on va utiliser ajax-->
        <input id="form-header" name="nom" placeholder="Effectuer une recherche...">
    </form>
</div>

<div id="nav-container">
    <nav>
        <a href="index.php" title="Accueil"><i class="fas fa-home"></i></a>
        <a href="annonces.php" title="Annonces"><i class="fas fa-bullhorn"></i></a>
        <a href="messagerie.php" title='Blog'><i class="fas fa-users"></i></a>
    </nav>
</div>

<div id="user-space">
    @if (Route::has('login'))
        @auth
            @include('layouts/header-profil')
        @else

            <div id="user-coords">
                <!--<img src="images/user-avatar.png" alt="...">-->
                <p> <a class="d-flex col-6 text-white" href="{{ route('login') }}"> Connexion </a></p>
            </div>
            @if (Route::has('register'))
                <div id="user-coords">
                    <p> <a class="d-flex col-6 text-white" href="{{ route('register') }}"> Inscription </a></p>
                </div>
            @endif
        @endauth
    @endif


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
