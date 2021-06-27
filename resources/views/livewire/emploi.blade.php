@section('emploi')
<div class="d-flex">
                <aside id="filtre-container" class="border-right">

                    <nav class="d-flex flex-column">
                        <p><b>Emploi</b></p>
                        <a href="#"><i class="fas fa-chevron-left"></i> Education et formation</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Santé</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Administration et Management</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Commercial et Marketing</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Industrie et Production</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Comptabilité et Audit</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Informatique & Internet</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Bureautique et Secrétariat </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Tourisme et Gastronomie </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Commerce et Vente </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Transport  </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Beauté & Esthétique </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Couture et Confection</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Nettoyage & Hygiène </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Mécanique Auto</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Securité</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Agents polyvalents</a>
                        <a href="#" class="pl-3">Voir stores</a>
                    </nav>
                    <form>
                        <div class="d-flex flex-column">
                            <label for="">Wilaya</label>
                            <select class="form-select">
                                <option>Tizi-Ouzou</option>
                                <option>Alger</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column">
                            <label for="">Sexe</label>
                            <select class="form-select">
                                <option>Homme</option>
                                <option>Femme</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column">
                            <label for="">Niveau d'éducation</label>
                            <select class="form-select">
                                <option>Primaire</option>
                                <option>Moyen</option>
                                <option>Secondaire</option>
                                <option>Bac</option>
                                <option>Licence</option>
                                <option>Master</option>
                                <option>Doctorat</option>
                                <option>Formation profesionnelle</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column">
                            <div>
                                <input type="checkbox"><label for="" class="pl-3">Permis de conduire</label>
                            </div>
                            <div>
                                <input type="checkbox"><label for="" class="pl-3">Véhicule</label>
                            </div>
                            
                        </div>

                    </form>

                </aside>

                <div id="annonces-container">                                           
                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat16.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat11.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat5.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat8.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/add4.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat7.png" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat11.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                    <div class="d-flex flex-column text-center annonces-item">
                        <img src="images/cat4.jpg" class="img-item">
                        <p id="item-describe">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="annonce-preview.php" class="show-item-btn mb-3">Consulter</a>
                    </div>  

                </div>                      
            </div>
@endsection