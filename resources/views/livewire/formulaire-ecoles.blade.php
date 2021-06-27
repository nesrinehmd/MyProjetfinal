@section('formulaire-ecoles')
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
                        <select class="form-select" name="subcat" id="rubrique1">
                            <option>Séléctionnez une rubrique...</option>
                            <option value='creche'>Créche</option>
                            <option value="special">Écoles spécialisé</option>
                            <option>École primaire</option>
                            <option>Collége</option>
                            <option>Lycée</option>
                            <option value='form_pro'>Formation professionnelle</option>
                        </select>
                    </div>

                    <div class="infos-filtres" id="creche-filtres"> <!-- Filtres de la rubrique créche -->
                        <div>
                            <label>Garderie</label> <input type="checkbox">
                        </div>
                        <div>
                            <label>Pré-scolaire</label> <input type="checkbox">
                        </div>                        
                    </div>

                    <div class="infos-filtres" id="special-filtres">  <!-- Filtres de la rubrique école spécialisée -->
                        <div>
                            <label>Langues</label> <input type="checkbox">
                        </div>
                        <div>
                            <label>Informatique</label> <input type="checkbox">
                        </div>                        
                    </div>

                    <div id="form_pro">
                        <label>Spécialité</label>
                        <select class="form-select">
                            <option>Santé</option>
                            <option>Commerce et management</option>
                            <option>Finnance et comptabilité</option>
                            <option>Informatique</option>
                            <option>Hôtellerie</option>
                            <option>Bâtiment</option>
                            <option>Esthétique et beauté</option>
                            <option>Couture et confection</option>
                            <option>Transport</option>
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
@endsection
