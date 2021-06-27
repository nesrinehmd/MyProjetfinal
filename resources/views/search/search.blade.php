<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="css/style-index.css">
         <link rel="stylesheet" href="css/left-menu.css">
         <link rel="stylesheet" href="css/style-annonces.css">
         <link rel="stylesheet" href="css/style-annonces-preview.css">
         <link rel="stylesheet" href="css/header-style.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel='stylesheet' href="jquery-ui/jquery-ui.css">
        <link rel='stylesheet' href="jquery-ui/jquery-ui.structure.css">
        <link rel='stylesheet' href="jquery-ui/jquery-ui.theme.css">
        <script src="jquery-ui/external/jquery/jquery.js"></script>
      
        <title>@yield('title')</title>
        @livewireStyles
    </head>
<body>

@include('layouts/header-acceuil')
@include('layouts/navbar')


@foreach($post as $p)
<div class="container annonce-page" id='annonce-page'>
<div class="d-flex user-block rounded">
        <div id="infos-user">
            <h4>Informations sur l'annonceur</h4>
            <hr style="width:205%;">
            <p>Nom et prénom: {{$p->nom}}</p>
            <p>Numéro de téléphone : {{$p->Description}}</p></p>
            <p>Email de l'utilisateur : **********</p></p>
        </div>
        <div id="contact-user">
            <a class="btn btn-success" id="btn-contact">Contacter</a>
        </div>
    </div>
</div>
@endforeach


<!--<div class="container annonce-page" id='annonce-page'>

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
</div>-->




<!-- Footer de la page-->




    @livewireScripts
    
    <script src="js/header-script.js"></script>
    <script src="js/script-index.js"></script>
    <script type="text/javascript" src="header-script.js"></script>
    <script src="js/left-menu.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script> 
</body>
</html>