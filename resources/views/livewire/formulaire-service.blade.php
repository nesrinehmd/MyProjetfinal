@section('service')

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
                            <option>Transport et d??m??nagement</option>
                            <option>D??coration et Am??nagement</option>
                            <option>Traiteurs & G??teaux</option>
                            <option>Froid & climatisation</option>
                            <option>Nettoyage & Jardinage</option>
                            <option>R??paration automobiles et diagnostiques</option>
                            <option>Ev??nementiel et mariage</option>
                            <option>Vid??o et son</option>
                            <option>Esth??tique & Beaut??</option>
                            <option>Couture & Confection </option>
                            <option>Maintenance informatique</option>
                            <option>Paraboles & Flashage</option>
                            <option>R??paration ??lectronique</option>
                            <option>R??paration ??l??ctrom??nager</option>
                            <option>R??paration de t??l??phones</option>
                            <option>Chemin??es</option>
                            <option>Construction </option>
                            <option>??lectricit??</option>
                            <option>Outillage ?? main et ??lectroportatif</option>
                            <option>Peintures, outils et traitement des murs</option>
                            <option>Plomberie</option>
                            <option>Quincaillerie</option>
                            <option>Rangement et organisation</option>
                            <option>S??curit??</option>

                            
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
                            <label>Num??ro de t??l??phone</label>
                            <input type="tel" class="form-control" name="tel">
                        </div>

                        <div>
                            <label>Courrier ??l??ctronique</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div>
                        <label>Prix</label>
                        <input type="number" name="price" class="form-control" placeholder="Mentionnez le prix...">
                        <select class="form-select" name="price">
                            <option>N??gociable</option>
                            <option>Non n??gociable</option>
                        </select>
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea rows="6" class="form-control form-description" placeholder="D??crivez votre annonce..."></textarea>
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
