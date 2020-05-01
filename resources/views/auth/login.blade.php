
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SVC</title>

    <!-- Bootstrap -->
    <link href="{{asset('/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/gentelella-master/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/gentelella-master/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('/gentelella-master/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/gentelella-master/build/css/custom.min.css')}}" rel="stylesheet">




  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
               @csrf
              <h1>Connexion</h1>
              <div>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail" required="" />
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                 @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>
              <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Se rappeler de moi
                                    </label>
                        </div>
                   </div>
              </div>
              <div>
               <button type="submit" class="btn btn-primary"> {{ __('Login') }} </button>
                 @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">Mot de passe oublié?</a> 
                 @endif
              </div>

              

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nouveau sur la plateforme?
                  <a href="#signup" class="to_register"> Créez votre compte </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h3><i class="fa fa-paw"></i> careConcept!</h3>
                  <p>NET2ALL©2020 All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <h1>Inscription</h1>
              <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom et Prénoms">

                                @error('name')
                                    careconcept/public/<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required="">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror"
              </div>

              <div>
                <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" placeholder="Téléphone" autofocus>

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div>
                <select class="form-control @error('genre') is-invalid @enderror" id="exampleFormControlSelect1" name="genre">
                  <option>Masculin</option>
                  <option>Féminin</option>
                </select> <br>
            

                 @error('genre')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>

              <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="new-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Créer le compte </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Vous avez déjà un compte ?
                  <a href="#signin" class="to_register"> Connectez-vous </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h3><i class="fa fa-paw"></i> careConcept!</h3>
                  <p>NET2ALL©2020 All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
