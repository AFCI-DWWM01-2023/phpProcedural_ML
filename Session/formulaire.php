<?php ob_start() ?>
<!-- Démarre la session -->
<?php session_start() ?>
<!-- Demande à l'utilisateur d'entrées les données -->

<form class="container mt-5 perso" action="traitement.php" method="POST">
<div class="mb-3">
  <label for="nom" class="form-label">*Nom : </label>
  <input type="text" class="form-control" placeholder="Nom"  name="Name">
</div>
<div class="mb-3">
  <label for="prenom" class="form-label">*Prénom :</label>
  <input type="text" class="form-control"  placeholder="Prénom" name="Prenom">
</div>
<div class="mb-3">
  <label for="age" class="form-label">*Age :</label>
  <input type="number" class="form-control"  placeholder="Votre age" name="Age">
</div>
<label for="taille" class="form-label">*Taille :</label>  
<div class="mb-3 input-group"> 
       <!--Span permet de personnalisé l'input  -->
  <span class="input-group-text">Taille (1,26m à 3m)</span>  
         <!--Step="any" permet de prendre en compte les décimales  -->
  <input type="number" min="1.26" max="3" step="any" aria-label="First name" class="form-control" name="Taille">    
  <span class="input-group-text">m</span> 
</div>
<div class="container col mt-4">
  <!-- Radio permet de cocher soit l'un soit l'autre -->
    <input type="radio" name="Sexe" value="Femme">
    <label for="femme" class="me-5">*Femme</label>
    <input type="radio" name="Sexe" value="Homme">
    <label for="homme">Homme</label>
</div>
<input class="mt-4 btn btn-dark" type="submit" value="Envoyer" name="Send">
</form>
<?php
$content = ob_get_clean();
require "../template.php";

?>

