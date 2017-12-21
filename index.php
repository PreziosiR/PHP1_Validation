
 <?php
 session_start();
 // On require le fichier qui check si l'user s'est co
 require('login/checkMdp.php');
 // On check si l'utilisateur est connecté
 if (isset($_SESSION['user']) && $valid) {
     // On inclut le body header ainsi que body
     include('layout/header.php');
     include('layout/body.php');

     // Si la session container est pas vide
     if (isset($_SESSION['html'])) {
         echo $_SESSION['html'];
     }
     // On inclut le footer
     include('layout/footer.php');
 } else {
     include('layout/login/login_form.php');
 }
