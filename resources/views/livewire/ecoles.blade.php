@section('ecoles')
<div class="d-flex">
                <aside id="filtre-container" class="border-right">

                    <nav class="d-flex flex-column">
                        <p><b>Ecoles et enseignement</b></p>
                        <a href="#"><i class="fas fa-chevron-left"></i> Créche</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Écoles spécialisé </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Écoles privées primaire</a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Ecoles privées Collège  </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Ecoles privées Lycée </a>
                        <a href="#"><i class="fas fa-chevron-left"></i> Formations professionnelles </a>
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
                            <label for="">Langues</label>
                            <select class="form-select">
                                <option>Français</option>
                                <option>Anglais</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column">
                            <label for="">Prix</label>
                            <select class="form-select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                            </select>
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