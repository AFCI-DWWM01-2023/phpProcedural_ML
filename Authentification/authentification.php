<?php ob_start() ?> 
<h3 class="text-center mt-5 fs-1">Page d'authentification</h3>
<div class="container w-25 rounded border border-black mt-5 position-relative">
    <!-- Action = l'endroit où l'action se passe, par défault elle est sur la même page -->
    <form action="" method="POST">
    <div class="container col p-5 pb-0">
        <input type="email"name="Mail" placeholder="Entrer votre e-mail">
        
    </div>
    <div class="container col p-5">
        <input type="password"name="MDP" placeholder="Mot de passe">
    </div>
    <input type="submit" value="Envoyer" class="position-absolute top-100 start-50 m-5" name="btn">
    <!-- Vérification : regardez si la variable existe avec isset -->
    <?php 
    if(isset($_POST['btn'],$_POST['Mail'],$_POST['MDP'])){
        // Vérification du format de l'email
        if(filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)){
            echo "Parfait\n";
        }else{
            echo "Invalide\n";
        }
        // Définition d'une expression régulière
        // /?=.*? Vérification de l'expression régulière
        $pattern = "/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}/";
        if(preg_match($pattern,$_POST['MDP'])){
            echo "Parfait";
        
        }else{
            echo "\nInvalide";
        }
    }

    ?>
</div>







<?php
$content =ob_get_clean();
require "../template.php";
?>  