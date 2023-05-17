<?php ob_start() ?> 
<?php session_start() ?>


<div class="container mt-5 d-flex justify-content-center">
    <form class="row gy-2 gx-3 align-items-center" method=POST>
        <div class="col-auto">
            <label  for="autoSizingInput">Langues :</label>

        </div>

        <div class="col-auto">
            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
            <select name="selection"  class="form-select" id="autoSizingSelect">
              <option  name="fr" value="francais" class="text-ucuppercase"<?php if(isset($_POST['selection']) && $_POST['selection'] == "francais") echo"selected" ?>>français</option>
              <option  name="en" value="anglais" <?php if(isset($_POST['selection']) && $_POST['selection'] == "anglais") echo"selected" ?>>anglais</option>
              <option  name="slovaque" value="slovaque" <?php if(isset($_POST['selection']) && $_POST['selection'] == "slovaque") echo"selected" ?>>slovaque</option>
            </select>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-success">Sauvegarder</button>
        </div>
    </form>
 
</div>
<?php


if(isset($_POST['selection'])){
  $selection=$_POST['selection'];
  setcookie('selection',$selection,time()+3600);
}else{
  if(isset($_COOKIE['selection'])){
    $selection=$_COOKIE['selection'];
  }else{
    $selection='francais';
  }
}

switch($selection) {

  case 'francais':
    include 'francais.php';
    break;

  case 'anglais':
    include 'anglais.php';
    break;

  case 'slovaque':
    include 'slovaque.php';
    break;

    

}
?>



<?php
$content =ob_get_clean();
require "../template.php";
?>  