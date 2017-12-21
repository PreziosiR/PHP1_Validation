<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <title>Nexus Generator</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel="stylesheet" href="layout/login/css/style.css">
</head>
<body>
<form method='POST' action='login/connect.php'>
  <div id="signin">
    <div class="form-title">Se connecter</div>
    <div class="input-field">
      <input type="text" name='username' id="email" autocomplete="off"/>
      <i class="material-icons">email</i>
      <label for="email">Nom d'utilisateur</label>
    </div>
    <div class="input-field">
      <input type="password" name='password' id="password"/>
      <i class="material-icons">lock</i>
      <label for="password">Mot de passe</label>
    </div>
    <button type='submit' class="login">Se connecter</button>
    <div class="check">
      <i class="material-icons">check</i>
    </div>
  </div>
</form>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script  src="layout/login/js/index.js"></script>
</body>
</html>
