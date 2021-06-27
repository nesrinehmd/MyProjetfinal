@foreach ($datasearch as $data )
<div id="result">
<!-- Pour la recherche -->
 <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $data->nom }}</h5>
            <small> {{ Carbon\Carbon::parse($an->created_at)->diffForHumans() }} </small> <!--permet d'afficher la date de la creation tel que créé il ya 3 jours ...-->
            <p class="card-text">{{ $data->description }}</p>
            <a href="#" class="btn btn-primary">Afficher détail</a>
        </div>
    </div>

<!--End recherche -->
</div>
@endforeach
</div>
			    	</div>
	    		</div>
    		</div>
    	</div>

    </div>
    <script>
        function search(event)
        {
            event.preventDefault()
            const nom = document.querySelector('#nom').value
            const url = document.querySelector('#searchForm').getAttribute('action')

            axios.post(${url}, {
                nom: nom,
             })
            .then(function (response) {
               const article = response.data.article;
               let result = document.querySelector('#result')
               result.innerHTML = ''
               for(let i = 0; i < article.length; i++){
                   let card  = document.createElement('div')
                   let cardBody = document.createElement('div')
                   cardBody.classList.add('card-body')
                   card.classList.add('card', 'mb-3')
                   let nom = document.createElement('h5')
                   nom.classList.add('card-title')
                   nom.innerHTML = article[i].nom
                   let description = document.createElement('p')
                   description.classList.add('card-text')
                   description.innerHTML = article[i].description
                   cardBody.appendChild(nom)
                   cardBody.appendChild(description)
                   card.appendChild(cardBody)
                   result.appendChild(card)
               }
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    </script>
