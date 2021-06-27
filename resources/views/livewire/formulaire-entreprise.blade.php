@section('entreprise')

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

                   
                    <div class='pro'>
                        <label>Enseigne</label>
                        <input type="text" class="form-control" name="enseigne">
                    </div>

                    <div class='pro'>
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
