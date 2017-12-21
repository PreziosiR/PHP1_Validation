<?php
function addProduct($title, $price, $image, $description)
{
  echo $title;
  echo "</br>";
  echo "<img src='images/$image'/>";
  echo "</br>";
  echo $price;
  echo "</br>";
  echo $description;
  echo "</br>";
}
//vérifie si le panier existe déjà, si non le crée
function createCart()
{
   if (!isset($_SESSION['cart'])){
      $_SESSION['cart'] = array();
      $_SESSION['cart']['title'] = array();
      $_SESSION['cart']['nbProduct'] = array();
      $_SESSION['cart']['price'] = array();
   }
   return true;
}
//ajout d'un article au panier
function addArticleCart($title, $nbProduct, $price)
{
  if (createCart())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($title,  $_SESSION['cart']['title']);

       if ($positionProduit !== false)
       {
          $_SESSION['cart']['nbProduct'][$positionProduit] += $nbProduct ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['cart']['title'],$title);
          array_push( $_SESSION['cart']['nbProduct'],$nbProduct);
          array_push( $_SESSION['cart']['price'],$price);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
//supprime un produit du panier
function deleteProduct($title)
{
   //Si le panier existe
   if (createCart())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['title'] = array();
      $tmp['nbProduct'] = array();
      $tmp['price'] = array();

      for($i = 0; $i < count($_SESSION['cart']['title']); $i++)
      {
         if ($_SESSION['cart']['title'][$i] !== $title)
         {
            array_push( $tmp['title'],$_SESSION['cart']['title'][$i]);
            array_push( $tmp['nbProduct'],$_SESSION['cart']['nbProduct'][$i]);
            array_push( $tmp['price'],$_SESSION['cart']['price'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
//permet de modifier la quantité d'un produit dans le panier
function modifyQtProduct($title,$nbProduct)
{
   //Si le panier existe
   if (createCart())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($nbProduct > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($title,  $_SESSION['cart']['title']);

         if ($positionProduit !== false)
         {
            $_SESSION['cart']['nbProduct'][$positionProduit] = $nbProduct ;
         }
      }
      else
      deleteProduct($title);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
//fait le total du panier
function CountCart()
{
   $total=0;
   for($i = 0; $i < count($_SESSION['cart']['nbProduct']); $i++)
   {
      $total += $_SESSION['cart']['nbProduct'][$i] * $_SESSION['cart']['price'][$i];
   }
   return $total;
}

function supprimePanier()
{
   unset($_SESSION['panier']);
}
