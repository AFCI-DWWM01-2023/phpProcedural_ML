<?php ob_start() ?>
<?php require ("fonction.php"); ?>
<h3 class="text-center mt-5 fs-1">Convertisseur de chiffres romain</h3>
<div class="container bg-dark col w-25 rounded mt-5">
    <!-- Définis la méthode utiliser POST -->
    <form action="" method="POST">
    <div class="container col p-5">
        <input type="number"name="Name" placeholder="Entrer votre nombre">
    </div>

    <div class="container col ps-5 pb-5">
        <input type="text"  name="name" value="
        <?php 
            if(isset($_POST['valider'])){
                convertisseur($_POST['Name']);
            }
        ?>">
    </div>
    <div class="container"></div>
    <input class="ms-5 mb-5" type="submit" value="Convertir" name="valider">
        </form>

</div>


<?php
$content =ob_get_clean();
require "../template.php";
?>