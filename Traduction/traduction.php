<?php ob_start() ?>
<?php session_start(); ?>

<div class="container d-flex justify-content-center mt-5">
    <form action="traduction.php" method="POST">
        <button type="submit" name="francais" class="btn">
            <img src="../IMG/Flag_Of_France.svg" alt="" style="width: 50px; height: 35px;">
        </button>
        <button type="submit" name="anglais" class="btn">
            <img src="../IMG/Flag_of_the_United_Kingdom_(3-5).svg" alt="" style="width: 60px; height: 35px;">
        </button>
        <button type="submit" name="espagnol" class="btn">
            <img src="../IMG/Flag_of_Spain.svg" alt="" style="width: 50px; height: 35px;">
        </button>
    </form>
</div>

<?php
$action = "";
if (isset($_POST['francais'])) {
    $action = 'francais';
} elseif (isset($_POST['anglais'])) {
    $action = 'anglais';
} elseif (isset($_POST['espagnol'])) {
    $action = 'espagnol';
}
switch ($action) {
    case "francais":
        include "francais.php";
        break;
    case "anglais":
        include "anglais.php";
        break;
    case "espagnol":
        include "espagnol.php";
        break;

}
?>

<p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo voluptatem dolore nesciunt deleniti aut quod commodi iste possimus, voluptates rerum repudiandae cupiditate mollitia aliquid aspernatur, pariatur fugiat impedit eligendi hic explicabo dolor assumenda id iure facere? Voluptates provident soluta nesciunt est assumenda esse unde totam magnam consequuntur rem optio fuga minima, aliquid error eos, dolor veritatis blanditiis delectus velit architecto corrupti hic ratione vero reprehenderit. Assumenda quibusdam suscipit, deleniti deserunt commodi porro ex, officiis vitae incidunt delectus eius eligendi voluptatibus nihil dolorum nostrum esse, provident consequatur sint id neque unde.</p>
<!-- <button>
    <a href="../index.php">Home</a>
</button> -->
<?php
$content = ob_get_clean();
require "../template.php";
?>