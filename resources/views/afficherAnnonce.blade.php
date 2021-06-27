@section('content')

<div class='container'>
@foreach ($annonce as $an )

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $ad->titre }}</h5>
    <small> {{ Carbon\Carbon::parse($an->created_at)->diffForHumans() }} </small> <!--permet d'afficher la date de la creation tel que créé il ya 3 jours ...-->
    <p class="card-text">{{ $ad->description }}</p>
    <a href="#" class="btn btn-primary">Afficher détail</a>
  </div>
</div>

@endforeach
{{ $annonce->links() }} <!-- Pour afficher le lien vers les autres pages pour voir les autres annonces-->
</div>
@endsection
