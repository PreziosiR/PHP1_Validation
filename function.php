<?php
function addProduct($title, $price, $image, $description)
{
  echo $title;
  echo "<img src='images/$image'/>";
  echo $price;
  echo $description;

echo"<button type='button' class='btn btn-primary'>Ajouter au panier</button>";
}
