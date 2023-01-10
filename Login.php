<?php
session_start();
require 'config.php';


if(isset($_POST['email']) && empty($_POST['email']) == false){
  $email=addslashes($_POST['email']);
  $senha = addslashes($_POST['senha']);

  echo 'area restrita';
  $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

  if($sql->rowCount()>0){
    $dado = $sql->fetch();
    $_SESSION['id'] =$dado['id'];
    header("Location:index.php");
    exit;
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>

 <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="Icone-To-Do-List.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="container-form">
        <form method="POST">

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email:</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="exemplo@gmail.com" name="email"/>
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Senha:</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Digite sua senha aqui!" name="senha" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            
            <a href="#!" class="text-body">Esqueceu a senha?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
           <input type="submit" value="Login">
            <p class="small fw-bold mt-2 pt-1 mb-0">Não tem conta?<a href="#!"
                class="link-danger"> Crie sua conta aqui</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary" id="footer-copy">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    
</section>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
 </html>