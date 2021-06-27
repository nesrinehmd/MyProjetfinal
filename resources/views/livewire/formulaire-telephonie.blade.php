@section('formulaire-telephonie')

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
                        <select class="form-select rubrique6">
                            <option>Séléctionnez une rubrique...</option>
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
                            <option value='fixe'>Téléphones fixes, VoIP et accessoires</option>
                            <option>Téléphones portables et accessoires</option>
                            <option value='smartphone'>Smartphones</option>
                            <option>TV, vidéo et home cinéma</option>
                            <option>Univers Hi-Fi </option>
                            <option>Flashage & Réparation des téléphones</option>
                            <option>Jeux vidéo</option>
                        </select>
                    </div>


                    <div id="smartphone-filtres"> <!-- Filtres de la rubrique smartphone -->
                        <div>
                            <label>Type de smartphone</label>
                            <select class="form-select">
                                <option>Clapet</option>
                                <option>Coulissant</option>
                                <option>Monobloc</option>
                                <option>Monobloc tactile</option>
                                <option>Rotatif</option>
                            </select> 
                        </div>    

                        <div>
                            <label>Marque</label>
                            <select class="form-select">
                                <option>Apple</option>
                                <option>Samsung </option>
                                <option>Xiaomi </option>
                                <option>Oppo</option>
                                <option>Huawei</option>
                                <option>Redmi</option>
                                <option>Condor</option>
                                <option>Lg</option>
                                <option>Nokia</option>
                                <option>Alcatel</option>
                                <option>Sony</option>
                                <option>Autre</option>
                            </select> 
                        </div>  
                        
                        <div>
                            <label>Résolution</label>
                            <select class="form-select">
                                <option>3 à 4.9MP </option>
                                <option>5 à 7.9MP </option>
                                <option>8 à 12.9 MP </option>
                                <option>13 à 19.9 MP </option>
                                <option>20 MP ou plus</option>
                            </select> 
                        </div> 

                        <div>
                            <label>Mémoire interne</label>
                            <select class="form-select">
                                <option>4GO</option>
                                <option>8GO </option>
                                <option>16GO </option>
                                <option>32GO</option>
                                <option>64GO</option>
                                <option>128GO</option>
                                <option>256GO ou plus</option>
                            </select> 
                        </div>

                        <div>
                            <label>Systéme d'exploitation</label>
                            <select class="form-select">
                                <option>Android</option>
                                <option>IOS </option>
                                <option>Linux </option>
                                <option>Windows</option>
                            </select> 
                        </div>    

                        <div>
                            <label>Condition</label>
                            <select class="form-select">
                                <option>Occasion</option>
                                <option>Neuf </option>
                            </select> 
                        </div>              
                    </div>


                    <div id="fixe-filtres"> <!-- Filtres de la rubrique téléphones fixe -->
                        <div>
                            <label>Marque</label>
                            <select class="form-select">
                                <option>Gigaset</option>
                                <option>Alcatel</option>
                                <option>Panasonic</option>
                                <option>Switel</option>
                                <option>Autre</option>
                            </select> 
                        </div>
                        
                        <div>
                            <label>Fonctions</label>
                            <select class="form-select">
                                <option>01 combinés</option>
                                <option>02 combinés</option>
                                <option>Répondeur</option>
                                <option>Sans fil</option>
                                <option>Avec fax</option>
                            </select> 
                        </div>

                        <div>
                            <label>Condition</label>
                            <select class="form-select">
                                <option>Neuf</option>
                                <option>Occasion</option>
                                
                            </select> 
                        </div>               
                    </div>

                    <div class='pro'>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div class='pro'>
                        <label>Site web</label>
                        <input type="text" class="form-control" name="website">
                    </div>

                    <div>
                        <label>Wilaya</label>
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
