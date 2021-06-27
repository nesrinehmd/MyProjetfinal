@extends('App')
@section('content')

<button id="myBtn" title="Remonter vers le haut"><i class="fas fa-chevron-up"></i></button>


        <!-- sliders publicités -->
        <section id="adds-slides" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="6000">
                    <img src="images/bg1.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="images/bg2.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="images/bg3.jpg" class="d-block w-100 rounded" alt="...">
                </div> 
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="images/bg4.jpg" class="d-block w-100 rounded" alt="...">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#adds-slides" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#adds-slides" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>


        <!-- grille de publicités -->

        <section id="adds-menu">

            <div class="bg-white add-item"><p class="text-center title">Titre</p><img src="images/add4.jpg" alt="publicité"></div>
            <div class="bg-white add-item"><p class="text-center title">Titre</p><img src="images/add3.jpg" alt="publicité"></div>

          
            <div class="add-item">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="d-flex flex-column sponsorblock">
                            <div class="d-flex sponsoritem">
                                <img src="images/add3.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex sponsoritem">
                                <img src="images/add3.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="d-flex flex-column sponsorblock">
                            <div class="d-flex sponsoritem">
                                <img src="images/add4.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité2</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex sponsoritem">
                                <img src="images/add4.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité2</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="d-flex flex-column sponsorblock">
                            <div class="d-flex sponsoritem">
                                <img src="images/add2.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité3</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex sponsoritem">
                                <img src="images/add2.jpg" class="d-block" alt="...">
                                <div class="sponsor-caption">
                                    <p>Publicité3</p>
                                    <p><a href="#">siteweb.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>  
            </div>         

            

            <div class="bg-white add-item"><p class="text-center title">Titre</p><img src="images/add4.jpg" alt="publicité"></div>
            <div class="bg-white add-item"><p class="text-center title">Titre</p><img src="images/add3.jpg" alt="publicité"></div>
            <div class="bg-white add-item"><p class="text-center title">Titre</p><img src="images/add4.jpg" alt="publicité"></div>
        </section>


        <!-- Catégorie avec animation -->
        <section class="d-flex flex-column rounded category">
            <header class="text-dark category-header"> <p class="category-title">Écoles et Enseignement</p> </header>

            <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "autoPlay": 1500, "pauseAutoPlayOnHover": true}'>

                    <div class="carousel-cell d-flex flex-column item1">
                        <img src="arch1.jpg" alt="image" class="img-item pt-3">
                        <p class="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="btn show-item-btn mb-3">Consulter l'annonce</a>
                    </div>
        
                    <div class="carousel-cell d-flex flex-column item1">
                        <img src="images/cat1.jpg" alt="image" class="img-item pt-3">
                        <p class="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="btn show-item-btn mb-3">Consulter l'annonce</a>
                    </div>

                    <div class="carousel-cell d-flex flex-column item1">
                        <img src="images/cat2.jpg" alt="image" class="img-item pt-3">
                        <p class="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="btn show-item-btn mb-3">Consulter l'annonce</a>
                    </div>

                    <div class="carousel-cell d-flex flex-column item1">
                        <img src="images/cat3.jpg" alt="image" class="img-item pt-3">
                        <p class="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="btn show-item-btn mb-3">Consulter l'annonce</a>
                    </div>

                    <div class="carousel-cell d-flex flex-column item1">
                        <img src="arch1.jpg" alt="image" class="img-item pt-3">
                        <p class="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="btn show-item-btn mb-3">Consulter l'annonce</a>
                    </div>       
            </div>
        </section>

        <!-- Footer de la page-->

        <button id="on-top">Retour vers haut</button>


@endsection

