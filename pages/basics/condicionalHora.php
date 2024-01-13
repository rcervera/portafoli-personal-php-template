<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
    include $base_path."templates/header.php"; 
    include $base_path."templates/menu.php"; 
?>

<div class="container">

<?php 

    echo "<h1>Ara són les " . date("H:i:s") . " hores.</h1>";

    $hora24 = date("H"); // Hora en format 24 hores
    $dia = date("w"); // 0 és diumenge

    if($dia >=1 && $dia <=5) {
        if ($hora24 < "8") {
            echo "Ja t'has llevat??";
        } elseif ($hora24 < "15") {
            echo "Estás a classe?";
        } else {
            echo "Estás fent la FCT o estudiant?!";
        }
    }
    else "És cap de setmana"
?>

</div>

<?php 
    include $base_path."templates/footer.php";    
?>