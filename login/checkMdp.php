<?php
// On get le contenu de notre fichier json
$string = file_get_contents("user.json");
$json = json_decode($string);
// On intialise une variable valid
$valid = false;
// Si la session User existe
if(isset($_SESSION['user']))
{
  // On boucle sur le json
  foreach($json as $key => $value)
  {
    // On intialise un compteur afin de determiner quel element on doit detecter
    $i = 0;
    // On boule sur la value
    foreach($value as $values)
    {
      // Si c'est la premiere fois qu'on passe
      if($i == 0){
        // On detecte si l'username correspond a la value dans le fichier json
        if($_SESSION['user']['username'] == $values)
        {
          // On etabli une variable temporaire
          $validTemporary = true;
          //On incrémente le compteur
          $i++;
        }
      } elseif($i == 1) {
        // Si la session password correspond a la valu dans le fichier json
        if($_SESSION['user']['password'] == $values)
        {
          // On regarde si la valeur temporaire est true
          if($validTemporary)
          {
            // Ca veut dire que l'utilisateur a saisi les bons identifiants
            $valid = true;
          }
        }
      }
    }
  }
}
