<?php
function addProduct($title, $price, $image, $description)
{
  echo $title;
  echo "<img src='images/$image'/>";
  echo $price;
  echo $description;
}
