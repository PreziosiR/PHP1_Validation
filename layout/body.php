<?php include('function.php');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ECOMMERCE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégorie
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--la liste des produits du site -->
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <?php addProduct('Ipad','350€','Ipad.jpg','Un Ipad tout neuf');?>
      <a href="cart.php?action=ajout&amp;l=Ipad&amp;q=1&amp;p=350" onclick="window.open(this.href, '',
      'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
    </div>
    <div class="col">
      <?php addProduct('GoPro','500€','Gopro.jpg','magnifique gopro');?>
      <a href="cart.php?action=ajout&amp;l=Gopro&amp;q=1&amp;p=500" onclick="window.open(this.href, '',
      'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
    </div>
    <div class="col">
      <?php addProduct('PC portable','800€','PC-Portable.jpg','un PC');?>
      <a href="cart.php?action=ajout&amp;l=PC portable lenovo&amp;q=1&amp;p=800" onclick="window.open(this.href, '',
      'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
    </div>
  </div>
</br>
  <?php
    require_once('templates/formAddProduct.php');
   ?>

   <form method="POST" action="login/deconnect.php">
       <button type="submit" class="btn btn-outline-danger waves-effect" style:"display:block; margin:auto">Se deconnecter</button>
   </form>

</div>
