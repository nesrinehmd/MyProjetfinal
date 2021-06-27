@section('mode')

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
