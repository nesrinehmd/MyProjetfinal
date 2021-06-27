@section(formulaire-vehicule)

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
                        <select class="form-select" id='rubrique-vihecule'>
                            <option>Séléctionnez une rubrique...</option>
                            <option value='autos'>Automobiles</option>
                            <option value='camions'>Camions</option>
                            <option value='motos'>Motos</option>
                            <option value='scooters'>Scooters</option>
                            <option value="engins">Engins</option>
                            <option value="fourgons">Fourgons</option>
                            <option value="remorques">Remorques</option>
                            <option value="bus">Bus</option>
                            <option value="tracteurs">Tracteurs</option>
                            <option value="bateaux">Bateaux barques</option>
                            <option value="quads">Mini bus-quads</option>
                            <option>Pièces détachées</option>
                            <option>Accessoires automobile</option>
                            <option>Pièces Moto</option>
                            <option>Outils de diagnostics</option>
                            <option>Sonos et Electronique </option>
                            <option>Nettoyage et Entretien</option>
                        </select>
                    </div>

                    <div id="vihecule-filtres"> <!-- Filtres -->
                        <div>
                            <label>Wilaya</label>
                            <select class="form-select">
                                <option>01 - Adrar</option>
                                <option>02 - Chlef</option>
                                <option>03 - Leghouat</option>
                                <option>04 - Oum El Bouaghi</option>
                                <option>05 - Batna</option>
                            </select>
                        </div>
                        <div>
                            <label>Marque</label>
                            <select class="form-select">
                                <option>Renault</option>
                                <option>Seat</option>
                                <option>Peugeot</option>
                                <option>Volkswagen</option>
                                <option>Toyota</option>
                                <option>Hyundai</option>
                            </select>                     
                        </div>

                        <div>
                            <label>Energie</label>
                            <select class="form-select">
                                <option>Essence</option>
                                <option>Diesel</option>
                                <option>GPL</option>
                            </select>                     
                        </div>

                        <div class='hide_vihecule'>
                            <label>Année</label>
                            <select class="form-select">
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                            </select>                     
                        </div>

                        <div class='hide_vihecule'>
                            <label>Boite</label>
                            <select class="form-select">
                                <option>Automatique</option>
                                <option>Manuelle</option>
                                <option>Licence</option>
                            </select>                     
                        </div>

                        <div class='hide_vihecule'>
                            <label>Papiers</label>
                            <select class="form-select">
                                <option>Carte grise</option>
                                <option>Carte jaune</option>
                            </select>                     
                        </div>

                        <div class='hide_vihecule'>
                            <label>Kilométrage</label>
                            <select class="form-select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                
                            </select> 
                        </div>

                        <div class='hide_vihecule'>
                            <label>Puissance</label>
                            <select class="form-select">
                                <option>65 ch</option>
                                <option>75 ch</option>
                                <option>90 ch</option>
                                <option>110 ch</option>
                                <option>120 ch</option>
                                <option>140 ch</option>
                                <option>170 ch</option>
                                <option>220 ch</option>
                            </select>                     
                        </div>
                    </div>

                    <div class="infos-filtres" id="vihecule-checks">
                        <div>
                            <label>Echange</label> <input type="checkbox">
                        </div>
                        <div>
                            <label>Photo</label> <input type="checkbox">
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
