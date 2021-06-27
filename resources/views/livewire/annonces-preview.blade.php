
@section('annonces-preview')
<div class="container annonce-page" id='annonce-page'>

    <h1 class="text-center mt-3">Titre de l'annonce</h1>

   <div id="images-container">
    <div id="annonces-images" class="carousel carousel-main" data-flickity='{"freeScroll": false,"wrapAround": false,"pageDots": false,"draggable":false,"selectedAttraction":0.01}'>
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
      </div>

      <div class="carousel carousel-nav" id="miniatures"
        data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false,"prevNextButtons": false,"draggable":false}'>
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
        <img class="carousel-cell" src="images/arch1.jpg">
      </div>
   </div>


        <div class="d-flex user-block rounded">
            <div id="infos-user">
                <h4>Informations sur l'annonceur</h4>
                <hr style="width:205%;">
                <p>Nom et prénom: **********</p>
                <p>Numéro de téléphone : **********</p></p>
                <p>Email de l'utilisateur : **********</p></p>
            </div>
            <div id="contact-user">
                <a class="btn btn-success" id="btn-contact">Contacter</a>
            </div>
        </div>

        <div class="mt-3 annonce-block rounded">
            <h4>Informations sur l'annonce</h4>
            <hr>
            <p>Date de publication : **/**/**** à **:**</p>
            <p>Catégorie : *******</p>
            <p>Sous catégorie : **********</p>
            <p>Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</p>
        </div>


        <div class="accordion mt-3 mb-3" id="block-comments">
            <div class="accordion-item">
                <div class="accordion-header bg-secondary text-white p-3" >
                Commentaires
                </div>


                <div class="accordion-body">

                  <div class='comment border rounded'>
                    <p><img src="images/connection-avatar.jpg"> <span>Utilisateur</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy
                    </p>
                  </div>

                  <div class='comment border rounded'>
                    <p><img src="images/connection-avatar.jpg"> <span>Utilisateur</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, 
                    </p>
                  </div>

                  <div class='comment border rounded'>
                    <p><img src="images/connection-avatar.jpg"> <span>Utilisateur</span></p>
                        <p>Lorem ipsum dolor sit amet </p>
                  </div>

                  <div class='comment border rounded'>
                    <p><img src="images/connection-avatar.jpg"> <span>Utilisateur</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
                    </p>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
