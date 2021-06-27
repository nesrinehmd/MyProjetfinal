@extends('App')
@section('content')

  <section id="main">
            <h2>Séléctionnez une catégorie...</h2>
            <hr>

            <div id="menu-cat">
                <div class="cat-item" id="cat01">
                <img src="images/cat1.jpg" alt="photo...">
                <p>Écoles et Enseignement</p>
                </div>

                <div class="cat-item" id="cat02">
                    <img src="images/cat2.jpg" alt="catégorie" id="image2">
                    <p>Immobilier</p>
                </div>

                <div class="cat-item" id="cat03">
                <img src="images/cat3.jpg" alt="catégorie">
                    <p>Entreprises</p>
                </div>

                <div class="cat-item" id="cat04">
                    <img src="images/cat4.jpg" alt="catégorie">
                    <p>Emplois</p>
                </div>

                <div class="cat-item" id="cat05">
                    <img src="images/cat5.jpg" alt="catégorie">
                    <p>Véhicules</p>
                </div>

                <div class="cat-item" id="cat06">
                    <img src="images/cat6.png" alt="catégorie">
                    <p>High-Tech / Téléphonie</p>
                </div>

                <div class="cat-item" id="cat07">
                    <img src="images/cat7.png" alt="catégorie">
                    <p>Informatique</p>
                </div>

                <div class="cat-item" id="cat08">
                    <img src="images/cat8.jpg" alt="catégorie">
                    <p>Beauté et bien être</p>
                </div>

                <div class="cat-item" id="cat09">
                    <img src="images/cat9.jpg" alt="catégorie">
                    <p>Hygiène et Santé</p>
                </div>

                <div class="cat-item" id="cat10">
                    <img src="images/cat10.jpg" alt="catégorie">
                    <p>Mode et Accessoires</p>
                </div>

                <div class="cat-item" id="cat11">
                    <img src="images/cat11.jpg" alt="catégorie">
                    <p>Sports et Loisirs</p>
                </div>

                <div class="cat-item" id="cat12">
                    <img src="images/cat12.jpg" alt="catégorie">
                    <p>Matériaux et équipements</p>
                </div>

                <div class="cat-item" id="cat13">
                    <img src="images/cat13.jpg" alt="catégorie">
                    <p>Voyages et vacances</p>
                </div>

                <div class="cat-item" id="cat14">
                    <img src="images/cat14.jpg" alt="catégorie">
                    <p>Services et bricolage</p>
                </div>

                <div class="cat-item" id="cat15">
                    <img src="images/cat15.jpg" alt="catégorie">
                    <p>Marketplace</p>
                </div>

                <div class="cat-item bg-white" id="cat16">
                    <img src="images/cat16.jpg" alt="catégorie">
                    <p>Bazar</p>
                </div>


            </div>
        </section>



        <!-- formulaire écoles -->
        <div class="modal" id="modal01">
            <div class="animate">
                
                <form id="form01" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Écoles et Enseignement</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre <span>*</span></label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Écoles spécialisé</option>
                            <option>École primaire</option>
                            <option>Collége</option>
                            <option>Lycée</option>
                            <option>Formation professionnelle</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Ville <span>*</span></label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone (facultatif)</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

                <!-- Immobilier -->
                <div class="modal" id="modal02">
            <div class="animate">
                
                <form id="form02" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Immobilier</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <optgroup label="Vente et achat">
                                <option>Terrain</option>
                                <option>Villa</option>
                                <option>Appartement</option>
                                <option>Local</option>
                                <option>Carcasse</option>
                                <option>Terrain agricole</option>
                                <option>Hangar</option>
                                <option>Echange</option>
                            </optgroup>
                            <optgroup label="Location">
                                <option>Terrain</option>
                                <option>Villa</option>
                                <option>Appartement</option>
                                <option>Local</option>
                                <option>Carcasse</option>
                                <option>Terrain agricole</option>
                                <option>Hangar</option>
                                <option>Echange</option>
                            </optgroup>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Etreprises -->
        <div class="modal" id="modal03">
            <div class="animate">
                
                <form id="form03" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Entreprises</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Ecoles et Formations</option>
                            <option>Médecine et Santé</option>
                            <option>Publicité et Communication</option>
                            <option>Comptabilité et Economie</option>
                            <option>Juridique</option>
                            <option>Impression et Edition</option>
                            <option>Industrie et Fabrication</option>
                            <option>Matériaux et équipement</option>
                            <option>Agronomie et agriculture</option>
                            <option>Maintenance informatique</option>
                            <option>Bureautique et Internet</option>
                            <option>Hôtellerie et Restauration</option>
                            <option>Esthétique et Beauté</option>
                            <option>Evènementiel et Divertissement</option>
                            <option>Construction et Travaux</option>
                            <option>Décoration et Aménagement</option>
                            <option>Froid et Climatisation</option>
                            <option>Traiteurs</option>
                            <option>Nettoyage et Jardinage</option>
                            <option>Location de véhicules</option>
                            <option>Déménagement</option>
                            <option>Réparation auto et Diagnostic</option>
                            <option>Image et Son</option>

                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Emplois -->
        <div class="modal" id="modal04">
            <div class="animate">
                
                <form id="form04" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Emplois</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Education et Formations</option>
                            <option>Santé</option>
                            <option>Administration et Management</option>
                            <option>Commercial et Marketing</option>
                            <option>Industrie et Production</option>
                            <option>Comptabilité et Audit</option>
                            <option>Informatique & Internet</option>
                            <option>Bureautique et Secrétariat</option>
                            <option>Tourisme et Gastronomie</option>
                            <option>Commerce et Vente</option>
                            <option>Transport</option>
                            <option>Beauté & Esthétique</option>
                            <option>Couture et Confection</option>
                            <option>Nettoyage & Hygiène</option>
                            <option>Mécanique Auto</option>
                            <option>Securité</option>
                            <option>Agents polyvalents</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Véhicules -->
        <div class="modal" id="modal05">
            <div class="animate">
                
                <form id="form05" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Véhicules</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Automobiles</option>
                            <option>Camions</option>
                            <option>Motos</option>
                            <option>Scooters</option>
                            <option>Engins</option>
                            <option>Fourgons</option>
                            <option>Remorques</option>
                            <option>Bus</option>
                            <option>Tracteurs</option>
                            <option>Batteaux barques</option>
                            <option>Mini bus-quads</option>
                            <option>Pièces détachées</option>
                            <option>Accessoires automobile</option>
                            <option>Pièces Moto</option>
                            <option>Outils de diagnostics</option>
                            <option>Sonos et Electronique </option>
                            <option>Nettoyage et Entretien</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

    
        <!-- High-Tech / Téléphonie -->
        <div class="modal" id="modal06">
            <div class="animate">
                
                <form id="form06" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">High-Tech et Téléphonie</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Alimentation et accessoires</option>
                            <option>Alimentation et accessoires</option>
                            <option>Casques, écouteurs et accessoires</option>
                            <option>Electronique embarquée</option>
                            <option>Garanties</option>
                            <option>GPS et accessoires</option>
                            <option>Informatique</option>
                            <option>Liseuses et accessoires</option>
                            <option>Photo et caméscopes</option>
                            <option>Piles, chargeurs et testeurs</option>
                            <option>Radios et accessoires</option>
                            <option>Tablettes tactiles</option>
                            <option>Téléphones fixes, VoIP et accessoires</option>
                            <option>Téléphones portables et accessoires</option>
                            <option>TV, vidéo et home cinéma</option>
                            <option>Univers Hi-Fi </option>
                            <option>Flashage & Réparation des téléphones</option>
                            <option>Jeux vidéo</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>


        
        <!-- Informatique -->
        <div class="modal" id="modal07">
            <div class="animate">
                
                <form id="form07" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Informatique</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Accessoires</option>
                            <option>Ardoises numériques et eWriters</option>
                            <option>Casques, écouteurs et accessoires</option>
                            <option>Barebones</option>
                            <option>Composants et pièces de remplacement</option>
                            <option>Écrans PC</option>
                            <option>Imprimantes et accessoires</option>
                            <option>Mémoires</option>
                            <option>Ordinateurs de bureau</option>
                            <option>Ordinateurs portables</option>
                            <option>Réseaux</option>
                            <option>Tablettes tactiles</option>
                            <option>Scanners et accessoires</option>
                            <option>Serveurs</option>
                            <option>Tablettes tactiles</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Beauté et bien étre -->
        <div class="modal" id="modal08">
            <div class="animate">
                
                <form id="form08" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Beauté et bien être</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Beauté et Parfum</option>
                            <option>Accessoires et outils</option>
                            <option>Bain, savons et soins du corps</option>
                            <option>Coiffure et soins des cheveux</option>
                            <option>Maquillage</option>
                            <option>Parfums</option>
                            <option>Rasage et Épilation</option>
                            <option>Soins pour la peau</option>
                            <option>Vernis à ongles et manucure</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Hygiène et Santé -->
        <div class="modal" id="modal09">
            <div class="animate">
                
                <form id="form09" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Hygiène et Santé</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre <span>*</span></label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Bain, savons et soins du corps</option>
                            <option>Bien-être et massage</option>
                            <option>Cigarettes électroniques, chichas et accessoires</option>
                            <option>Coiffure et soins des cheveux</option>
                            <option>Érotisme, sexe et sensualité</option>
                            <option>Hygiène dentaire</option>
                            <option>Hygiène et soins intimes</option>
                            <option>Matériel et fournitures médicales</option>
                            <option>Optique et lentilles</option>
                            <option>Rasage et épilation</option>
                            <option>Santé et premiers soins</option>
                            <option>Soin du bébé</option>
                            <option>Vitamines, minéraux et compléments</option>


                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Ville <span>*</span></label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone (facultatif)</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
                <!-- Mode et Accessoires -->
                <div class="modal" id="modal10">
            <div class="animate">
                
                <form id="form10" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Mode et Accessoires</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                                <option>Femmes</option>
                                <option>Hommes</option>
                                <option>Garçons</option>
                                <option>Filles</option>
                                <option>Bébés</option>
                                <option>Marques</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Sports et loisirs -->
        <div class="modal" id="modal11">
            <div class="animate">
                
                <form id="form11" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Emplois</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Accessoires de sport</option>
                            <option>Billetterie</option>
                            <option>Chaussures de sport</option>
                            <option>Divers jeux</option>
                            <option>Électronique</option>
                            <option>Fitness et Musculation</option>
                            <option>Medecine du sport</option>
                            <option>Trophées</option>
                            <option>Vêtements de sport</option>
                            <option>Activités de plein air</option>
                            <option>Sports</option>
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Services et bricolage -->
        <div class="modal" id="modal14">
            <div class="animate">
                
                <form id="form014" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Services et bricolage</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Construction & Travaux</option>
                            <option>Ecoles et Formations</option>
                            <option>Transport et déménagement</option>
                            <option>Décoration et Aménagement</option>
                            <option>Traiteurs & Gâteaux</option>
                            <option>Froid & climatisation</option>
                            <option>Nettoyage & Jardinage</option>
                            <option>Réparation automobiles et diagnostiques</option>
                            <option>Evénementiel et mariage</option>
                            <option>Vidéo et son</option>
                            <option>Esthétique & Beauté</option>
                            <option>Couture & Confection </option>
                            <option>Maintenance informatique</option>
                            <option>Paraboles & Flashage</option>
                            <option>Réparation électronique</option>
                            <option>Réparation éléctroménager</option>
                            <option>Réparation de téléphones</option>
                            <option>Cheminées</option>
                            <option>Construction </option>
                            <option>Électricité</option>
                            <option>Outillage à main et électroportatif<</option>
                            <option>Peintures, outils et traitement des murs</option>
                            <option>Plomberie</option>
                            <option>Quincaillerie</option>
                            <option>Rangement et organisation</option>
                            <option>Sécurité</option>

                            
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        
        <!-- Voyages et vacances -->
        <div class="modal" id="modal13">
            <div class="animate">
                
                <form id="form13" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Voyages et vacances</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Voyages organisés</option>
                            <option>Réservations</option>
                            <option>Réservations et Visa-séjour</option>
                            <option>Hadj & Omra</option>
                            <option>Etudes & Formations à l’étranger</option>
                            <option>Emplois à l étranger</option>
                            <option>Immigration</option>
                            <option>Croisière</option>
                            <option>Devis voyage gratuit</option>
                            
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Matériaux et équipements -->
        <div class="modal" id="modal12">
            <div class="animate">
                
                <form id="form012" class="form">
                <div>
                    <span class="close-cat">&times;</span>
                    <p class="form-title">Matériaux et équipements</p>
                </div>

                    

                    <div class="form-choice">
                        <div class="border d-flex pro-choice">
                            <i class="fas fa-user text-primary"></i>
                            <label>Partculier</label>
                            <input type="radio" name="choice" class="choice1">
                        </div>

                        <div class="border d-flex particular-choice">
                            <i class="fas fa-briefcase text-primary"></i>
                            <label>Professionnel</label>
                            <input type="radio" name="choice" class="choice2">
                        </div>
                    </div>

                    <div class="d-flex civilite" >
                        <div class="d-flex flex-column">
                            <label>Mlle</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Mme</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>M</label>
                            <input type="radio" name="cev">
                        </div>
                    </div>

                    <div>
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre">
                    </div>

                    <div>
                    <label>Rubrique</label>
                        <select class="form-select" name="subcat">
                            <option>Matériel professionnel</option>
                            <option>Industrie et Fabrication</option>
                            <option>Médical</option>
                            <option>Bâtiment et Construction</option>
                            <option>Matériel électrique</option>
                            <option>Alimentaire</option>
                            <option>Ateliers Agricoles</option>
                            <option>Magasins</option>
                            <option>Réparation & Diagnostic</option>
                            <option>Esthétique & Beauté</option>
                            <option>Bureaux</option>
                            <option>Outillage professionnel</option>
                            <option>Matériaux de construction</option>
                            <option>Matières premières</option>
                            <option>Produits hygiène</option>
                            
                        </select>
                    </div>

                   <div class="d-flex name-space">
                        <div>
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom">
                        </div>

                        <div>
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom">
                        </div>
                   </div>

                    <div>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Adresse</label>
                        <select class="form-select" name="adresse">
                            <option>01 - Adrar</option>
                            <option>02 - Chlef</option>
                            <option>03 - Leghouat</option>
                            <option>04 - Oum El Bouaghi</option>
                            <option>05 - Batna</option>
                        </select>
                    </div>

                    <div class="d-flex coords-space">
                        <div>
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier éléctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>Négociable</option>
                            <option>Non négociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="Décrivez votre annonce..."></textarea>
                    </div>

                    
                    <div>
                        <label>Diffusion de votre annonce</label>
                        <div class="duree d-flex">
                            <div class="d-flex flex-column">
                                <label>01 semaine</label>
                                <input type="radio" name="cev">
                            </div>
                        <div class="d-flex flex-column">
                            <label>02 semaine</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>01 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        <div class="d-flex flex-column">
                            <label>02 mois</label>
                            <input type="radio" name="cev">
                        </div>
                        </div>
                    </div>

                    <div>
                        <label>Photos</label>
                        <input type="file" class="form-control" name="images">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success">Envoyer</button>
                        <a class="btn btn-danger close-cat">Retour</a>
                    </div>
                </form>
            </div>
        </div>
       


@endsection