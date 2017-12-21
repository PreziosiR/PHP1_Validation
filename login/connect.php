<?php
session_start();
if(isset($_POST['username']) || isset($_POST['password']))
{
  $_SESSION['user'] = array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
  );
}
header('Location: ../index.php');
