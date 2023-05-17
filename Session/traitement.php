<?php ob_start() ?>
<?php session_start() ?>



<div class="container">
    <?php
        if(isset($_POST['Name']) && isset($_POST['Prenom'])&& isset($_POST['Age'])&& isset($_POST['Taille'])&&isset($_POST['Sexe'])){

            $prenom =$_POST['Prenom'];
            $nom =$_POST['Name'];
            $age =$_POST['Age'];
            $taille =$_POST['Taille'];
            $sexe=$_POST['Sexe'];

            //Création des variables de session
            $_SESSION['Prenom'] = $prenom;
            $_SESSION['Name'] = $nom;
            $_SESSION['Age'] = $age;
            $_SESSION['Taille'] = $taille;
            $_SESSION['Sexe'] = $sexe;
            
            echo "Sexe|Prenom|Name|Age|Taille";
            echo "<br>";
            echo "$sexe|$prenom|$nom|$age|$taille";
            echo " Cliquez <a href='session.php'>Ici</a> pour accéder à votre compte";
        }
    ?>
</div>


<?php
$content = ob_get_clean();
require "../template.php";
?> 