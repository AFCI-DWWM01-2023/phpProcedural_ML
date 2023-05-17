<?php ob_start() ?> 
<!-- Démarre une session -->
<?php session_start() ?>

<h3 class="text-center m-5 display-4">Session</h3>

<div class="container">
    <a href="index.php"class="btn btn-outline-dark" name="Home">Home</a>
    <a href="formulaire.php"class=" btn btn-outline-dark bg-dark text-white">Création de données</a>
</div>



<?php
  if(isset($_SESSION['Name']) && isset($_SESSION['Prenom'])&& isset($_SESSION['Age'])&& isset($_SESSION['Taille'])&&isset($_SESSION['Sexe'])){
    echo '<div class="container">
    <div class="container d-flex row justify-content-center">
        <ul class="list-group"> 
        <a href="session.php"class="btn btn-outline-dark" name="Home">Home</a> 
        <form class ="card p-3 mt-5 d-flex justify-content-start col-6" method="POST">
        <input type="submit" name="deb" class="mt-1 mb-1 btn btn-secondary" value="Deboggage">
        <input type="submit" name="concate" class="mt-1 mb-1 btn btn-secondary" value="Concatenation">
        <input type="submit" name="boucle" class="mt-1 mb-1 btn btn-secondary" value="Boucle">
        <input type="submit" name="fonction" class="mt-1 mb-1 btn btn-secondary" value="Fonction">
        <input type="submit" name="supprimer" class="mt-1 mb-1 btn btn-secondary" value="Supprimer">
        </form>
        </ul>
    </div>
    </div>';
    foreach($_SESSION as $key=>$value){
      $table[$key]=$value;
  }
    if((array_key_exists('deb', $_POST)) or (array_key_exists('concate', $_POST)) or (array_key_exists('boucle', $_POST)) or (array_key_exists('fonction', $_POST))or (array_key_exists('supprimer', $_POST))){

      switch($_POST){
          case (array_key_exists('deb', $_POST)):
              print_r($table);
              break;
          case (array_key_exists('concate', $_POST)):
            foreach($table as $key=>$value){
              if($key=='Sexe'){
                if($value=='Homme'){
                  echo 'Mr';
                }else{
                  echo 'Mme';
                }
              }
              if($key=='Prenom'){
                  $value=ucfirst($table[$key]);
                  echo "$value ";
              }
              if($key=='Name'){
                  $value=strtoupper($table[$key]);
                  echo "$value";
              }
              if($key=='Age'){
                echo "</br> J'ai $value ans et je mesure ";
              }
              if($key=='Taille'){
                  $value=str_replace('.', ',', $table[$key]);
                  echo "$value";
              }
              
          }
              break;
          case (array_key_exists('boucle', $_POST)):
            $ligne=0;
            foreach($table as $key=>$value){
                echo "À la ligne $ligne correspond la clé '$key' et contient '$value'</br>";
                $ligne++;
            }
              break;
          case (array_key_exists('fonction', $_POST)):
              readtable($table);
              break;
          case (array_key_exists('supprimer', $_POST)):
              session_destroy();
              header('location:session.php');
              break;
          
      
  }
  }
  }
else{ 
   
}
?>



<?php
$content =ob_get_clean();
require "../template.php";
?>