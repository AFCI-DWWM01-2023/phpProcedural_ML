 <!-- Répète le thème sur chaque page -->
 <?php ob_start() ?> 

 <!-- Début section des 4 testes  -->
 <section class="container">
    <div class="row text-center py-5">
      <h2 class="fw-light">PHP-PROCÉDURAL</h2>
    </div>
    <!-- Première exercice -->
    <div class="row justify-content-center gap-3 p-5 pb-0">
      <div class="col-lg-3 col-md-12 col-sm-12 bg-dark text-white rounded-3 shadow p-5 mb-5 ms-1">
        <p class="fs-2">Convertisseur chiffre romain 🌏<span class="bi bi-trophy-fill" style="font-size: 40px; color: rgb(255, 210, 48);"></span></p>
        <p>Convertir un nombre en chiffre romain.</p>
        <a href="./Conversion/convert.php" class="btn btn-outline text-white border-white mt-5">Convertir</a>  
      </div>
      <!-- Deuxième exercice -->
      <div class="col-lg-3 col-md-12 col-sm-12 bg-warning rounded-3 shadow p-5 mb-5">
        <p class="fs-2"> Authentification  🗯️ <span class="bi bi-cloud-haze2" style="font-size:40px"></span></p>
        <p class ="mb-5 pb-4">Essai d'une authentification avec des expressions régulière</p>
        <a href="./Authentification/authentification.php" class="btn btn-outline text-white border-white mt-5">Se diriger</a>  
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 bg-danger text-white rounded-3 shadow p-5 mb-5">
        <p class="fs-2">COOKIES 🍪<span class="bi bi-telephone-fill" style="font-size: 40px; color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px; opacity: 1;"></span></p>
        <p>Création d'un cookies.</p>
        <a href="./COOKIES/cookies.php" class="btn btn-outline text-white border-white mt-5">Se diriger</a>
      </div>
    </div>
    <div class="row justify-content-center gap-3 p-5">
      <div class="col-lg-3 col-md-12 col-sm-12 bg-primary text-white rounded-3 shadow p-5 mb-5">
        <p class="fs-2">SESSION<span class="bi bi-telephone-fill" style="font-size: 40px; color: rgb(255, 255, 255); -webkit-text-stroke-width: 0px; opacity: 1;"></span></p>
        <p>Création d'une session avec plusieurs options puis suppression.</p>
        <a href="./Session/session.php" class="btn btn-outline text-white border-white mt-5">Se diriger</a>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 bg-success rounded-3 shadow p-5 mb-5">
        <p class="fs-2">Traduction  🇫🇷  🇬🇧  🇪🇸 <span class="bi bi-cash-coin" style="font-size: 40px; color: rgb(0, 128, 55);"></span></p>
        <p>Traduction en Français, Anglais, Espagnol.</p>
        <a href="./Traduction/traduction.php" class="btn btn-outline text-dark border-dark mt-5">Se diriger</a> 
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 bg-light rounded-3 shadow p-5 mb-5">
        <p class="fs-2">Autres <span class="bi bi-cash-coin" style="font-size: 40px; color: rgb(0, 128, 55);"></span></p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, voluptate.</p>
        <a href="#" class="btn btn-outline text-dark border-dark mt-5">Se diriger</a> 
      </div>
    </div>
  </section>




<!-- Répète le thème sur chaque page -->
<?php
$content =ob_get_clean();
require "template.php";
?>  





