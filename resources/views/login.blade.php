<html>
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</head>
<body>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <!-- <img src="assets/images/logo.png" class="image"> -->
      <div class="content">
       {{ env('APP_NAME') }}
      </div>
    </h2>
    <form class="ui large form" method="POST">
      {{ csrf_field() }}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <!-- <i class="user icon"></i> -->
            <input type="text" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <!-- <i class="lock icon"></i> -->
            <input type="password" name="password" placeholder="Mot de passe">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Connexion</div>
      </div>

      <div class="ui error message">

      </div>

    </form>

  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('js/semantic.min.js') }}"></script>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Merci de renseigner votre e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Merci d\'entrer une adresse e-mail valide'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Merci de renseigner votre mot de passe'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</body>
</html>