<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../../../public/css/style-connection.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Page d'authentification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<style>
@media only screen and (max-width: 768px) { 
    /* For mobile: */
    #entry-error
    {
        width:65%;
        left:0;
        top:-260px;
    }
  }
</style>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
            <div class="flash-message">
              @foreach (['danger', 'warning', 'succes', 'info'] as $msg)
                 @if(Session::has('alert-'.$msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg)}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </p>
                 @endif
             @endforeach
            </div>

            <form method="POST" action="{{ route('register') }}">
                 @csrf
                <div class="modal fade" id="form-inscription" tabindex="-1" aria-labelledby="form-inscriptionLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                                <div class="modal-header bg-dark text-white">
                                    <h1 id="inscription-header">Inscription</h1>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <x-jet-label class="fas fa-user text-secondary" for="name" value="{{ __('Nom') }}" />
                                        <x-jet-input class="form-control" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>

                                    <!--<div>
                                        <x-jet-label class="fas fa-user text-secondary" for="name" value="{{ __('Prénom') }}" />
                                        <x-jet-input class="form-control" id="name" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
                                    </div>-->

                                    <div class="mt-4">
                                        <x-jet-label class="fas fa-user text-secondary" for="email" value="{{ __('Email') }}" />
                                        <x-jet-input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label class="fas fa-user text-secondary" for="password" value="{{ __('Mot de passe') }}" />
                                        <x-jet-input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label class="fas fa-user text-secondary" for="password_confirmation" value="{{ __('Confirmez votre mot de passe') }}" />
                                        <x-jet-input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                     @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                     'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                     ]) !!}
                                                </div>
                                            </div>
                                            </x-jet-label>
                                        </div>
                                     @endif
                                </div>

                                <div id="errors">
                                    <p class="text-danger" id="nameErr">Ce champs est obligatoire !</p>
                                    <p class="text-danger" id="prenomErr">Ce champs est obligatoire !</p>
                                    <p class="text-danger" id="emailErr">Ce champs est obligatoire !</p>
                                    <p class="text-danger" id="passwordErr">Ce champs est obligatoire !</p>
                                    <p class="text-danger" id="passwordErr2">Ce champs est obligatoire !</p>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                     {{ __('Déjà inscris?') }}
                                    </a>

                                    <x-jet-button class="ml-4">
                                        {{ __('Inscription') }}
                                    </x-jet-button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script src="js/script-connection.js"></script>


 <!--<form action="#" method="post">
        <div class="modal fade" id="form-inscription" tabindex="-1" aria-labelledby="form-inscriptionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h1 id="inscription-header">Inscription</h1>
                    </div>
                    <div class="modal-body">
                        <label><i class="fas fa-user text-secondary"></i> Nom: <span class="required text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" id="name">
                        <label><i class="fas fa-user text-secondary"></i> Prénom: <span class="required text-danger">*</span></label>
                        <input class="form-control" type="text" name="prenom" id="prenom">
                        <label><i class="fas fa-envelope text-secondary"></i> Email: <span class="required text-danger">*</span></label>
                        <input class="form-control" type="email" name="inscription-email" id="inscription-email">
                        <label><i class="fas fa-lock text-secondary"></i> Mot de passe: <span class="required text-danger">*</span></label>
                        <input class="form-control" type="password" name="inscription-password" id="inscription-password">
                        <label><i class="fas fa-lock text-secondary"></i> Confirmation mot de passe: <span class="required text-danger">*</span></label>
                        <input class="form-control" type="password" name="inscription-password-confirm" id="inscription-password-confirm">
                    </div>

                    <div id="errors">
                        <p class="text-danger" id="nameErr">Ce champs est obligatoire !</p>
                        <p class="text-danger" id="prenomErr">Ce champs est obligatoire !</p>
                        <p class="text-danger" id="emailErr">Ce champs est obligatoire !</p>
                        <p class="text-danger" id="passwordErr">Ce champs est obligatoire !</p>
                        <p class="text-danger" id="passwordErr2">Ce champs est obligatoire !</p>
                    </div>



                    <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success" id="btn-inscription-post">Confirmer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="js/script-connection.js"></script>-->
