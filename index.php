<?php
require 'config.php';
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
  echo 'area restrita';
}else{
  header("Location:login.php");
  exit;
}
 ?>
 <h1> aqui tera o todolist</h1>
 <a href="sair.php">Sair</a>